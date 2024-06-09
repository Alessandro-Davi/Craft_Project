<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postagem;
use App\Models\Comentario;

class Mostrar_PostagemController extends Controller
{
    public function index()
    {
        // $postagens = Postagem::where('categoria_id', $id)->get();
        // //dd($postagens);
        return view('mostrar_postagem');

    }

    public function postagem($id){

        $postagem = Postagem::find($id);
        return view('mostrar_postagem' , ['postagem' => $postagem]);
    }


    public function postagemComentario(Request $resquest, $id){

        $comentario = new Comentario;
        $comentario->conteudo = $resquest->conteudo;
        $comentario->user_id = auth()->user()->id;
        $comentario->postagem_id = $id;
        $comentario->save();

        return redirect()->route('mostrar_postagem', $id);

    }
}
