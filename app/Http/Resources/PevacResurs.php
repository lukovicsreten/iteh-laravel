<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PevacResurs extends JsonResource
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
            'Ime i prezime ' => $this->resource->imePrezime,
            'Vrsta muzike ' => $this->resource->vrstaMuzike,
            'Broj koncerata ' => $this->resource->brojKoncerata,
        ];
    }
}
