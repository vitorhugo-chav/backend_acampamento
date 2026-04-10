<?php

namespace App\Http\Resources\V1;

use App\Models\Camping;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Camping */
class CampingResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'notice' => $this->notice,
            'term' => $this->term,
            'image' => $this->image,
            'minimal_age' => $this->minimal_age,
            'maximal_age' => $this->maximal_age,
            'camper_fee' => $this->camper_fee,
            'servant_fee' => $this->servant_fee,
            'planned_man_vacancies' => $this->planned_man_vacancies,
            'planned_woman_vacancies' => $this->planned_woman_vacancies,
            'planned_couple_vacancies' => $this->planned_couple_vacancies,
            'raffle_man_vacancies' => $this->raffle_man_vacancies,
            'raffle_woman_vacancies' => $this->raffle_woman_vacancies,
            'raffle_couple_vacancies' => $this->raffle_couple_vacancies,
            'raffle_total_vacancies' => $this->raffle_total_vacancies,
            'raffle_camper_subscription_start_date' => $this->raffle_camper_subscription_start_date,
            'raffle_camper_subscription_end_date' => $this->raffle_camper_subscription_end_date,
            'raffle_camper_date' => $this->raffle_camper_date,
            'raffle_servant_subscription_start_date' => $this->raffle_servant_subscription_start_date,
            'raffle_servant_subscription_end_date' => $this->raffle_servant_subscription_end_date,
            'raffle_servant_date' => $this->raffle_servant_date,
            'camper_registration_start_date' => $this->camper_registration_start_date,
            'camper_registration_end_date' => $this->camper_registration_end_date,
            'camper_payment_link' => $this->camper_payment_link,
            'camper_payment_date' => $this->camper_payment_date,
            'servant_registration_start_date' => $this->servant_registration_start_date,
            'servant_registration_end_date' => $this->servant_registration_end_date,
            'servant_payment_link' => $this->servant_payment_link,
            'servant_payment_date' => $this->servant_payment_date,
            'event' => EventResource::make($this->whenLoaded('event')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
