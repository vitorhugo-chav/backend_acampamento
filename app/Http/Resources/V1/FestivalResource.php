<?php

namespace App\Http\Resources\V1;

use App\Models\Festival;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Festival */
class FestivalResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'minimal_age' => $this->minimal_age,
            'is_paid_festival' => $this->is_paid_festival,
            'ticket_price' => $this->ticket_price,
            'sale_start_date' => $this->sale_start_date,
            'payment_link' => $this->payment_link,
            'event' => EventResource::make($this->whenLoaded('event')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
