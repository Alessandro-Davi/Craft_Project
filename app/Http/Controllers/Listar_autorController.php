<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



class Listar_autorController extends Controller
{
    public function autor(){

        $autores = User::orderBy('name', 'ASC')->get();
        return view('listar_autor', ['autores' => $autores]);

    }

}
