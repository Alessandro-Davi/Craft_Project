@extends('layouts.navfooter')



@section('content')


<div class="container">
    <div class=" text-center " id="titulo">
        <h3>{{$nomeCategoria}}</h3>
    </div>
</div>


            @foreach ($categorias as $categoria)
                @foreach ($categoria->postagens as $value)
                <div class="container">
                    <div class="row">
                      <div class="col-6 " style="width: 324px;">
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
            @endforeach

            <div  class="container text-center ">
  <div class="pagination">
    <hr>
    <a href="#">&laquo;</a>
    <a href="#" class="btn btn-dark" id="number">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">5</a>
    <a href="#">6</a>
    <a href="#">&raquo;</a>
</div>
</div>

@endsection
