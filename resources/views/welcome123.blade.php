

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Craft Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{url('./style.css')}}">
  </head>
  <body>



      <div class="text-center">
        <img src="{{url('./img/Logo-Blog.png')}}" width="200" height="200"  alt="Logomarca">
      </div>

      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
              <form class="d-flex" role="search" >
                <input class="form-control me-2" type="search" placeholder="Pesquisar Gênero" aria-label="Search">
                <button class="btn btn-dark me-5" type="submit" href="{{ route('pesquisar') }}">Pesquisar</button>
              </form>
              <div class="collapse navbar-collapse d-flex justify-content-between">
                <ul class="navbar-nav">
                  <li class="nav-item ms-5">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item  ms-5">
                    <a class="nav-link" href="{{ route('sobre') }}">Sobre</a>
                  </li>
                  <li class="nav-item  ms-5">
                    <a class="nav-link" href="{{ route('contato') }}" >Contato</a>
                  </li>
                </ul>
                <ul class="navbar-nav">
                  <li class="nav-item ">
                    <a class="nav-link" href="{{url ('/login') }}">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url ('/register') }}">Cadastrar</a>
                  </li>
                  <li class="nav-item ms-auto">
                    <a href="{{url('perfil')}}"><img src="./img/boy.png" width="50" height="50" alt="Logomarca"></a>
                  </li>
                </ul>

              </div>
            </div>
          </nav>

    <hr>

    <div class="text-center">
      <h3> Escolher Projeto </h3>
      <hr>
    </div>

    @extends('layouts.app')


    @section('content')
    @foreach ($categoria->postagens as $value)

    {{$value->titulo}}

@endforeach
@endsection
    {{--<div class="container">
    <div class="card-group row row-cols-4">
      <div class="card border border-dark">
        <a href="{{url('listar_publi')}}"><img src="{{url('./img/Artes.jpg')}}" class="card-img-top" alt="..."></a>
        <div class="card-body text-center">
          <h5 class="card-title">Artes</h5>
          <hr>
        </div>
      </div>
      <div class="card border border-dark">
        <a href="{{url('listar_publi')}}"><img src="{{url('./img/Mecanica.jpg')}}"  href="#" class="card-img-top" alt="..."></a>
        <div class="card-body text-center">
          <h5 class="card-title">Construção</h5>
          <hr>
        </div>
      </div>
      <div class="card border border-dark">
        <a href="{{url('listar_publi')}}"><img src="{{url('./img/Decoração.jpg')}}" href="#" class="card-img-top" alt="..."></a>
        <div class="card-body text-center">
          <h5 class="card-title">Decoração</h5>
          <hr>
        </div>
      </div>
      <div class="card border border-dark">
        <a href="{{url('listar_publi')}}"><img src="{{url('./img/Eletrônica.jpg')}}" href="#" class="card-img-top" alt="..."></a>
        <div class="card-body text-center">
          <h5 class="card-title">Eletrônica</h5>
          <hr>
        </div>
      </div>
    </div>
    </div>

    <div class="container">

    <div class="card-group row row-cols-4">
      <div class="card border border-dark">
        <a href="{{url('listar_publi')}}"><img src="{{url('./img/Costura.jpg')}}" href="#" class="card-img-top" alt="..."></a>
        <div class="card-body text-center">
          <h5 class="card-title">Costura</h5>
         <hr>
        </div>
      </div>
      <div class="card border border-dark">
        <a href="{{url('listar_publi')}}"><img src="{{url('./img/Presentes.jpg')}}" href="#" class="card-img-top" alt="..."></a>
        <div class="card-body text-center">
          <h5 class="card-title">Presentes</h5>
          <hr>
        </div>
      </div>
      <div class="card border border-dark">
        <a href="{{url('listar_publi')}}"><img src="{{url('./img/quadro.png')}}" href="#" class="card-img-top" alt="..."></a>
        <div class="card-body text-center">
          <h5 class="card-title">Quadros</h5>
          <hr>
        </div>
      </div>
      <div class="card border border-dark">
        <a href="{{url('listar_publi')}}"><img src="{{url('./img/bijuteria.jpeg')}}" href="#" class="card-img-top" alt="..."></a>
        <div class="card-body text-center">
          <h5 class="card-title">Bijuteria</h5>
          <hr>
        </div>
      </div>
    </div>
    </div>--}}

        <hr>
            <div class="text-center">
             <h2> Popular </h2>
             </div>
        <hr>
        <div class="text-center">
            <h4> Postagens mais vistas durante a semana </h4>
          </div>


          <div class="container">

            <div class="card-group row row-cols-3">
              <div class="card border border-dark">
                <img src="./img/teste1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Presentes</h5>
                  <hr>
                  <p class="card-text "> Descrição </p>
                  <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  <button type="button" id="test" class="btn btn-outline-dark" >Ver mais</button>
                </div>
              </div>
              <div class="card border border-dark">
                <img src="./img/teste1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Quadros</h5>
                  <hr>
                  <p class="card-text ">Descrição</p>
                  <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  <button type="button" id="test" class="btn btn-outline-dark" >Ver mais</button>
                </div>
              </div>
              <div class="card border border-dark">
                <img src="./img/teste1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Bijuteria</h5>
                  <hr>
                  <p class="card-text">Descrição</p>
                  <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  <button type="button" id="test" class="btn btn-outline-dark" >Ver mais</button>
                </div>
              </div>
            </div>
            <hr>
            </div>




    <!--  -->


    <footer class=" justify-content-between py-3 my-4 border-top">
        <div class="row">
          <div class="col">
            <p>Fale conosco</p>

            <p><svg id="Phone" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-inbound" viewBox="0 0 16 16">
              <path d="M15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0m-12.2 1.182a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
            </svg>(21) 99232-2332</p>
          </div>
          <div class="col">

              <h5>Junte-se ao Craft Project </h5>
              <p>Entre ou Cadastre-se</p>

              <svg id="Face" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
              </svg>
              <svg id="Insta"  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
              </svg>
              <svg id="What" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
              </svg>

          </div>
          <div class="col">
            <p>Sobre nós</p>
            <p>Trabalhe Conosco</p>

          </div>
        </div>
        </div>
        </footer>
      </div>

        <footer class="justify-content-between py-3 my-4 border-top">
      <div class="d-flex justify-content-center">
      <p>&copy; 2024 Company, Inc - Alessandro e João</p>
      </div>

        </footer>

    <div  class="container" >




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>



