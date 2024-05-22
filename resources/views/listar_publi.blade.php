@extends('layouts.navfooter')

    @section('content')

    <div class="container">
    <div class=" text-center " id="titulo">
      <h3> Decoração </h3>
    </div>
    </div>

    <div class="container">
      <div class=" text-center " id="titulo">
        <h4> Para quem gosta de decorar a casa e dar um toque diferente àquele cômodo</h4>
      </div>
      </div>

            @extends('layouts.listar')
                @section('listar')

                @endsection

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
