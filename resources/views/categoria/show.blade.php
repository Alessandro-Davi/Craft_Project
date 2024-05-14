@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categoria</div>

                <div class="card-body">
                    <strong>Nome: </strong>             {{$categoria->nome}} <br>
                    <strong>Data: </strong>             {{ \Carbon\Carbon::parse($categoria->created_at)->format('d/m/Y h:1:s A')}} <br>
                    <strong>Atualização: </strong>      {{ \Carbon\Carbon::parse($categoria->created_at)->format('d/m/Y h:1:s A')}} <br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
