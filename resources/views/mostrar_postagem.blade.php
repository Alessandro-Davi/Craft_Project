@extends('layouts.navfooter')

@section('content')


<div class="container">

    <div class="d-flex align-items-center">
      <img src="./img/boy.png" width="50" height="50" alt="Logomarca">
      <div class="m-3">
        <p> Nome ou Nick // Categoria do projeto</p>
        <p> Efeite rosetas de papel para decoração</p>
      </div>
    </div>


    <div class="imagem-p">
      <div id="carouselExampleDark" class="carousel carousel-dark slide ">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="{{url('./img/teste1.jpg')}}" class="w-50" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="./img/Logo-Blog.png" class=" w-50" alt="...">

          </div>
          <div class="carousel-item">
            <img src="{{url('./img/teste1.jpg')}}" class=" w-50" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev" >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next" >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  </div>
      <br>
      <br>



    <h3> Sobre </h3>

    <p> Lorem ipsum dolor sit amet. 33 assumenda itaque in alias ipsa eos velit
      inventore aut quae reiciendis sit quaerat voluptate et praesentium atque
      non sint corrupti. Id itaque fugit nam odit quia cum aliquam distinctio hic aspernatur
      laudantium qui sunt voluptas. Quo assumenda illo aut saepe
      reprehenderit sed aperiam delectus est impedit atque est odit sequi est </p>


    <h3> Materiais </h3>
    <ul class="list-group list-group-numbered list-group-flush">
      <li class="list-group-item border-0">Papel </li>
      <li class="list-group-item border-0">Tesoura </li>
      <li class="list-group-item border-0">Cola bastão </li>
      <li class="list-group-item border-0">Fita dupla-face</li>
    </ul>

    <br>

    <h3>Passo 1 </h3>

    <div class="imagem-p">
      <img src="{{url('./img/teste1.jpg')}}" width="500" height="500" alt="Postagem">
      <br>
      <br>
    </div>
    <p> Lorem ipsum dolor sit amet. 33 assumenda itaque in alias ipsa eos velit
      inventore aut quae reiciendis sit quaerat voluptate et praesentium atque
      non sint corrupti. Id itaque fugit nam odit quia cum aliquam distinctio hic aspernatur
      laudantium qui sunt voluptas. Quo assumenda illo aut saepe
      reprehenderit sed aperiam delectus est impedit atque est odit sequi est</p>


    <h3>Passo 2</h3>

    <div class="imagem-p">
      <img src="{{url('./img/teste1.jpg')}}" width="500" height="500" alt="Postagem">
      <br>
      <br>
    </div>
    <p> Lorem ipsum dolor sit amet. 33 assumenda itaque in alias ipsa eos velit
      inventore aut quae reiciendis sit quaerat voluptate et praesentium atque
      non sint corrupti. Id itaque fugit nam odit quia cum aliquam distinctio hic aspernatur
      laudantium qui sunt voluptas. Quo assumenda illo aut saepe
      reprehenderit sed aperiam delectus est impedit atque est odit sequi est</p>


    <h3>Passo 3 </h3>
    <div class="imagem-p">
      <img src="{{url('./img/teste1.jpg')}}" width="500" height="500" alt="Postagem">
      <br>
      <br>
    </div>

    <p> Lore ipsum dolor sit amet. 33 assumenda itaque in alias ipsa eos velit
      inventore aut quae reiciendis sit quaerat voluptate et praesentium atque
      non sint corrupti. Id itaque fugit nam odit quia cum aliquam distinctio hic aspernatur
      laudantium qui sunt voluptas. Quo assumenda illo aut saepe
      reprehenderit sed aperiam delectus est impedit atque est odit sequi est</p>

    <div class=" align-items-end d-flex justify-content-between ">
      <p id="Coment" > Deixe um comentário: </p>
      <hr>
   <div class="  justify-content-end ">

         <i class="bi bi-heart "></i>

         <i class="bi bi-bookmark"></i>


   </div>

   </div>

   <hr>
   <div class=" d-flex  align-items-center ">
    <img src="./img/boy.png" width="50" height="50" alt="Logomarca">
    <form class="form-inline">
      <div class="form-group mx-sm-3 mb-2  ">
       <p> Junin</p>

        <div class="d-flex">
        <input type="text" class="form-control" id="inputPassword2" placeholder="Comentar">
                <button type="button" class="btn btn-outline-dark mx-2">Enviar</button>

        </div>
      </div>
    </form>

  </div>
  <br>

  <div class=" d-flex  align-items-center ">
    <img src="./img/boy.png" width="50" height="50" alt="Logomarca">
    <form class="form-inline">
      <div class="form-group mx-sm-3 mb-2  ">
       <p> Junin</p>

        <div class="d-flex">
        <input type="text" class="form-control" id="inputPassword2" placeholder="Comentar">
                <button type="button" class="btn btn-outline-dark mx-2">Enviar</button>

        </div>
      </div>
    </form>

  </div>
  <br>
  </div>
  @endsection
