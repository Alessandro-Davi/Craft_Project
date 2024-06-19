<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensagem;

class ContatoController extends Controller
{
    public function index()
    {

        return view('contato');
    }

    public function enviarMensagem(Request $request)
    {
            // Validação dos dados do formulário
            $request->validate([
                'email' => 'required|email',
                'mensagem' => 'required',
            ]);

            // Criação de uma nova mensagem no banco de dados
            $mensagem = new Mensagem();
            $mensagem->name = $request->input('name');
            $mensagem->email = $request->input('email');
            $mensagem->mensagem = $request->input('mensagem');
            $mensagem->save();


            return redirect()->back()->with('status', 'Mensagem enviada com sucesso!');
    }

        public function listarMensagens()
    {

        $mensagens = Mensagem::orderBy('created_at', 'desc')->get();
        return view('mensagem.mensagem_index', ['mensagens' => $mensagens]);
    }

    public function create()
    {
        //
    }

    public function show(string $id)
    {
        $mensagem = Mensagem::find($id);
        return view('mensagem.mensagem_show', ['mensagem' => $mensagem]);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        $mensagem = Mensagem::find($id);
        $mensagem->delete();
        return redirect('mensagem.mensagem_show')->with('status', 'Mensagem Removida');
    }

}
