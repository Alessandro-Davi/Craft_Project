@extends('layouts.navfooter')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Craft Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="navbar_style.css" />
  </head>
  <body>



    <div class="text-center">
      <img src="./img/Logo-Blog.png" width="200"  alt="Logomarca">
    </div>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Pesquisar Gênero" aria-label="Search">
              <button class="btn btn-dark me-5" type="submit">Pesquisar</button>
            </form>
            <div class="collapse navbar-collapse d-flex justify-content-between">
              <ul class="navbar-nav">
                <li class="nav-item ms-5">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item  ms-5">
                  <a class="nav-link" href="#">Sobre</a>
                </li>
                <li class="nav-item  ms-5">
                  <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Contato</a>
                </li>
              </ul>
              <ul class="navbar-nav">
                <li class="nav-item ">
                  <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Cadastrar</a>
                </li>
                <li class="nav-item ms-auto">
                  <img src="./img/boy.png" width="50" height="50" alt="Logomarca">
                </li>
              </ul>

            </div>
          </div>
        </nav>


      <hr>



    <hr>

    <div class="container">
    <div class="  " id="titulo">
      <h3> Resultados
        <br> ───────
      </h3>
    </div>
    </div>

    <div class="container">
      <div class="  " id="titulo">
        <h4> Resultados da pesquisa sobre (insira categoria): (insira um número)</h4>
      </div>
      </div>



    <div class="container">
    <div class="row">
      <div class="col-6 " style="width: 324px;">
        <img src="./img/teste1.jpg"  width="300" height="300" alt="...">
      </div>
      <div class="col-6 ms-3">
        <h4> Desenhos com fita </h4>
        <br>
        <p> A imaginação é sua maior aliada nesta técnica de decoração com fta isolante. Se
          inspire nos seus símbolos, animais para criar um papel de parede inusitado para a
          sala, quarto ou cozinha.
           </p>
          <button class="btn btn-outline-dark me-5" type="submit">Visitar Publicação</button>
      </div>
    </div>

    <div class="row">
      <div class="col-6" style="width: 324px;">
        <img src="./img/teste1.jpg"  width="300" height="300" alt="...">
      </div>
      <div class="col-6 ms-3">
        <h4> Desenhos com fita </h4>
        <br>
        <p> A imaginação é sua maior aliada nesta técnica de decoração com fta isolante. Se
          inspire nos seus símbolos, animais para criar um papel de parede inusitado para a
          sala, quarto ou cozinha.
           </p>
          <button class="btn btn-outline-dark me-5" type="submit">Visitar Publicação</button>
      </div>
    </div>

    <div class="row">
      <div class="col-6 " style="width: 324px;">
        <img src="./img/teste1.jpg"  width="300" height="300" alt="...">
      </div>
      <div class="col-6 ms-3" >
        <h4> Desenhos com fita </h4>
        <br>
        <p> A imaginação é sua maior aliada nesta técnica de decoração com fta isolante. Se
          inspire nos seus símbolos, animais para criar um papel de parede inusitado para a
          sala, quarto ou cozinha.
           </p>
          <button class="btn btn-outline-dark me-5" type="submit">Visitar Publicação</button>
      </div>
    </div>

    <div class="row">
      <div class="col-6 " style="width: 324px;">
        <img src="./img/teste1.jpg"  width="300" height="300" alt="...">
      </div>
      <div class="col-6 ms-3">
        <h4> Desenhos com fita </h4>
        <br>
        <p> A imaginação é sua maior aliada nesta técnica de decoração com fta isolante. Se
          inspire nos seus símbolos, animais para criar um papel de parede inusitado para a
          sala, quarto ou cozinha.
           </p>
          <button class="btn btn-outline-dark me-5" type="submit">Visitar Publicação</button>
      </div>
    </div>
  </div>



  <div  class="container text-center ">
  <div class="pagination">
    <hr>
    <a href="#">&laquo;</a>
    <a href="#" class="btn btn-dark" id="number">1</a>
    <a href="#" >2</a>
    <a href="#">3</a>
    <a href="#">&raquo;</a>

  </div>
  </div>
  <br><br>

  <hr>
    <!--  -->




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
@endsection
