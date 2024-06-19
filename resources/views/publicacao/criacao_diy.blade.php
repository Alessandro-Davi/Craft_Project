@extends('layouts.navfooter')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Postagem</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success">
                         {{ session('status') }}
                    </div>
                    @endif

                    <a class="btn btn-success" href="{{url('/publicacao/create')}}" role="button">Criar</a>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Titulo</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>

                        @foreach ($postagens as $value)
                          <tr>
                            <th scope="row">{{$value->id}}</th>
                            <td>{{$value->categoria->nome}}</td>
                            <td>{{$value->titulo}}</td>
                            <td><a class="btn btn-primary" href="{{ route('mostrar_postagem', ['id' => $value->id]) }}" role="button">Visualizar</a></td>
                            <td><a class="btn btn-warning" href="{{url('/publicacao/' . $value->id . '/edit')}}" role="button">Editar</a></td>
                            <td>
                                <form method="POST" action="{{url('/publicacao/' . $value->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="form-control" value="Deletar">
                                </form>

                            </td>
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
