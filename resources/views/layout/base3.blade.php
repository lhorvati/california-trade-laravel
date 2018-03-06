<!DOCTYPE html>
<html lang="hr">
  <head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta content="California, glass, staklo, boce, ukrasne boce, boce za vino, boce za ulje, wine bottle, oil bottle, Split, TTTS, Vetropack" name="keywords">
    <meta content="" name="description">
    <meta content="horvaticluka@gmail.com" name="author">
    <meta content="width=device-width; initial-scale=1.0, maximum-scale=1.0" id="meta" name="viewport">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/query.css') }}" rel="stylesheet">
    <link href="{{ asset('css/img-slider.css') }}" rel="stylesheet">
    <!-- Lightbox -->
    <link href="{{ asset('src/lightbox/css/lightbox.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700,900|Open+Sans|Raleway:400,500,900&amp;subset=latin-ext" rel="stylesheet">
  </head>
  <body>
    
    @include('layout.header')
    
    @include('layout.article-nav')
    
    @yield('body')

    @include('layout.footer')

  </body>
</html>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
<script src="{{ asset('src/lightbox/js/lightbox.js') }}"></script>
