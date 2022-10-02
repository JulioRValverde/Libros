<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;

class PublicacionController extends Controller
{
    public function index()
    {
        $publicacion = Publicacion::where('estado_id',2)->latest()->paginate(3);
        # code...
        return response($publicacion);
    }
}
