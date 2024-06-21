@extends('layouts.navfooter')

@section('content')
    <div class="container">

        <div class="d-flex align-items-center">
            <img src="data:image/png;base64,{{ $postagem->user->imagem }}" width="50" height="50" alt="Logomarca">
            <div class="m-3">
                <p> {{ $postagem->user->name }}</p>
                <p> {{ $postagem->titulo }}</p>
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
                              value="{{ $postagem->user->id }}">
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
                              value="{{ $postagem->user->id }}">
                          <input type="hidden" name="postagem_id"
                              value="{{ $postagem->id }}">
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
  @endauth    </div>





        <div class="imagem-p">

             <img src="data:image/png;base64,{{ $postagem->imagem }}" class="w-50" alt="...">
        </div>




        <br>
        <br>



        <h3> {!! $postagem->conteudo !!}</h3>



        <div class=" align-items-end d-flex justify-content-between ">
            <p id="Coment"> Deixe um comentário: </p>

            <hr>
            <div class=" justify-content-end ">
                <a href=""> <i class="bi bi-heart p-2"></i></a> | {{$postagem->curtidas->count() }}

                @auth
                Curtir - <a href="{{url ('/listar_publi/curtida/' . $postagem->id)}}"> <i class="bi bi-heart p-2"></i></a>
                @endauth
                <a href="{{url('/mostrar_postagem/' . $postagem->id)}}">  <i class="bi bi-chat-left p-2"></i></a>  | {{$postagem->comentarios->count()}}


            </div>

        </div>

        <hr>



        @auth
            <div class=" d-flex  align-items-center ">
                <img src="data:image/png;base64,{{ auth()->user()->imagem }}" width="50" height="50" alt="Logomarca">

                <form class="form-inline " method="post" action="{{ route('postagemComentario', $postagem->id) }}">
                    @csrf
                    <div class="form-group mx-sm-3 mb-2">
                        <p> <strong>{{auth()->user()->name}}</strong></p>
                        <div class="d-flex">
                            <textarea name="conteudo" class="form-control" id="conteudo" placeholder="Comentar"></textarea>
                            <button type="submit" class="btn btn-outline-dark mx-2">Comentar</button>
                        </div>
                    </div>
                </form>

            </div>
        @endauth



        @foreach ($postagem->comentarios as $comentario)
            <div class=" d-flex  align-items-center ">
                <img src="data:image/png;base64,{{ $comentario->user->imagem }}" width="50" height="50"
                    alt="Logomarca">

                <div class="form-group mx-sm-3 mb-2">
                    <p><strong> {{ $comentario->user->name }} </strong></p>
                    <div class="d-flex">
                        <p> {{ $comentario->conteudo }} </p>

                    </div>
                    <p>Data: {{ $comentario->created_at }} </p>
                </div>
            </div>
        @endforeach

    </div>
@endsection
