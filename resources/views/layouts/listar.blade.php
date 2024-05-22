
@yield('listar')
    @foreach ($categorias as $categoria)
        @foreach ($categoria->postagens as $value)
        <div class="container">
            <div class="row">
              <div class="col-6 " style="width: 324px;">
                <img src="./img/teste1.jpg"  width="300" height="300" alt="...">
              </div>
              <div class="col-6 ms-3">
                <h4> {{ $value->titulo }} </h4>
                <br>
                <p> {{ $value->conteudo }}</p>
                  <button class="btn btn-outline-dark me-5" type="submit">Visitar Publicação</button>
              </div>
            </div>
        @endforeach
    @endforeach
