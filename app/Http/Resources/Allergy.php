<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Allergy extends JsonResource
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
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
            'links' => [
                'meals' => config('app.url') . "/api/allergies/{$this->id}/meals/",
            ]
        ];
    }
}
