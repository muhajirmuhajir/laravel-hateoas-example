<?php

namespace App\Http\Resources;

use App\Hateoas\MessageHateoas;
use GDebrauwer\Hateoas\Traits\HasLinks;
use Illuminate\Http\Resources\Json\ResourceCollection;

class MessageCollection extends ResourceCollection
{
    use HasLinks;
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            '_links'=> [
                'self' => $request->url()
            ]
        ];
    }
}
