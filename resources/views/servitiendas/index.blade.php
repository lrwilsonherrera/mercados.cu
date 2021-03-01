<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Mercados.cu</title>
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
            <a class="navbar-brand page-scroll" href="{{ url('/') }}"><img src="{{ asset('assets/img/logomercados1.png') }}" alt="logo"
                                                                       style="width: 80px; height: auto; padding: 0px"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" style="padding: 10px">
                <li><a class="page-scroll" href="{{ route('unitiendas') }}">Unitiendas</a></li>
                <li class="active"><a class="page-scroll" href="{{ route('servitienda') }}">Servitiendas</a></li>
                <li><a class="page-scroll" href="{{ route('mercabal') }}">Mercabal</a></li>
                <li><a class="page-scroll" href="{{ route('bodegas') }}">Bodegas</a></li>
                <li><a class="page-scroll" href="https://ensucasa.comerciogtm.co.cu">EnSuCasa</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Section Intro Slider
================================================== -->
<section>
    <div style="padding: 50px 0px 0px">
        <img class="img-fluid" src="{{ asset('assets/img/banner/banner_servitienda.jpg') }}" alt=""/>
    </div>
</section>

<!-- Section Tiendas
================================================== -->
<!-- Section Tiendas
================================================== -->
<section id="pricing" class="no-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <!--<h2 class="section-heading"><b>Servitiendas</b></h2>-->
                <hr class="primary">
                <br/>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="wow-pricing-table col-md-4">
                <div class="wow-pricing">
                    <div class="wow-pricing-header">
                        <h5>CEDIPAD</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img src="{{ asset('assets/img/servitienda/servitienda_cedipad.jpg') }}" alt=""/>

                    </div>
                    <div class="wow-pricing-button">
                        <a href="https://tienda.cinet.cu" class="wow-button buttonprice" target="_self" rel="nofollow"><span
                                class="wow-button-inner">Entrar</span></a>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
            <div class="wow-pricing-table col-md-4">
                <div class="wow-pricing featured">
                    <div class="wow-pricing-header">
                        <h5>EIESA</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="{{ asset('assets/img/servitienda/servitienda_eiesa.jpg') }}" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="https://eiesa.unitiendas.cinet.cu" class="wow-button buttonprice" target="_self" rel="nofollow"><span
                                class="wow-button-inner">Entrar</span></a>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
            <div class="wow-pricing-table col-md-4">
                <div class="wow-pricing ">
                    <div class="wow-pricing-header">
                        <h5>GRAN COMERCIAL</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="{{ asset('assets/img/servitienda/servitienda_gran_comercial.jpg') }}" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="#" class="wow-button buttonprice" target="_self" rel="nofollow"><span
                                class="wow-button-inner">Entrar</span></a>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <hr>
        <div class="row">
            <!-- /.col-md-4 -->
            <div class="wow-pricing-table col-md-4">
                <div class="wow-pricing featured">
                    <div class="wow-pricing-header">
                        <h5>PUBLIMER</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="{{ asset('assets/img/servitienda/servitienda_publimer.jpg') }}" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="#" class="wow-button buttonprice" target="_self" rel="nofollow"><span
                                class="wow-button-inner">Entrar</span></a>
                    </div>
                </div>
            </div>
            <div class="wow-pricing-table col-md-4">
                <div class="wow-pricing">
                    <div class="wow-pricing-header">
                        <h5>ETNC</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="{{ asset('assets/img/servitienda/servitienda_transporte.jpg') }}" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="#" class="wow-button buttonprice" target="_self" rel="nofollow"><span
                                class="wow-button-inner">Entrar</span></a>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
            <div class="wow-pricing-table col-md-3">
                <!--<div class="wow-pricing featured">-->
                    <!--<div class="wow-pricing-header">-->
                        <!--<h5>Villa Clara</h5>-->
                    <!--</div>-->
                    <!--<div class="wow-pricing-content">-->
                        <!--<br>-->
                        <!--<img class="img-fluid" src="img/unitienda/pinar.jpg" alt=""/>-->
                    <!--</div>-->
                    <!--<div class="wow-pricing-button">-->
                        <!--<a href="#" class="wow-button buttonprice" target="_self" rel="nofollow"><span-->
                                <!--class="wow-button-inner">Entrar</span></a>-->
                    <!--</div>-->
                <!--</div>-->
            </div>
            <!-- /.col-md-4 -->
        </div>
        <hr>
    </div>
</section>
<div class="clearfix">
</div>

<!-- Section Mercado
================================================== -->
<!--<section id="mercado">-->
    <!--<div class="container">-->
        <!--<div class="row">-->
            <!--<div class="col-lg-10 col-lg-offset-1 text-center">-->
                <!--<h2 class="section-heading"><b>Qué es Servitiendas</b></h2>-->
                <!--<hr>-->
                <!--<p>-->
                    <!--Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque penatibus et magnis dis-->
                    <!--parturient montes ascetur ridiculusmus. Nulla dui. Fusce feugiat. Praesent vestibulum aenean nonummy-->
                    <!--hendrerit mauris. Cum sociis natoque penatibus.-->
                <!--</p>-->
                <!--<p>-->
                    <!--Fusce feugiat Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque penatibus et-->
                    <!--magnis dis parturient montes ascetur ridiculusmus. Nulla dui. Fusce feugiat. Fusce feugiat Praesent-->
                    <!--vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque penatibus et magnis dis parturient-->
                    <!--montes ascetur ridiculusmus. Nulla dui. Fusce feugiat.-->
                <!--</p>-->
                <!--<p>-->
                    <!--Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque penatibus et magnis dis-->
                    <!--parturient montes ascetur ridiculusmus. Nulla dui. Fusce feugiat. Fusce feugiat Praesent vestibulum-->
                    <!--aenean nonummy hendrerit mauris.-->
                <!--</p>-->
            <!--</div>-->
        <!--</div>-->
    <!--</div>-->
<!--</section>-->

<!-- Section Footer
================================================== -->
<footer class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="bottombrand wow flipInX" href="index.html"><img src="{{ asset('assets/img/logomercados2.png') }}" alt="logo" style="width: 100px; height: none; padding: 0px"></h1>
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