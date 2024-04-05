@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categoria</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>

                          </tr>
                        </thead>
                        <tbody>

                        @foreach ($categorias as $value)
                          <tr>
                            <th scope="row">{{$value->id}}</th>
                            <td>{{$value->nome}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
