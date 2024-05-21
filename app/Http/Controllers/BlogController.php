<?php

namespace App\Http\Controllers;
use App\Models\Postagem;
use App\Models\categoriaPostagem;
use App\Models\Categoria;

use Illuminate\Http\Request;

class BlogController extends Controller
{
   public function index()
   {
    // $postagens = Postagem::orderBy('id', 'DESC')->get();
   //  return view('welcome', ['postagens' => $postagens]);
    $categorias = Categoria::get();
     //  dd($categorias);
     return view('welcome', ['categorias' => $categorias]);
   }


   public function categoriaPostagem($id){
        $postagens = Postagem::where('categoria_id', $id)->get();
        return view('Perfil', ['postagens' => $postagens]);
   }
}
