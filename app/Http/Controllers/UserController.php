<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{

    public function login(Request $request){

       // dd($request->all());
    $user_exist = User::where('email', $request->email)->exists();

    if (!$user_exist){
        //redirecionar para tela anterior mostrando mensagem login ou senha inválida
        return redirect('signin')->with('status', 'ID de usuário ou senha incorreta.');
         //redirectback (mesma forma do create)
        dd('Não existe');
    }

    //    dd($user_exist);
        $user = User::where('email', $request->email)->first();

        if (Hash::check($request->password, $user->password)) {
            Auth::login($user);
            //redirecionar para dashboard
            //dd(auth()->user());
            return redirect('/');
        }else{
            //redirecionar para tela anterior mostrando mensagem login ou senha inválida
            return redirect('signin')->with('status', 'Tente novamente');
        }


    }


    public function logout(Request $request): RedirectResponse {

        Auth::logout();
        $request->session()->invalidate();

        return redirect('/');
    }


    public function cadastrar(Request $request){

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password=Hash::make($request->password);
        $user->save();

        return redirect('signin')->with('status', 'USUÁRIO CADASTRADO COM SUCESSO');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
