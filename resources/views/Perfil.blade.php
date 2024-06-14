@extends('layouts.navfooter')


@section('content')
    <img src="{{ url('./img/fundo_tela.png') }}" alt="Responsive image">

    <div class="container" style=" height: 130px;">
        <img src="data:image/png;base64,{{ $user->imagem }}" class="rounded-circle pose" width="250" height="250"
            alt="Responsive image">
    </div>


    <div class="container">

        <h4>{{ $nomeAutor }}</h4>

        <p> {{ $biografiaAutor }} </p>

        <div class="d-flex justify-content-between">
            <p> {{ $emailAutor }}</p>
            <button type="button" class="btn btn-outline-dark" data-bs-target="#editar_perfil" data-bs-toggle="modal"
                data-bs-whatever="@user">Editar Perfil</button>
        </div>


        <div class="modal fade" id="editar_perfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" style="font-family: 'Courier New', Courier, monospace; font-weight: 600"
                            id="exampleModalLabel">Editar Perfil</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form method="POST" action="{{ url('/perfil/editar_perfil/' . $user->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="myfile">Selecione uma imagem</label>
                                <div class="form-floating mb-3 mt-3 text-muted">
                                    <input type="file" class="form-control" id="myfile" name="imagem">
                                </div>

                            </div>
                            {{--  --}}
                            <div class="mb-3">
                                <div class="form-floating mb-3 mt-3 text-muted">
                                    <label for="lname">Biografia</label>
                                    <input type="text" class="form-control" id="lname" name="biografia"
                                        value="{{ $user->biografia }}">
                                </div>
                            </div>
                            {{--  --}}
                            <div class="mb-3">
                                <div class="form-floating mb-3 mt-3 text-muted">
                                    <label for="fname">Email</label>
                                    <input type="text" id="fname" class="form-control" name="email"
                                        value="{{ $user->email }}">
                                </div>
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn fw-bold" value="Salvar">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <ul class="profile-header-tab nav nav-tabs">
            <li class="nav-item"><a href="#profile-post" class="nav-link active show" data-toggle="tab">POSTAGENS</a>
            </li>
            <li class="nav-item"><a href="Profile_Fav.html" class="nav-link" data-toggle="tab">FAVORITOS</a></li>
        </ul>
    </div>


    @foreach ($postagens as $value)
        <div class="container">
            <div class="row mt-3">
                <div class="col-6" style="width: 324px;">
                    <img src="data:image/png;base64,{{ $value->imagem }}" width="300" height="300" alt="...">
                </div>
                <div class="col-6 ms-3">
                    <h4> {{ $value->titulo }} </h4>
                    <br>
                    {{-- <p> {{ $value->conteudo }}</p> --}}
                    <a href="{{ route('mostrar_postagem', ['id' => $value->id]) }}"> <button
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
@endsection
