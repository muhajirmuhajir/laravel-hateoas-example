<?php

namespace App\Http\Resources;

use App\Hateoas\MessageHateoas;
use GDebrauwer\Hateoas\Traits\HasLinks;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class MessageResource extends JsonResource
{
    use HasLinks;

    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'text' => $this->text,
            '_links' => $this->links(MessageHateoas::class),
        ];
    }
}
