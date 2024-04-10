<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InscribirseController extends Controller
{
    public function inscribirse()
    {
        return view('cursos.inscribirse');
    }
    public function node()
    {
        $url = 'http://localhost:3000/contenido';
        return redirect()->away($url);
    }   
}
