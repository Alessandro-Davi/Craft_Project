<?php

namespace App\Http\Controllers;
use App\Models\Postagem;

use Illuminate\Http\Request;

class BlogController extends Controller
{
   public function index()
   {
    $postagens = Postagem::orderBy('id', 'DESC')->get();
    return view('welcome', ['postagens' => $postagens]);
   }
}
