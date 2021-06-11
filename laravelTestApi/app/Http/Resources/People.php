<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class People extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'hair_color' => $this->hair_color,
            'homeworld' => $this->homeworld,
            'mass' => $this->mass,
            'gender' => $this->gender,
            'birth_year' => $this->birth_year,
            'eye_color' => $this->eye_color,
            'skin_color' => $this->skin_color,
            'url' => $this->url,
            'height' => $this->height,
            'planets' => $this->planets(),
            'species' => $this->species()
        ];
    }
}
