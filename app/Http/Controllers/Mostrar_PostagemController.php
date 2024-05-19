<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mostrar_PostagemController extends Controller
{
    public function index()
    {

        return view('mostrar_postagem');
    }

}
