<?php

namespace App\Http\Controllers;

use App\Curso;

class HomeController extends Controller
{
    public function index()
    {

        return view('home', compact('cursos'));
    }
}