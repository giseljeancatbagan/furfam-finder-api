<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AdoptionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'pet_id' => $this->pet_id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'contact_info' => $this->contact_info,
            'adoption_date' => $this->adoption_date
        ];
    }
}
