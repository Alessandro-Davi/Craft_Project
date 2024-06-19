@extends('layouts.navfooter')

@section('content')
    <div class="container">
        <div class=" text-center " id="titulo">
            <h3> Contato <br>
                ────</h3>
        </div>
    </div>


    <section class="ftco-section">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-7">
                    <div class="contact-wrap w-90 p-md-5 p-4">
                        <h3>Deixe sua mensagem: </h3>
                        <div id="form-message-warning" class="mb-4"></div>
                        <div id="form-message-success" class="mb-4">
                            {{-- Sua mensagem foi enviada, obrigado! --}}
                        </div>
                        <form method="POST" action="{{ route('enviar_mensagem') }}" id="contactForm" name="contactForm" class="contactForm" >
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label" for="name">Nome:</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Nome">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label" for="email">E-mail:</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <div class="form-group">
                                        <label class="label" for="mensagem">Mensagem:</label>
                                        <textarea name="mensagem" class="form-control" id="mensagem" cols="30" rows="4" placeholder="Mensagem"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mt-3">
                                        <input type="submit" value="Enviar" class=" btn btn-dark">
                                        <div class="submitting"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5 d-flex">
                    <img src="{{ url('./img/email.png') }}" width="400" height="400" alt="...">
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </section>
@endsection
