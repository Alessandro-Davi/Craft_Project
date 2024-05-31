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
    }



