<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('../public/login.css') }}" media="screen" />

    <title>login</title>
</head>
<body>
    @session('status')
    <div class="p-4 bg-green-100">
        {{ $value }}
    </div>
@endsession

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="">
			<h1>Crie sua conta</h1>
			<span>Nome e email para registrar!</span>
			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button>Login in</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form method="post" action="{{ url('/login_usuario')}}" >
            @csrf
			<h1>Login in</h1>
			<span>nome ou email aqui</span>
			<input name="email" type="email" placeholder="Email" />
			<input name="password" type="password" placeholder="Password" />
			<a href="#">Esqueceu sua senha?</a>
			<button>Login in</button>

		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Bem vindo de volta!</h1>
				<p>Para se manter conectado conosco, faça login com suas informações pessoais</p>
				<button class="ghost" id="signIn">Login in</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Olá!</h1>
				<p>Insira seus dados pessoais e comece sua jornada conosco</p>
				<button class="ghost" id="signUp">Cadastre-se</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		2024 Company, Inc - Alessandro Davi, Patryck Nasc e João Procópio
	</p>
</footer>

</body>
<script type="text/javascript" src="{{ asset('../public/login.js') }}">

</script>
</html>
