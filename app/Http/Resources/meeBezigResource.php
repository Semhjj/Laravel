<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class meeBezigResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
          'Id' => $this->id,
          'Email' => $this->email,
          'Opdracht' => $this->opdracht,
          'Opdracht_omschrijving' => $this->opdracht_omschrijving
        ];
    }
}
