<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesquisarController extends Controller
{
    public function index()
    {

        return view('pesquisar');
    }

}
