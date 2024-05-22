@extends('layouts.navfooter')


@section('content')

  <img src="./img/fundo_tela.png"  alt="Responsive image">



  <div class="container" style=" height: 130px;">
  <img src="./img/teste1.jpg" class="rounded-circle pose" width="250" height="250" alt="Responsive image">
    </div>


    <div class="container">

    <h4>Insira um nome aqui</h4>

    <p> Lorem ipsum dolor sit amet. Sit consequatur magni aut itaque
      facere rem quia nihil et eaque unde. Cum architecto repellat sed quisquam ducimus </p>

    <div class="d-flex justify-content-between">
    <p> E-mailteste@testezao.com </p>
    <button type="button" class="btn btn-outline-dark">Editar Perfil</button>
    </div>

    <br>

    <ul class="profile-header-tab nav nav-tabs">
      <li class="nav-item"><a href="#profile-post" class="nav-link active show" data-toggle="tab">POSTAGENS</a></li>
      <li class="nav-item"><a href="Profile_Fav.html" class="nav-link" data-toggle="tab">FAVORITOS</a></li>
  </ul>


</div>

<div class="container">
  <div class="card-group row row-cols-3">
    <div class="card border border-dark">
      <img src="./img/teste1.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title">Nome1</h5>
        <hr>
        <button class="btn btn-outline-dark me-2" type="submit">Visitar Publicação</button>
      </div>
    </div>
    <div class="card border border-dark">
      <img src="./img/teste1.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title">Nome2</h5>
        <hr>
        <button class="btn btn-outline-dark me-2" type="submit">Visitar Publicação</button>
      </div>
    </div>
    <div class="card border border-dark">
      <img src="./img/teste1.jpg" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title">Nome3</h5>
        <hr>
        <button class="btn btn-outline-dark me-2 " type="submit">Visitar Publicação</button>
      </div>
    </div>
  </div>
</div>

@endsection
