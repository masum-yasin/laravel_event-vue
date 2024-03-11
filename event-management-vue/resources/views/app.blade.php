<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

       <!-- PLUGINS CSS STYLE -->
  <!-- Bootstrap -->
  <link href="{{asset('')}}frontend/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{asset('')}}frontend/plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Magnific Popup -->
  <link href="{{asset('')}}frontend/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
  <!-- Slick Carousel -->
  <link href="{{asset('')}}frontend/plugins/slick/slick.css" rel="stylesheet">
  <link href="{{asset('')}}frontend/plugins/slick/slick-theme.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="{{asset('')}}frontend/css/style.css" rel="stylesheet">

  <!-- FAVICON -->
  <link href="{{asset('')}}frontend/images/favicon.png" rel="shortcut icon">
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased body-wrapper">
        @inertia

         <!-- JAVASCRIPTS -->
  <!-- jQuey -->
  <script src="{{asset('')}}frontend/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('')}}frontend/plugins/bootstrap/bootstrap.min.js"></script>
  <!-- Shuffle -->
  <script src="{{asset('')}}frontend/plugins/shuffle/shuffle.min.js"></script>
  <!-- Magnific Popup -->
  <script src="{{asset('')}}frontend/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
  <!-- Slick Carousel -->
  <script src="{{asset('')}}frontend/plugins/slick/slick.min.js"></script>
  <!-- SyoTimer -->
  <script src="{{asset('')}}frontend/plugins/syotimer/jquery.syotimer.min.js"></script>
  <!-- Google Mapl -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
  <script src="{{asset('')}}frontend/plugins/google-map/gmap.js"></script>
  <!-- Custom Script -->
  <script src="{{asset('')}}frontend/js/script.js"></script>
    </body>
</html>
