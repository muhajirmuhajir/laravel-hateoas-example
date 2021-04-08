<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\DosenResource;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function show($id)
    {
        return new DosenResource(Dosen::find($id));
    }

    public function izin($id)
    {
        return response(['izin1', 'izin2']);
    }
}
