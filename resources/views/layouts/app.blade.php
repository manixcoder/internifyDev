<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('public/favicon.ico') }}">
    <title>{{ config('app.name', 'Laravel') }} </title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('public/looksyassets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link href="{{asset('public/looksyassets/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('public/looksyassets/css/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/looksyassets/css/style.css')}}" rel="stylesheet">
    <script src="{{asset('public/looksyassets/js/ie-emulation-modes-warning.js')}}"></script>
    <script src="{{asset('public/looksyassets/js/jquery-3.3.1.min.js')}}"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link href="{{asset('public/css/custom-css.css')}}" rel="stylesheet">
    @yield('pageCss')
</head>

<body>
    <!-- login start -->
    @yield('content')

    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{  asset('public/looksyassets/js/bootstrap.min.js') }}"></script>
    @yield('pageJs')
</body>

</html>