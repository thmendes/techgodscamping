
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href=""> -->

    <title>Paróquia Nossa Senhora Aparecida - Douradina</title>

    <!-- Bootstrap -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">

  </head>
  <body id="home">

    <style>
    body {
      font-family: "Tajawal";
      font-size: 17px;
    }
    p {
      color: #747474;
    }
    a:hover {
      text-decoration: none;
    }
    @media (max-width: 768px) {
      body {
        margin-bottom: 90px; 
      }
    }
    </style>

    @include('institutional/header-click')
    @yield('content')

    @include('institutional/footer')
    @include('institutional/templateby')
    
    <!-- FontAwesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="{{ asset("js/jquery.min.js") }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset("js/bootstrap.min.js") }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/10.0.1/classic/ckeditor.js"></script>
    <script>
      $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
      });
      var $doc = $('html, body');
      $('a').click(function() {
          $doc.animate({
              scrollTop: $( $.attr(this, 'href') ).offset().top - 150
          }, 500);
          return false;
      });
      
    </script>
  </body>
</html>
