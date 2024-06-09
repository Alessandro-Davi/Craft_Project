<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postagem;
//use App\Models\Categoria;
//use App\Models\Nomecategoria;

class Listar_PubliController extends Controller
{
    public function index($id = null)
    {

        $postagens = Postagem::where('categoria_id', $id)->paginate(5);
        //dd($postagens);
        $postagem = Postagem::find($id);

        return view('listar_publi', ['postagens' => $postagens , 'postagem' => $postagem]);

        /*
        $categoria = Categoria::find($id);
        $nomeCategoria = $categoria->nome;
        $categorias = Categoria::where('id', $id)->paginate(5);

        //return view('listar_publi', ['categorias' => $categorias]);
        return view('listar_publi', ['categorias' => $categorias, 'nomeCategoria' => $nomeCategoria]);
        */
    }

}
