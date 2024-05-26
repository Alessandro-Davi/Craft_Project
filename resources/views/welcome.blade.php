
@extends('layouts.app')


@section('content')
@foreach ($postagens as $value)

    <div class="container">

    <div class="card-group row row-cols-3">
      <div class="card border border-dark">
        <img src="{{url ('./img/teste1.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">{{$value->titulo}}</h5>
          <hr>
          <p class="card-text "> {{$value->conteudo}} </p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
          <button type="button" id="test" class="btn btn-outline-dark" ><a href="{{ route('mostrar_postagem') }}">Ver mais</a></button>
        </div>
      </div>
      <div class="card border border-dark">
        <img src="{{url ('./img/teste1.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">{{$value->titulo}}</h5>
          <hr>
          <p class="card-text ">{{$value->conteudo}}</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
          <button type="button" id="test" class="btn btn-outline-dark"  ><a href="{{ route('mostrar_postagem') }}">Ver mais</a></button>
        </div>
      </div>
      <div class="card border border-dark">
        <img src=" {{url ('./img/teste1.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">{{$value->titulo}}</h5>
          <hr>
          <p class="card-text">{{$value->conteudo}}</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
          <button type="button" id="test" class="btn btn-outline-dark" ><a href="{{ route('mostrar_postagem') }}">Ver mais</a></button>
        </div>
      </div>
    </div>
    <hr>
    </div>

    @endforeach
    @endsection
