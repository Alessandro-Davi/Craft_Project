<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class Listar_PubliController extends Controller
{
    public function index($id = null)
    {
        if (is_null($id)) {
            $categorias = Categoria::get();
        } else {
            $categorias = Categoria::where('id', $id)->get();
        }

        return view('listar_publi', ['categorias' => $categorias]);
    }


}
