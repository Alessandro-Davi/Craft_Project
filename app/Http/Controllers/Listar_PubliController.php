<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Categoria;

class Listar_PubliController extends Controller
{
    public function index()
    {

        $categorias = Categoria::get();
     //  dd($categorias);
     return view('listar_publi', ['categorias' => $categorias]);

    }

}
