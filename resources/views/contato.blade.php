
@extends('layouts.navfooter')

@section('content')


    <div class="container">
        <div class=" text-center " id="titulo">
          <h3> Contato <br>
            ────</h3>
        </div>
        </div>

    <div class="container">

        <div class="row">
            <div class="col-6">
                <h4> Contato  ────────────────────────</h4>
                <br>
                <br>
                <p>
                    Lorem ipsum dolor sit amet. 33 assumenda
            itaque in alias ipsa eos velit inventore aut
            quae reiciendis sit quaerat voluptate et
            praesentium atque non sint corrupti. Id itaque
            fugit nam odit quia cum aliquam distinctio hic
            aspernatur laudantium qui sunt voluptas.
            <br>
                <br>
                </p>

                <h4> Mande um e-mail ────────────────────</h4>
                <br>
                <br>
                <div id="area">
                    <form id="formulario" autocomplete="off">
                      <fieldset>
                        <label>E-mail:</label><input class="campo_nome" type="text"><br>
                        <label>Nome:</label><input class="campo_email" type="password"><br>
                        <label>Mensagem:</label><br><textarea class="msg" cols="35" rows="8"></textarea><br>
                        <input class="btn_submit" type="submit" value="Enviar">
                      </fieldset>
                    </form>

                </div>
            </div>
            <div class="col-6">
                <img src="{{url('./img/teste1.jpg')}}"  width="400" height="400" alt="...">
            </div>
        </div>
    </div>

@endsection
