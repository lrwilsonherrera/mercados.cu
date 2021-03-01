<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Mercados.cu - @yield('title')</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">
    <!-- Custom Fonts -->
    <!--<link href='https://fonts.googleapis.com/css?family=Mrs+Sheppards%7CDosis:300,400,700%7COpen+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800;'-->
    <!--rel='stylesheet' type='text/css'>-->
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" type="text/css">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" type="text/css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top">
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" style="height: 80px">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top"><img src="{{ asset('assets/img/logomercados1.png') }}" alt="logo" style="width: 80px; height: none; padding: 0px"></a>
        </div>

        @php
    
        @endphp
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" style="padding: 10px">
                <li>
                    <a class="page-scroll" href="{{ url('/') }}#page-top">Inicio</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{ url('/') }}#bulevar">Bulevar</a>
                </li>
                <li @if($menu == 'login') class="active" @endif>
                    <a class="page-scroll" href="{{ route('login') }}">Entrar</a>
                </li>
                <li @if($menu == 'register') class="active" @endif>
                    <a class="page-scroll" href="{{ route('register') }}">Registrarse</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Section Intro Slider
================================================== -->
@section('slider')
@show

<!-- Content -->
@yield('content')

<!-- Section Footer
================================================== -->
<footer class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="bottombrand wow flipInX"><img src="{{ asset('assets/img/logomercados2.png') }}" alt="logo"
                                                         style="width: 100px; height: none; padding: 0px"></h1>
                <p>
                    &copy; 2021 Cedipad. Todos los derechos reservados.
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/parallax.js') }}"></script>
<script src="{{ asset('assets/js/contact.js') }}"></script>
<script src="{{ asset('assets/js/countto.js') }}"></script>
<script src="{{ asset('assets/js/jquery.easing.min.') }}js"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/common.js') }}"></script>
</body>
</html>