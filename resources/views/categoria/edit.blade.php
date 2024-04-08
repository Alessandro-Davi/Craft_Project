@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categoria - EDITAR</div>

                <div class="card-body">
                    @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                 @endforeach
                </ul>
            </div>
            @endif

                    <form method="POST" action="{{url('/categoria/' . $categoria->id. '/edit')}}">
                        @csrf
                        @method('PUT')
                        <label for="fname">First name:</label><br>
                        <input type="text" class="form-control" value="{{$categoria->nome}} "name="fname"><br><br>
                        <input type="submit" class="form-control" value="Enviar">
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
