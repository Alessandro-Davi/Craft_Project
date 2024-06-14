@extends('layouts.navfooter')



@section('content')
    <div class="container">
        <div class=" text-center " id="titulo">
            <h3>{{ $categoria->nome }} <br> ────</h3>
        </div>
    </div>
    {{-- $postagens->first() --}}

    @foreach ($postagens as $value)
        <div class="container">
            <div class="row">
                <div class="col-6 " style="width: 324px;">
                    <img src="data:image/png;base64,{{ $value->imagem }}" width="300" height="300" />
                </div>
                <div class="col-6 ms-3">
                    <h6> {{ $value->titulo }} </h6>
                    <br>

                    <a href="{{ route('mostrar_postagem', ['id' => $postagem->id]) }}"> <button
                            class="btn btn-outline-dark me-5" type="submit">Visitar Publicação</button></a>
                    <br><br><br><br><br><br>
                    <div class="d-flex justify-content-between">
                        <div class="">
                        <p> Comentários - {{$value->comentarios->count() }} </p>
                        <p> Curtidas - {{$value->curtidas->count() }} </p>
                        </div>

                        <i class="fa-2x bi bi-exclamation-triangle"></i>
                        </div>
                </div>
            </div>
        </div>
    @endforeach

    <div class="container">

        {{ $postagens->links() }}

    </div>
@endsection
