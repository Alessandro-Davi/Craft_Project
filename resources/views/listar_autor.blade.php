@extends('layouts.navfooter')



@section('content')


<div class="container">
    <div class=" text-center " id="titulo">
        <h3>Autores <br> ───</h3>
    </div>
</div>



        @foreach ($autores as $value)
            <article class="post">
                <div class="container">
                    <div class="row">
                      <div class="col-6 ms-3">
                        <a href="{{url ('/perfil/' . $value->id) }}"><h4> {{ $value->name }}  </h4></a>
                        <br>
                      </div>
                    </div>
                </div>
            </article>
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
