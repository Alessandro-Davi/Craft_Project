<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postagem;
use App\Models\User;

class PerfilController extends Controller
{
    public function autorPostagem($id)
        {
            $autor = User::find($id);
            $nomeAutor = $autor->name;
            $autor = User::find($id);
            $emailAutor = $autor->email;
            $postagens = Postagem::where('user_id', $id)->orderBy('id', 'DESC')->get();
            return view('perfil', ['postagens' => $postagens,  'nomeAutor' => $nomeAutor, 'emailAutor' =>  $emailAutor]);

        }


        public function perfilUpdate(Request $request, string $id)
        {
            //dd($request->all());

            $validated = $request->validate([
                'email' => '|min:30',
                'biografia' => '|min:15',
                'foto' => '|mimes:jpg,png',
            ]);

            $foto = $request->file('foto');

            $user = User::find($id);
            $user->email = $request->email;
            $user->biografia = $request->biografia;
            $user->imagem = base64_encode (file_get_contents ($imagem));
            $user->save();

            return redirect('Perfil')->with('status', 'Perfil atualizado com sucesso!');
        }
    }



