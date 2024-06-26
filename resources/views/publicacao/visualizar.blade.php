@extends('layouts.navfooter')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Postagem</div>

                <div class="card-body">
                    <strong>Categoria </strong>          {{$postagem->categoria->nome}} <br>
                    <strong>Titulo: </strong>             {{$postagem->titulo}} <br>
                    <strong>Autor:  </strong>             {{$postagem->user->name}} <br>
                    <strong>Conteudo: </strong>             {!!$postagem->conteudo!!}
                    <br>

                    <strong>Imagem: </strong>  <br>     <img src="data:image/png;base64,{{ $postagem->imagem }}" />
                    <br>
                    <br>
                    <strong>Criação: </strong>             {{ \Carbon\Carbon::parse($postagem->created_at)->format('d/m/Y h:1:s A')}} <br>
                    <strong>Atualização: </strong>      {{ \Carbon\Carbon::parse($postagem->created_at)->format('d/m/Y h:1:s A')}} <br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
