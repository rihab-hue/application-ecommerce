<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- CSS here -->
   @yield('css')
   <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset ('/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset ('/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset ('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap-icons.css')}} ">
  
</head>
<body>
@yield('content')
            <!-- Jquery, Popper, Bootstrap -->
            <script src="{{asset('/assets/js/jequery.min.js')}} "></script>
            <script src="{{asset('/assets/js/popper.min.js')}} "></script>
            <script src="{{asset('/assets/js/bootstrap.min.js')}} "></script>
        @yield('js')
</body>
</html>


