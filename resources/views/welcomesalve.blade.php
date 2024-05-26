{{--@extends('layouts.app')


@section('content')
    @foreach ($categorias as $categoria)
        @foreach ($categoria->postagens as $value)


            <div class="container">

                <div class="card-group row row-cols-3">
                    <div class="card border border-dark">
                        <img src="{{ url('./img/teste1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $value->titulo }}</h5>
                            <hr>
                            <p class="card-text "> {{ $value->conteudo }} </p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            <p class="card-text"><small class="text-body-secondary">{{$categoria->id}}</small></p>
                            <a href="{{ url('mostrar_postagem') }}"> <button type="button" id="test"
                                    class="btn btn-outline-dark">Ver mais</button> </a>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            {{ $categoria->nome }}
        @endforeach
    @endforeach
    @endsection

     @foreach ($categoria->postagens as $value)

        $value->titulo


{{ $categoria->nome}}
@endforeach --}}



    {{--
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
          <a href="{{url('mostrar_postagem')}}"> <button type="button"  id="test" class="btn btn-outline-dark" >Ver mais</button> </a>
        </div>
      </div>
      <div class="card border border-dark">
        <img src="{{url ('./img/teste1.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">{{$value->titulo}}</h5>
          <hr>
          <p class="card-text ">{{$value->conteudo}}</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
          <button type="button" id="test" class="btn btn-outline-dark"  >Ver mais</button>
        </div>
      </div>
      <div class="card border border-dark">
        <img src=" {{url ('./img/teste1.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">{{$value->titulo}}</h5>
          <hr>
          <p class="card-text">{{$value->conteudo}}</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
          <button type="button" id="test" class="btn btn-outline-dark" >Ver mais</button>
        </div>
      </div>
    </div>
    <hr>
    </div>

    @endforeach
    --}}

