<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Meal extends JsonResource
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
            'name' => $this->title,
            'content' => $this->description,
            'allergy' => $this->allergy,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
            'links' => [
                'items' => config('app.url') . "/api/meals/{$this->id}/items/"
            ]
        ];
    }

}
