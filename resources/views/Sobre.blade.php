@extends('layouts.navfooter')

@section('content')

    <div class="text-center">
      <h3> Sobre  <br> ───</h3>
    </div>

    <br> <br> <br>

    <div class="container" >
        <div class="row">
          <div class="col-4"style="text-align: center">
            <img src="{{url('./img/imagem_Ale.jpg')}}" style="width:300px" ; class="card-img-top" alt="...">
            <br><br>
            <p> Alessandro Davi</p>
          </div>
          <div class="col-4"style="text-align: center">
            <img src="{{url('./img/imagem_Nasc.png')}}" style="width:300px"; class="card-img-top" alt="...">
            <br><br>
            <p> Patryck Nasc</p>
          </div>
          <div class="col-4"style="text-align: center" >
            <img src="{{url('./img/imagem_Joao.png')}}"  style="width:300px"; class="card-img-top" alt="...">
            <br><br>
            <p> João Procopio </p>
          </div>
        </div>
        <br><br>
        <div class="row" style="text-align: center">
            <p id="contatext ">
                Este blog foi um projeto que fizemos para a conclusão do nosso curso.

            </p>
          </div>

        </div>
<hr>
@endsection
