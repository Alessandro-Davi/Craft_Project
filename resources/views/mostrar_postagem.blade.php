@extends('layouts.navfooter')

@section('content')
    <div class="container">

        <div class="d-flex align-items-center">
            <img src="./img/boy.png" width="50" height="50" alt="Logomarca">
            <div class="m-3">
                <p> {{ $postagem->user->name   }}</p>
                <p> {{ $postagem->titulo }}</p>
            </div>
        </div>


        <div class="imagem-p">
            <div id="carouselExampleDark" class="carousel carousel-dark slide ">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{ $postagem->imagem }}" class="w-50" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="./img/Logo-Blog.png" class=" w-50" alt="...">

                    </div>
                    <div class="carousel-item">
                        <img src="{{ $postagem->imagem }}" class=" w-50" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <br>
        <br>



        <h3> {{ $postagem->conteudo }}</h3>



        <div class=" align-items-end d-flex justify-content-between ">
            <p id="Coment"> Deixe um comentário: </p>
            <hr>
            <div class="  justify-content-end ">
                <i class="bi bi-heart "></i>
                <i class="bi bi-bookmark"></i>

            </div>

        </div>

        <hr>
        <div class=" d-flex  align-items-center ">
            <img src="./img/boy.png" width="50" height="50" alt="Logomarca">

            <form class="form-inline " method="post" action="{{ route('postagemComentario', $postagem->id) }}">
                @csrf
                <div class="form-group mx-sm-3 mb-2">
                    <p> Teste</p>
                    <div class="d-flex">
                        <textarea name="conteudo" class="form-control" id="conteudo" placeholder="Comentar"></textarea>
                        <button type="submit" class="btn btn-outline-dark mx-2">Comentar</button>
                    </div>
                </div>
            </form>

        </div>
        <br>

        @foreach ($postagem->comentarios as $comentario)
            <div class=" d-flex  align-items-center ">
                <img src="./img/boy.png" width="50" height="50" alt="Logomarca">

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
