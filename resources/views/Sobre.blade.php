@extends('layouts.navfooter')

@section('content')
    <div class="text-center">
        <h3> Sobre <br> ───</h3>
    </div>

    <br>

    <div class="container">
        <div class="row" style="text-align: center">
            <p id="contatext ">
                Bem-vindo ao "Craft"! Aqui, mergulhamos em um universo encantador onde a criatividade é a protagonista. Se você é apaixonado por artesanato, DIY e projetos que transformam ideias em realidade palpável, está no lugar certo.

No "Craft", nosso objetivo é inspirar e capacitar você a explorar suas habilidades artísticas, seja você um iniciante curioso ou um artesão experiente em busca de novos desafios. Navegue por nossos artigos repletos de tutoriais detalhados, dicas práticas e ideias inovadoras que abrangem desde trabalhos manuais tradicionais até técnicas contemporâneas de artesanato.

Além de oferecer um espaço para aprender e criar, também incentivamos a comunidade a compartilhar suas próprias histórias e projetos. Queremos construir juntos um ambiente acolhedor onde todos possam se inspirar mutuamente e desenvolver seu potencial criativo ao máximo.

Então, junte-se a nós nesta jornada emocionante pelo mundo do artesanato. Explore, aprenda, crie e descubra o prazer de transformar materiais simples em obras de arte significativas.

<br><br>No "Craft", a imaginação é o limite e cada projeto é uma oportunidade para expressar sua singularidade. Estamos ansiosos para inspirar e ser inspirados por você!

            </p>
        </div><br><br>

        <div class="text-center">
            <h3> Desenvolvedores <br> ───────</h3>
        </div>
        <div class="row">
            <div class="col-4"style="text-align: center">
                <img src="{{ url('./img/imagem_Ale.jpg') }}" style="width:300px" ; class="card-img-top" alt="...">
                <br><br>
                <p> Alessandro Davi</p>
            </div>
            <div class="col-4"style="text-align: center">
                <img src="{{ url('./img/imagem_Nasc.png') }}" style="width:300px"; class="card-img-top" alt="...">
                <br><br>
                <p> Patryck Nasc</p>
            </div>
            <div class="col-4"style="text-align: center">
                <img src="{{ url('./img/imagem_Joao.png') }}" style="width:300px"; class="card-img-top" alt="...">
                <br><br>
                <p> João Procopio </p>
            </div>
        </div>
        <br><br>


    </div>
    <hr>
@endsection
