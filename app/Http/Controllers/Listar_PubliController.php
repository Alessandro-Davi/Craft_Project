<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postagem;
use App\Models\Categoria;
use App\Models\Curtida;
//use App\Models\Nomecategoria;

class Listar_PubliController extends Controller
{
    public function index($id = null)
    {

        $postagens = Postagem::where('categoria_id', $id)->paginate(5);
        //dd($postagens);
        $postagem = Postagem::find($id);
        $categoria = Categoria::find($id);

        return view('listar_publi', ['postagens' => $postagens , 'postagem' => $postagem, 'categoria' => $categoria]);


    }

    public function curtida($id){

        $curtidaExistente = Curtida::where('user_id', auth()->user()->id)->where('postagem_id', $id)->exists();

        //dd($curtidaExistente);

        if(!$curtidaExistente){
            $curtida = new Curtida;
            $curtida->user_id = auth()->user()->id;
            $curtida->postagem_id = $id;
            $curtida->save();
        }


        return back()->withInput();

    }

}

/*

        $nomeCategoria = $categoria->nome;
        $categorias = Categoria::where('id', $id)->paginate(5);

        //return view('listar_publi', ['categorias' => $categorias]);
        return view('listar_publi', ['categorias' => $categorias, 'nomeCategoria' => $nomeCategoria]);
        */
