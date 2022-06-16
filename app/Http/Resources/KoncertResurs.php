<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KoncertResurs extends JsonResource
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
            'Datum ' => $this->resource->datum,
            'Cena karte ' => $this->resource->cenaKarte,
            'Hala ' => new HalaResurs($this->resource->hala),
            'Pevač ' => new PevacResurs($this->resource->pevac),
        ];
    }
}
