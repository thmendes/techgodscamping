<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Meu Acampamento! | </title>
    
    <!-- Bootstrap -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset("css/gentelella.min.css") }}" rel="stylesheet">

</head>

<body class="login">
<div class="login_wrapper">
    <div class="animate form login_form">
        <section class="login_content">
			{!! BootForm::open(['url' => url('/register'), 'method' => 'post']) !!}
			
			<h1>Criação de Conta</h1>

			{!! BootForm::text('name', 'Nome', old('name'), ['placeholder' => 'Full Name']) !!}

			{!! BootForm::email('email', 'Email', old('email'), ['placeholder' => 'Email']) !!}

			{!! BootForm::password('password', 'Senha', ['placeholder' => 'Password']) !!}

			{!! BootForm::password('password_confirmation', 'Repita a senha', ['placeholder' => 'Confirmation']) !!}
		
			{!! BootForm::submit('Cadastrar', ['class' => 'btn btn-default']) !!}
		   
			<div class="clearfix"></div>
			
			<div class="separator">
				<p class="change_link">Já é um membro?
					<a href="{{ url('/login') }}" class="to_register"> Entrar </a>
				</p>
				
				<div class="clearfix"></div>
				<br />						
			</div>
			{!! BootForm::close() !!}
        </section>
    </div>
</div>
</body>
</html>