<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Meu Acampamento | </title>

        <!-- Bootstrap -->
        <link href="<?php echo e(asset("css/bootstrap.min.css")); ?>" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo e(asset("css/font-awesome.min.css")); ?>" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="<?php echo e(asset("css/gentelella.min.css")); ?>" rel="stylesheet">
        <!-- datapicker -->
        <link href="<?php echo e(asset("css/daterangepicker.css")); ?>" rel="stylesheet">

        <?php echo $__env->yieldPushContent('stylesheets'); ?>

    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">  
            
                <?php echo $__env->make('includes/sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <?php echo $__env->make('includes/topbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <?php echo $__env->yieldContent('main_container'); ?>

                <?php echo $__env->make('includes/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            </div>
        </div>

        <script src="<?php echo e(asset("js/main.js")); ?>"></script>
        <!-- jQuery -->
        <script src="<?php echo e(asset("js/jquery.min.js")); ?>"></script>
        <!-- Bootstrap -->
        <script src="<?php echo e(asset("js/bootstrap.min.js")); ?>"></script>
        <!-- Custom Theme Scripts -->
        <script src="<?php echo e(asset("js/gentelella.min.js")); ?>"></script>
        <!-- datapicker -->
        <script type="text/javascript">
            $(function() {
                $('input[name="reservation"]').daterangepicker({
                    locale: {
                        format: 'DD/MM/YYYY'
                    }
                });
            });

            $(function() {
                $('input[name="periodo"]').daterangepicker({
                    locale: {
                        format: 'DD/MM/YYYY'
                    }
                });
            });

        </script>
        <script src="<?php echo e(asset("js/moment.js")); ?>"></script>
        <script src="<?php echo e(asset("js/daterangepicker.js")); ?>"></script>
        
        <?php echo $__env->yieldPushContent('scripts'); ?>

    </body>
</html>