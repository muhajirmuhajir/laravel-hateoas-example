<?php

namespace App\Hateoas;

use App\Models\Dosen;
use GDebrauwer\Hateoas\Traits\CreatesLinks;

class DosenHateoas
{
    use CreatesLinks;

    /**
     * Get the HATEOAS link to view the dosen.
     *
     * @param \App\Dosen $dosen
     *
     * @return null|\GDebrauwer\Hateoas\Link
     */
    public function self(Dosen $dosen)
    {
        return $this->link('dosen.show',['id' => $dosen->id]);
    }

    public function izin(Dosen $dosen)
    {
        return $this->link('dosen.izin',['id' => $dosen->id]);
    }
}
