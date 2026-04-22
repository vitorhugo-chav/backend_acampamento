<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreEventRequest;
use App\Http\Requests\Api\V1\UpdateEventRequest;
use App\Http\Requests\Api\V1\ValidateParticipationRequest;
use App\Http\Resources\V1\EventResource;
use App\Models\Event;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;
use Carbon\Carbon;

class EventController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return EventResource::collection(Event::with('eventable')->paginate());
    }

    public function store(StoreEventRequest $request): EventResource
    {
        return EventResource::make(Event::create($request->validated()));
    }

    public function show(Event $event): EventResource
    {
        return EventResource::make($event->load('eventable'));
    }

    public function update(UpdateEventRequest $request, Event $event): EventResource
    {
        $event->update($request->validated());

        return EventResource::make($event);
    }

    public function destroy(Event $event): Response
    {
        $event->delete();

        return response()->noContent();
    }

    /**
     * Validate if a user can participate in an event based on their birthday.
     */
    public function validateParticipation(Event $event, ValidateParticipationRequest $request)
    {
        // Load the eventable (Camping or Festival)
        $event->load('eventable');

        // If the eventable is not a Camping, we cannot validate age (for now)
        if (!$event->eventable instanceof \App\Models\Camping) {
            return response()->json([
                'valid' => false,
                'message' => 'Validation is only available for camping events.',
                'age' => null,
                'minimal_age' => null,
                'maximal_age' => null,
            ], 400);
        }

        /** @var \App\Models\Camping $camping */
        $camping = $event->eventable;

        // Parse the birthday from the request
        $birthday = Carbon::parse($request->input('birthday'));

        // Calculate age at the event start date
        $age = $birthday->diffInYears($event->start_date);

        // Check if age is within the allowed range
        $isValid = $age >= $camping->minimal_age && $age <= $camping->maximal_age;

        return response()->json([
            'valid' => $isValid,
            'message' => $isValid
                ? 'Idade dentro do permitido para participação.'
                : 'Idade fora do permitido para participação.',
            'age' => $age,
            'minimal_age' => $camping->minimal_age,
            'maximal_age' => $camping->maximal_age,
        ]);
    }
}
