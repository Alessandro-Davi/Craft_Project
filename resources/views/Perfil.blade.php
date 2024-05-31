@extends('layouts.navfooter')


@section('content')

  <img src="{{url('./img/fundo_tela.png')}}"  alt="Responsive image">

  <div class="container" style=" height: 130px;">
  <img src="{{url('./img/teste1.jpg')}}" class="rounded-circle pose" width="250" height="250" alt="Responsive image">
    </div>


    <div class="container">

    <h4>{{$nomeAutor}}</h4>

    <p> Lorem ipsum dolor sit amet. Sit consequatur magni aut itaque
      facere rem quia nihil et eaque unde. Cum architecto repellat sed quisquam ducimus </p>

    <div class="d-flex justify-content-between">
    <p> {{$emailAutor}}</p>
    <button type="button" class="btn btn-outline-dark">Editar Perfil</button>
    </div>

    <br>

    <ul class="profile-header-tab nav nav-tabs">
      <li class="nav-item"><a href="#profile-post" class="nav-link active show" data-toggle="tab">POSTAGENS</a></li>
      <li class="nav-item"><a href="Profile_Fav.html" class="nav-link" data-toggle="tab">FAVORITOS</a></li>
  </ul>
</div>


@foreach ($postagens as $value)
<div class="container">
    <div class="row mt-3">
      <div class="col-6" style="width: 324px;">
        <img src="{{url('./img/teste1.jpg')}}"  width="300" height="300" alt="...">
      </div>
      <div class="col-6 ms-3">
        <h4> {{ $value->titulo }}  </h4>
        <br>
        <p> {{ $value->conteudo }}</p>
          <button class="btn btn-outline-dark me-5" type="submit">Visitar Publicação</button>
          <br><br><br><br><br><br>
          <i class="fa-2x bi bi-exclamation-triangle"></i>
      </div>
    </div>
</div>
@endforeach


@endsection
