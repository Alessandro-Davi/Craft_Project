@extends('layouts.navfooter')

@section('content')

    <div class="text-center">
      <h3> Escolher Projeto<br> ────────</h3>
    </div>


    <div class="container">
    <div class="card-group row row-cols-4">
      <div class="card border-dark">
        <a href="{{url('listar_publi/1')}}"><img src="{{url('./img/Artes.jpg')}}" class="card-img-top" alt="..."></a>
        <div class="card-body text-center">
          <h5 class="card-title">Artes</h5>
          <hr>
        </div>
      </div>
      <div class="card border border-dark">
        <a href="{{url('listar_publi/2')}}"><img src="{{url('./img/Mecanica.jpg')}}"  href="#" class="card-img-top" alt="..."></a>
        <div class="card-body text-center">
          <h5 class="card-title">Construção</h5>
          <hr>
        </div>
      </div>
      <div class="card border border-dark">
        <a href="{{url('listar_publi/3')}}"><img src="{{url('./img/Decoração.jpg')}}" href="#" class="card-img-top" alt="..."></a>
        <div class="card-body text-center">
          <h5 class="card-title">Decoração</h5>
          <hr>
        </div>
      </div>
      <div class="card border border-dark">
        <a href="{{url('listar_publi/4')}}"><img src="{{url('./img/Eletrônica.jpg')}}" href="#" class="card-img-top" alt="..."></a>
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
        <a href="{{url('listar_publi/5')}}"><img src="{{url('./img/Costura.jpg')}}" href="#" class="card-img-top" alt="..."></a>
        <div class="card-body text-center">
          <h5 class="card-title">Costura</h5>
         <hr>
        </div>
      </div>
      <div class="card border border-dark">
        <a href="{{url('listar_publi/6')}}"><img src="{{url('./img/Presentes.jpg')}}" href="#" class="card-img-top" alt="..."></a>
        <div class="card-body text-center">
          <h5 class="card-title">Presentes</h5>
          <hr>
        </div>
      </div>
      <div class="card border border-dark">
        <a href="{{url('listar_publi/7')}}"><img src="{{url('./img/quadro.png')}}" href="#" class="card-img-top" alt="..."></a>
        <div class="card-body text-center">
          <h5 class="card-title">Quadros</h5>
          <hr>
        </div>
      </div>
      <div class="card border border-dark">
        <a href="{{url('listar_publi/8')}}"><img src="{{url('./img/bijuteria.jpeg')}}" href="#" class="card-img-top" alt="..."></a>
        <div class="card-body text-center">
          <h5 class="card-title">Bijuteria</h5>
          <hr>
        </div>
      </div>
    </div>
    <hr>
    </div>

<br>

            <div class="text-center">
             <h2> Popular <br> ────</h2>
             </div>

        <div class="text-center">
            <h4> Postagens mais vistas durante a semana </h4>
            <br>
          </div>


          <div class="container">

            <div class="card-group row row-cols-3">
              <div class="card border border-dark">
                <img src="{{url('./img/teste1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Presentes</h5>
                  <hr>
                  <p class="card-text "> Descrição </p>
                  <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  <button type="button" id="test" class="btn btn-outline-dark" >Ver mais</button>
                </div>
              </div>
              <div class="card border border-dark">
                <img src="{{url('./img/teste1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Quadros</h5>
                  <hr>
                  <p class="card-text ">Descrição</p>
                  <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  <button type="button" id="test" class="btn btn-outline-dark" >Ver mais</button>
                </div>
              </div>
              <div class="card border border-dark">
                <img src="{{url('./img/teste1.jpg')}}" class="card-img-top" alt="...">
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

    @endsection
