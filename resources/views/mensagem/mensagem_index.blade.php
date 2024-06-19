@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header">Denúncia Postagem</div>

                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Email</th>


                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($mensagens as $value)
                                <tr>
                                    <th scope="row">{{ $value->id }}</th>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->email }}</td>


                                            <td><a class="btn btn-primary" href="{{ url('/mensagens/' . $value->id) }}"
                                            role="button">Visualizar</a></td>

                                    <td>
                                        <form method="GET" action="{{ url('/mensagens/' . $value->id) }}">
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
    @endsection
