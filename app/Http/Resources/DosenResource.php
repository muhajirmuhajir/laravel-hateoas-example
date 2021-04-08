<?php

namespace App\Http\Resources;

use App\Hateoas\DosenHateoas;
use GDebrauwer\Hateoas\Traits\HasLinks;
use Illuminate\Http\Resources\Json\JsonResource;

class DosenResource extends JsonResource
{
    use HasLinks;
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
            'nama'=> $this->nama,
            'nik' => $this->nik,
            'jabatan' => $this->jabatan,
            '_links' => $this->links(DosenHateoas::class)
        ];
    }
}
