<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Meu Acampamento! | </title>
    
    <!-- Bootstrap -->
    <link href="<?php echo e(asset("css/bootstrap.min.css")); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo e(asset("css/font-awesome.min.css")); ?>" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo e(asset("css/gentelella.min.css")); ?>" rel="stylesheet">

</head>

<body class="login">
<div>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
				<?php echo BootForm::open(['url' => url('/login'), 'method' => 'post']); ?>

                    
				<h1>Login</h1>
			
				<?php echo BootForm::email('email', 'E-mail', old('email'), ['placeholder' => 'E-mail', 'afterInput' => '<span>test</span>'] ); ?>

			
				<?php echo BootForm::password('password', 'Senha', ['placeholder' => 'Senha']); ?>

				
				<div>
					<?php echo BootForm::submit('Entrar', ['class' => 'btn btn-default submit']); ?>

					<a class="reset_pass" href="<?php echo e(url('/password/reset')); ?>"> Esqueceu sua senha? </a>
				</div>
                    
				<div class="clearfix"></div>
                    
				<div class="separator">
					<p class="change_link">Novo no site?
						<a href="<?php echo e(url('/register')); ?>" class="to_register"> Crie uma conta </a>
					</p>
                        
					<div class="clearfix"></div>
					<br />
				</div>
				<?php echo BootForm::close(); ?>

            </section>
        </div>
    </div>
</div>
</body>
</html>