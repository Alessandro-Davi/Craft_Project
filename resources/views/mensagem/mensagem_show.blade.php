@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header">Conteúdo da mensagem do usuário</div>
                    <div class="card-body">
                        <strong> Nome:</strong> {{ $mensagem->name }}<br>
                        <strong> Email:</strong> {{ $mensagem->email }}<br>
                        <strong> Conteudo:</strong> {{$mensagem->mensagem }}<br>

                        <strong> Criação:</strong>
                        {{ \Carbon\Carbon::parse($mensagem->created_at)->format('d/m/Y h:i:s') }}<br>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
