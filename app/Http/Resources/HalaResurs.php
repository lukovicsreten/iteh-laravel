<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HalaResurs extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'ID ' => $this->resource->id,
            'Ime ' => $this->resource->ime,
            'Adresa ' => $this->resource->adresa,
            'Grad ' => $this->resource->grad,
            'Kapacitet ' => $this->resource->kapacitet,
        ];
    }
}
