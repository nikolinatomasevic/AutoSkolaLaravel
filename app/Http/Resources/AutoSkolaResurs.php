<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AutoSkolaResurs extends JsonResource
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
            'ID: ' => $this->resource->id,
            'Naziv: ' => $this->resource->naziv,
            'Grad: ' => $this->resource->grad,
            'Cena obuke: ' => $this->resource->cena_obuke,
            'Broj vozila: ' => $this->resource->broj_vozila
        ];
    }
}
