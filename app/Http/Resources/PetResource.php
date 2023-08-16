<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PetResource extends JsonResource
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
            'species' => $this->species,
            'name' => $this->name,
            'breed' => $this->breed,
            'birthday' => $this->birthday,
            'gender' => $this->gender,
            'size' => $this->size,
            'description' => $this->description,
            'availability_status' => $this->availability_status,
            'image' => $this->image,
            'shelter_id' => $this->shelter_id,
            'shelter' => $this->whenLoaded('shelter')

        ];
    }
}
