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

<body class="x_panel">
    <div class="x_title">
        <h2>Facecamper - Abra sua conta <small>É gratuito e sempre será.</small></h2>
        
        <div class="clearfix"></div>

        <div class="x_content">
            <h4>O Facecamper ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</h4>
            <!-- start form for validation -->
            <div class="login_wrapper">
                <div class="animate form">
                    <form>
                        {!! BootForm::open(['url' => url('/register'), 'method' => 'post']) !!}
                        {!! BootForm::text('name', 'Nome*:', old('name'), ['placeholder' => 'Nome completo']) !!}
                                    
                        {!! BootForm::email('email', 'Email*:', old('email'), ['placeholder' => 'Use um como gostaria de usar como login']) !!}
                        
                        {!! BootForm::password('password', 'Senha*:', ['placeholder' => 'Senha']) !!}
                        
                        {!! BootForm::password('password_confirmation', 'Repita a senha*:', ['placeholder' => 'Confirmar senha']) !!}

                        <br/>
                        
                        {!! BootForm::submit('Inscreva-se', ['class' => 'btn btn-success']) !!}
                    </form>
                </div>
                <div class="clearfix"></div>
                    
                    <div class="separator">
                        <p class="change_link">Já sou um membro?
                            <a href="{{ url('/login') }}" class="to_register"> <b>Entrar</b> </a>
                        </p>
                        
                        <div class="clearfix"></div>
                        <br />						
                    </div>
                    {!! BootForm::close() !!}
                </div>
        </div>
    </div>
</body>
</html>