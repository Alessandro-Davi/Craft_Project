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

                        @auth
                         <!-- ICONE DENUNCIAR -->
                         <i class="bi bi-exclamation-triangle text-danger ms-auto
                         dropdown-toggle"
                               data-bs-toggle="dropdown" aria-expanded="false">
                               <ul class="dropdown-menu">
                                   <li><a class="dropdown-item" data-bs-toggle="modal"
                                           data-bs-target="#usuario" data-bs-whatever="@user"
                                           href="#">Denunciar Usuário</a>
                                   </li>
                                   <li><a class="dropdown-item" data-bs-toggle="modal"
                                           data-bs-target="#postagem" data-bs-whatever="@post"
                                           href="#">Denunciar Postagem</a>
                                   </li>
                               </ul>
                           </i>

                           <!-- FORMULARIO  DENUNCIAR USUARIO -->
                           <div class="modal fade" id="usuario" tabindex="-1"
                               aria-labelledby="exampleModalLabel" aria-hidden="true">
                               <div class="modal-dialog">
                                   <div class="modal-content">
                                       <div class="modal-header">
                                           <h5 class="modal-title"
                                               style="font-family: 'Courier New', Courier, monospace; font-weight: 600"
                                               id="exampleModalLabel">Denunciar Usuário</h5>
                                           <button type="button" class="btn-close"
                                               data-bs-dismiss="modal" aria-label="Close"></button>
                                       </div>
                                       <div class="modal-body">

                                           <form method="POST"
                                               action="{{ url('denuncia_usuario') }}">
                                               @csrf
                                               <div class="mb-3">
                                                   <label for="message-text"
                                                       class="col-form-label"> <br>
                                                       Digite abaixo o motivo desta denúncia.</label>
                                                   <input type="hidden" name="denunciado_id"
                                                       value="{{ $value->user->id }}">
                                                   <textarea class="form-control" id="message-text" name="conteudo"></textarea>
                                               </div>

                                       </div>
                                       <div class="modal-footer">
                                           <button type="button" class="btn btn-secondary"
                                               data-bs-dismiss="modal">Fechar</button>
                                           <button type="submit" class="btn fw-bold"
                                               value="Salvar">Enviar</button>
                                       </div>
                                       </form>
                                   </div>
                               </div>
                           </div>

                           <!--      FORMULARIO  DENUNCIAR POSTAGEM        -->
                           <div class="modal fade" id="postagem" tabindex="-1"
                               aria-labelledby="exampleModalLabel" aria-hidden="true">
                               <div class="modal-dialog">
                                   <div class="modal-content">
                                       <div class="modal-header">
                                           <h5 class="modal-title"
                                               style="font-family: 'Courier New', Courier, monospace; font-weight: 600"
                                               id="exampleModalLabel">Denunciar Postagem</h5>
                                           <button type="button" class="btn-close"
                                               data-bs-dismiss="modal" aria-label="Close"></button>
                                       </div>
                                       <div class="modal-body">

                                           <form method="POST"
                                               action="{{ url('denuncia_postagem') }}">
                                               @csrf
                                               <div class="mb-3">
                                                   <label for="message-text"
                                                       class="col-form-label"> <br>
                                                       Digite abaixo o motivo desta denúncia.</label>
                                                   <input type="hidden" name="denunciado_id"
                                                       value="{{ $value->user->id }}">
                                                   <input type="hidden" name="postagem_id"
                                                       value="{{ $value->id }}">
                                                   <textarea class="form-control" id="message-text" name="conteudo"></textarea>
                                               </div>

                                       </div>
                                       <div class="modal-footer">
                                           <button type="button" class="btn btn-secondary"
                                               data-bs-dismiss="modal">Fechar</button>
                                           <button type="submit" class="btn fw-bold"
                                               value="Salvar">Enviar</button>
                                       </div>
                                       </form>
                                   </div>
                               </div>
                           </div>
                           @endauth
                       </div>
                    </div>
                </div>
            </div>

    @endforeach

    <div class="container">

        {{ $postagens->links() }}

    </div>
@endsection
