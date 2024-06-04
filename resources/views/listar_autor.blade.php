@extends('layouts.navfooter')



@section('content')

<style>


.fundo {
  background-color: #cac8c8;
  text-align: center;
  display: block;
  margin-bottom: 10px;
  text-decoration: none;
  font-size: 16px;
  padding: 10px;
  border: 1px solid #ffffff;
  border-radius: 5px;
  transition: background-color 0.3s ease;

}

a{

    text-decoration: none;
    color: #000000;

}
/*Hover dos hiperlinks */
.fundo:hover {
  background-color: black; /* Cor de fundo azul ao passar o mouse */
  color: #62c06e; /* Cor do texto branco ao passar o mouse */
}

</style>

<div class="container">
    <div class=" text-center " id="titulo">
        <h3>Autores <br> ───</h3>
    </div>
</div>



        @foreach ($autores as $value)
            <article class="post">
                <div class="container fundo">
                    <div class="row">
                      <div class=" ms-3">
                        <a href="{{url ('/perfil/' . $value->id) }}"> {{ $value->name }} </a>
                        <br>
                      </div>
                    </div>
                </div>
            </article>
        @endforeach




@endsection
