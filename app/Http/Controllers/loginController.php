<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index()
    {

        return view('login');
    }

    public function store()
    {

        var_dump('store');
    }

    public function destroy()
    {

        var_dump('destroy');
    }
}
