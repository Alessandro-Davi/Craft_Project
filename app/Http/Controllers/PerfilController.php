<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postagem;
use App\Models\User;
use App\Models\Curtida;
use App\Models\Categoria;

class PerfilController extends Controller
{
    public function autorPostagem($id)
        {
            $user = User::find($id);
            $nomeAutor = $user->name;
            $emailAutor = $user->email;
            $biografiaAutor = $user->biografia;
            $imagemAutor = $user->imagem;
            $postagens = Postagem::where('user_id', $id)->orderBy('id', 'DESC')->get();
            return view('perfil', ['user' => $user, 'postagens' => $postagens,  'nomeAutor' => $nomeAutor, 'emailAutor' =>  $emailAutor,'biografiaAutor' =>  $biografiaAutor ,'imagemAutor' =>  $imagemAutor ]);

        }


        public function perfilUpdate(Request $request, $id)
        {
            //dd($request->all());

            $imagem = $request->file('imagem');

            $user = User::find($id);
            if ($imagem != null){
                $user->imagem = base64_encode (file_get_contents ($imagem));
            }

            $user->biografia = $request->biografia;
            $user->email = $request->email;
            $user->save();

            return redirect('perfil/' . $id)->with('status', 'Perfil atualizado com sucesso!');
        }

        public function curtida($id){

            $curtidaExistente = Curtida::where('user_id', auth()->user()->id)->where('postagem_id', $id)->exists();
            $postagem = Postagem::find($id);
            //dd($curtidaExistente);

            if(!$curtidaExistente){
                $curtida = new Curtida;
                $curtida->user_id = auth()->user()->id;
                $curtida->postagem_id = $id;
                $curtida->save();
            }


            return back()->withInput();

        }


        public function index($id = null){

        //$postagem = Postagem::find($id);
        $postagens = Postagem::where('user_id', $id)->paginate(5);
        //dd($postagens);
        //$categoria = Categoria::find($id);

        return view('perfil', ['postagens' => $postagens]);
    }

}



