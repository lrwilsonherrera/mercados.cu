@extends('layouts.main')

@section('title', 'Inicio')

@php
    $menu = 'start';
@endphp

@section('slider')
    @parent

    <section>
    <div style="padding: 50px 0px 0px">
        <img class="img-fluid" src="{{ asset('assets/img/banner/banner.png') }}" alt=""/>
    </div>
</section>
@endsection

@section('content')
<!-- Section Services Esta sesion sirve para el bulevar
================================================== -->
<section id="bulevar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"><b>Bulevar</b></h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- begin 1st row -->
            <div class="col-lg-4 col-md-6 text-center">
                <div class="service-box">
                    <!--<i class="fa fa-2x fa-map-marker wow bounceIn text-fade"></i>-->
                    <a href="{{ route('unitiendas') }}"><img class="img-fluid fa-border" src="{{ asset('assets/img/bulevar/bulevar_unitiendas.jpg') }}"
                                                   alt=""/></a>
                    <!--<h3><a href="unitiendas.html">Unitiendas</a></h3>-->
                    <hr>
                    <p class="text-muted">
                        Un universo de tiendas al alcance de tu mirada, con ofertas de productos industriales de forma
                        mayorista.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="service-box">
                    <a href="{{ route('servitienda') }}"><img class="img-fluid fa-border"
                                                    src="{{ asset('assets/img/bulevar/bulevar_servitiendas.jpg') }}" alt=""/></a>

                    <!--<h3><a href="unitiendas.html">Unitiendas</a></h3>-->
                    <hr>
                    <p class="text-muted">
                        Sin límites de expansión para tu comodidad te ofrecemos de forma mayorista servicios
                        informáticos, equipos tecnológicos y electrodomésticos, transporte, servicios logísticos,
                        comunicación visual y producciones gráficas.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="service-box">
                    <a href="{{ route('mercabal') }}"><img class="img-fluid fa-border" src="{{ asset('assets/img/bulevar/bulevar_mercabal.jpg') }}"
                                                 alt=""/></a>

                    <!--<h3><a href="unitiendas.html">Unitiendas</a></h3>-->
                    <hr>
                    <p class="text-muted">
                        Te proponemos de forma mayorista productos alimentarios, donde la calidad es garantía y cantidad
                        la porción que buscabas.
                        <!--Funcionamos pensando en usted.-->
                    </p>
                </div>
            </div>
        </div>
        <!-- end 1st row -->
        <br/>
        <div class="row">
            <div class="col-lg-2"></div>
            <!-- begin 2nd row -->
            <div class="col-lg-4 col-md-6 text-center">
                <div class="service-box">
                    <a href="{{ route('bodegas') }}"><img class="img-fluid fa-border" src="{{ asset('assets/img/bulevar/bulevar_bodegas.jpg') }}" alt=""/></a>
                    <!--<h3><a href="unitiendas.html">Unitiendas</a></h3>-->
                    <hr>
                    <p class="text-muted">
                        Acercamos a usted la canasta básica normada, con la facilidad de pagos en línea, mensajería y
                        rapidez en el tiempo de entrega.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="service-box">
                    <a href="#"><img class="img-fluid fa-border" src="{{ asset('assets/img/bulevar/bulevar_ensucasa.jpg') }}" alt=""/></a>
                    <!--<h3><a href="unitiendas.html">Unitiendas</a></h3>-->
                    <hr>
                    <p class="text-muted">
                        Desde cualquier parte del mundo reserva variadas ofertas gastronómicas, y tu familia cubana
                        disfrutará de una ocasión especial resaltando su felicidad.
                    </p>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
        <!-- end 2nd row -->
    </div>
</section>
<div class="clearfix">
</div>

<!-- Section Testimonials Sirve para ideas de mercado de BOdega, de mercabal de unitienda y de ensucasa
================================================== -->
<section id="propaganda">
    <div class="container">
        <div class="row">
            <div class="col-md-12" data-wow-delay="0.2s">
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <!--Bottom Carousel Indicators-->
                    <!--<ol class="carousel-indicators">-->
                        <!--<li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive "-->
                                                                                                <!--src=""-->
                                                                                                <!--alt="">-->
                        <!--<li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive "-->
                                                                                 <!--src=""-->
                                                                                 <!--alt="">-->
                        <!--<li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive "-->
                                                                                 <!--src=""-->
                                                                                 <!--alt="">-->
                        <!--</li>-->
                        <!--<li data-target="#quote-carousel" data-slide-to="3"><img class="img-responsive"-->
                                                                                 <!--src=""-->
                                                                                 <!--alt="">-->
                        <!--</li>-->
                        <!--<li data-target="#quote-carousel" data-slide-to="4"><img class="img-responsive"-->
                                                                                 <!--src=""-->
                                                                                 <!--alt="">-->
                        <!--</li>-->
                        <!--<li data-target="#quote-carousel" data-slide-to="5"><img class="img-responsive"-->
                                                                                 <!--src=""-->
                                                                                 <!--alt="">-->
                        <!--</li>-->
                    <!--</ol>-->
                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner text-center">
                        <!-- Quote 1 -->
                        <div class="item active">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <small>Mercados.cu</small>
                                        <p>
                                            Mercados disponibles para todo tipo de clientes, donde nos distingue y
                                            caracteriza la perfección, giradas en una sola idea <br>Tu Felicidad.
                                        </p>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!--Quote 2 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <small>Unitiendas</small>
                                        <p>
                                            Adquiere tus productos industriales de calidad, viaja por el mundo virtual y
                                            conquista lo que tanto deseas.
                                        </p>

                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 3 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <small>Servitiendas</small>
                                        <p>
                                            Con + hacemos +:<br>
                                            más productos, más calidad, más precisión, más garantías, lleva a menos
                                            gastos y mayor satisfacción.
                                        </p>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 4 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <small>Mercabal</small>
                                        <p>
                                            Solicita, garantiza y compra tus productos y alimentos. Para que alcances el
                                            éxito a través de nosotros.
                                        </p>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 5 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <small>Bodega</small>
                                        <p>
                                            Con opciones variadas y servicios generales, garantizamos que la canasta
                                            básica normada llegue a ti sin límites de expansión para tu comodidad.
                                        </p>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 6 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <small>EnSuCasa</small>
                                        <p>
                                            Descubre el placer de un buen almuerzo o cena, donde acercarnos a tus gustos
                                            es el detalle que nos distingue.
                                        </p>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Carousel Buttons Next/Prev -->
                    <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i
                            class="fa fa-chevron-left"></i></a>
                    <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i
                            class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection