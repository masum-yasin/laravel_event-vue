<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Eventiz - Event Conference HTML Templates</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/images/favicon.png')}}">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="{{asset('frontend/assets/css/plugin.css')}}" rel="stylesheet" type="text/css">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.min.css">
    
</head>

<body>

    <!-- Preloader -->
   
    <!-- header ends -->
@include('frontend.layouts.header')

    <!-- banner starts -->
   @yield('content')
    <!-- event-pricing ends -->

   

    <!-- footer starts -->
   @include('frontend.layouts.footer')
    <!-- footer ends -->

    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    <!-- search popup -->
    <div id="search1">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>


    <!-- *Scripts* -->
    <script src="{{asset('frontend/assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/plugin.js')}}"></script>
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
    <script src="{{asset('frontend/assets/js/custom-nav.js')}}"></script>
</body>

</html>