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
            <div class="row">
                <div class="col-6 " style="width: 324px;">
                    <img src="data:image/png;base64,{{ $value->imagem }}" width="300" height="300" />
                </div>
                <div class="col-6 ms-3">
                    <h6> {{ $value->titulo }} </h6>
                    <br>

                    <a href="{{ route('mostrar_postagem', ['id' => $value->id]) }}"> <button
                            class="btn btn-outline-dark me-5" type="submit">Visitar Publicação</button></a>
                    <br><br><br><br><br><br><br>
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center ">
                            <a href=""> <i class="bi bi-heart p-2"></i></a> | {{ $value->curtidas->count() }}

                            @auth
                                | Curtir - <a href="{{ url('/listar_publi/curtida/' . $value->id) }}"> <i
                                        class="bi bi-heart p-2"></i></a>
                            @endauth
                            <a href="{{ url('/mostrar_postagem/' . $value->id) }}"> <i class="bi bi-chat-left p-2"></i></a>
                            | {{ $value->comentarios->count() }}

                        </div>

                        <!-- ICONE DENUNCIAR -->
                        <i class="bi bi-exclamation-triangle text-danger ms-auto
                         dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#usuario"
                                        data-bs-whatever="@user" href="#">Denunciar Usuário</a>
                                </li>
                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#postagem"
                                        data-bs-whatever="@post" href="#">Denunciar Postagem</a>
                                </li>
                            </ul>
                        </i>

                        <!-- FORMULARIO  DENUNCIAR USUARIO -->
                        <div class="modal fade" id="usuario" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"
                                            style="font-family: 'Courier New', Courier, monospace; font-weight: 600"
                                            id="exampleModalLabel">Denunciar Usuário</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <form method="POST" action="{{ url('denuncia_usuario') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label"> <br>
                                                    Digite abaixo o motivo desta denúncia.</label>
                                                <input type="hidden" name="denunciado_id"
                                                    value="{{ $value->user->id }}">
                                                <textarea class="form-control" id="message-text" name="conteudo"></textarea>
                                            </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Fechar</button>
                                        <button type="submit" class="btn fw-bold" value="Salvar">Enviar</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!--      FORMULARIO  DENUNCIAR POSTAGEM        -->
                        <div class="modal fade" id="postagem" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"
                                            style="font-family: 'Courier New', Courier, monospace; font-weight: 600"
                                            id="exampleModalLabel">Denunciar Postagem</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <form method="POST" action="{{ url('denuncia_postagem') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label"> <br>
                                                    Digite abaixo o motivo desta denúncia.</label>
                                                <input type="hidden" name="denunciado_id"
                                                    value="{{ $value->user->id }}">
                                                <input type="hidden" name="postagem_id" value="{{ $value->id }}">
                                                <textarea class="form-control" id="message-text" name="conteudo"></textarea>
                                            </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Fechar</button>
                                        <button type="submit" class="btn fw-bold" value="Salvar">Enviar</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <div class="container">

       $postagens->links()

    </div>
@endsection
