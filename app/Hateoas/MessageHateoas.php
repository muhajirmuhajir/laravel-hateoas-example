<?php

namespace App\Hateoas;

use App\Models\Message;
use GDebrauwer\Hateoas\Traits\CreatesLinks;

class MessageHateoas
{
    use CreatesLinks;

    /**
     * Get the HATEOAS link to view the message.
     *
     * @param \App\Message $message
     *
     * @return null|\GDebrauwer\Hateoas\Link
     */
    public function self(Message $message)
    {
        return $this->link('message.show', ['id' => $message->id]);
    }

    public function delete(Message $message)
    {
        return $this->link('message.destroy', ['id' => $message->id]);
    }
}
