<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InstruktorResurs extends JsonResource
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
            'Ime: ' => $this->resource->ime,
            'Prezime: ' => $this->resource->prezime,
            'Licenca: ' => $this->resource->licenca,
            'Auto škola: ' => new AutoSkolaResurs($this->resource->autoskola),
        ];
    }
}
