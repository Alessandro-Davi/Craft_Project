<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postagem;
use App\Models\Categoria;

class PostagemController extends Controller
{
   /**
    * Display a listing of the resource.
    */
   public function index()
   {
       $postagens=Postagem::orderBy('titulo', 'ASC')->get();
       return view('postagem.index', ['postagens' =>$postagens]);
   }

   /**
    * Show the form for creating a new resource.
    */
   public function create()
   {
        $categorias=Categoria::orderBy('nome', 'ASC')->get();
       return view('postagem.create', ['categorias' => $categorias]);
   }

   /**
    * Store a newly created resource in storage.
    */
   public function store(Request $request)
   {
       //dd($request->all());

       $user_id = auth()->user()->id;


        $messages = [
            'titulo.required' => 'O campo :attribute é obrigatório.',
            'conteudo.required' => 'O campo :attribute é obrigatório.',
        ];

        $validated = $request->validate([
            'titulo' => 'required|min:5',
            'conteudo' => 'required|min:5',
        ], $messages);


        $imagem = $request->file('imagem');


        $postagem = new Postagem;
        $postagem->titulo = $request->titulo;
        $postagem->conteudo = $request->conteudo;
        $postagem->user_id=$user_id;
        $postagem->categoria_id=$request->categoria_id;
        if($imagem != null){
            $postagem->imagem = base64_encode (file_get_contents ($imagem));
         }

        $postagem->save();

        return redirect('postagem')->with('status', 'Postagem Salva com sucesso');

   }

   /**
    * Display the specified resource.
    */
   public function show(string $id)
   {
        $postagem = Postagem::find($id);
        return view('postagem.show', ['postagem' => $postagem]);
   }


   public function edit(string $id)
   {
        $postagem = Postagem::find($id);
        $categorias=Categoria::orderBy('nome', 'ASC')->get();
        return view('postagem.edit', ['postagem' => $postagem, 'categorias' => $categorias]);
   }


   public function update(Request $request, string $id)
   {
      // dd($id);

      $user_id = auth()->user()->id;

      $messages = [
        'titulo.required' => 'O campo :attribute é obrigatório.',
        'conteudo.required' => 'O campo :attribute é obrigatório.',
    ];

    $validated = $request->validate([
        'titulo' => 'required|min:5',
        'conteudo' => 'required|min:5',
    ], $messages);

    $imagem = $request->file('imagem');



        $postagem = Postagem::find($id);
        $postagem->titulo = $request->titulo;
        $postagem->conteudo = $request->conteudo;
        $postagem->user_id=$user_id;
        $postagem->categoria_id=$request->categoria_id;
        if($imagem != null){
            $postagem->imagem = base64_encode (file_get_contents ($imagem));
         }
        $postagem->save();

       return redirect('postagem')->with('status', 'Postagem atualizada com sucesso');

   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy(string $id)
   {

       $postagem=Postagem::find($id);
        $postagem->delete();

     return redirect('postagem')->with('status', 'Postagem excluida com sucesso');
   }
}

