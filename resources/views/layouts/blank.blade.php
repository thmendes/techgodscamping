<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Meu Acampamento | </title>

        <!-- Bootstrap -->
        <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="{{ asset("css/gentelella.min.css") }}" rel="stylesheet">
        <!-- datapicker -->
        <link href="{{ asset("css/daterangepicker.css") }}" rel="stylesheet">
        <!-- dropzone -->
        <link href="{{ asset("css/dropzone.min.css") }}" rel="stylesheet">
        <!-- nprogress -->
        <link href="{{ asset("css/nprogress.css") }}" rel="stylesheet">

        @stack('stylesheets')

    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">  
            
                @include('includes/sidebar')

                @include('includes/topbar')

                @yield('main_container')

                @include('includes/footer')

            </div>
        </div>

        <script src="{{ asset("js/main.js") }}"></script>
        <!-- jQuery -->
        <script src="{{ asset("js/jquery.min.js") }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset("js/bootstrap.min.js") }}"></script>
        <!-- Custom Theme Scripts -->
        <script src="{{ asset("js/gentelella.min.js") }}"></script>

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
        <script src="{{ asset("js/moment.js") }}"></script>
        <script src="{{ asset("js/daterangepicker.js") }}"></script>
        <script src="{{ asset("js/dropzone.min.js") }}"></script>
        <script src="{{ asset("js/nprogress.js") }}"></script>

        <script src="https://cdn.jsdelivr.net/npm/lodash@4.13.1/lodash.min.js"></script>
        
        @stack('scripts')

    </body>
</html>