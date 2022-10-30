<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{app()->getLocale() == 'ar' ? 'rtl' : 'ltr'}}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <title> Raqamyat</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{asset("web/css/bootstrap.min.css")}}">

    <!-- Fontawesome css -->
    <link rel="stylesheet" href="{{asset("web/css/font-awesome.min.css")}}">


    <!-- Main css -->
    <link rel="stylesheet" href="{{asset("web/css/style.css")}}">

    <script src="https://kit.fontawesome.com/e1d9f22699.js" crossorigin="anonymous"></script>

    <!--Define social media profiles with schema.org markup -->



</head>


<body >

@yield('content')

<!-- JS here -->
<!-- Jquery -->
<script src="{{asset("web/js/jquery-3.6.1.min.js")}}"></script>
<!-- Bootstrap -->
<script src="{{asset("web/js/popper.min.js")}}"></script>
<script src="{{asset("web/js/bootstrap.min.js")}}"></script>



</body>
</html>
