@extends('layouts.main')

@section('title', 'Inicio')

@section('nav')
    <x-nav :type="'inicio'" :menu="'inicio'"></x-nav>
@endsection

@section('slider')
    @parent

    <section class="p-0">
        <img src="assets/img/hero/h1_hero.jpg" class="mx-auto d-block img-fluid">
    </section>
@endsection

@section('content')
  <!-- Favourite Places Start -->
        <div id="bulevar" class="favourite-place pt-5">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-12">
                        <div class="section-tittle text-center mb-5">                            
                            <h2 class="text-muted mb-0">BULEVAR</h2>
                            <div class="d-inline-block bg-info" style="width: 125px; height: 7px;"></div>
                        </div>
                        
                    </div>
                </div>
                <div class="row justify-content-md-center"> 
                    <div class="col-12 col-md-6">
                        <div class="single-place mb-30 text-center">
                            <div class="place-img p-5">
                                <a href="{{ route('bodegas') }}"><img class="fa-border w-50 h-auto" src="assets/img/service/services4.jpg" alt=""></a>
                            </div>
                            <div class="d-inline-block bg-info mb-2" style="width: 125px; height: 5px;"></div>
                            <p>Acercamos a usted la canasta básica normada, con la facilidad de pagos en línea, mensajería y rapidez en el tiempo de entrega.</p>
                                    
                        </div>
                    </div>                   
                    <div class="col-12 col-md-6">
                        <div class="single-place mb-30 text-center">
                            <div class="place-img p-5">
                                <a href="{{ route('ensucasa') }}"><img class="fa-border w-50 h-auto" src="assets/img/service/services5.jpg" alt=""></a>
                            </div>
                            <div class="d-inline-block bg-info mb-2" style="width: 125px; height: 5px;"></div>
                            <p>Desde cualquier parte del mundo reserva variadas ofertas gastronómicas,
                                         y tu familia cubana disfrutará de una ocasión especial resaltando su felicidad.</p>
                                    
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="single-place mb-30 text-center">
                            <div class="place-img p-5">
                                <a href="{{ route('servitienda') }}"><img class="fa-border w-50 h-autox" src="assets/img/service/services2.jpg" alt=""></a>
                            </div>
                            <div class="d-inline-block bg-info mb-2" style="width: 125px; height: 5px;"></div>
                            <p>Sin límites de expansión para tu comodidad te ofrecemos
                                         de forma mayorista servicios informáticos, equipos tecnológicos y
                                          electrodomésticos, transporte, servicios logísticos, comunicación 
                                          visual y producciones gráficas. </p>
                                    
                        </div>
                    </div>     
                    <div class="col-12 col-md-6">
                        <div class="single-place mb-30 text-center">
                            <div class="place-img p-5">
                                <a href="{{ route('unitiendas') }}"><img class="fa-border w-50 h-auto" src="assets/img/service/services1.jpg" alt=""></a>
                            </div>
                            <div class="d-inline-block bg-info mb-2" style="width: 125px; height: 5px;"></div>
                            <p>Un universo de tiendas al alcance de tu mirada, 
                                        con ofertas de productos industriales de forma mayorista.</p>
                                    
                        </div>
                    </div>	               
                    <div class="col-12 col-md-6">
                        <div class="single-place mb-30 text-center">
                            <div class="place-img p-5">
                                <a href="{{ route('mercabal') }}"><img class="fa-border w-50 h-auto" src="assets/img/service/services3.jpg" alt=""></a>
                            </div>
                            <div class="d-inline-block bg-info mb-2" style="width: 125px; height: 5px;"></div>
                            <p>Te proponemos de forma mayorista productos alimentarios, donde la calidad es garantía y cantidad la porción que buscabas.</p>
                                    
                        </div>
                    </div>	                   			
                
                </div>
            </div>
        </div>
        
        <!-- Testimonial Start -->
        <div class="testimonial-area testimonial-padding">
            <div class="container ">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-11 col-lg-11 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <img src="assets/img/icon/testimonial.png" alt="">
                                        <h3>Mercados.cu</h3> 
                                        <p>Mercados disponibles para todo tipo de clientes, donde nos distingue y caracteriza la perfección, giradas en una sola idea
                                            Tu Felicidad..</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                       
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <img src="assets/img/icon/testimonial.png" alt="">
                                       

                                           <h3>Mercados.cu</h3> 
                                            <p>
                                            Mercados disponibles para todo tipo de clientes, donde nos distingue y caracteriza la perfección, giradas en una sola idea
                                            Tu Felicidad.
                                        
                                        </p>
                                    </div>
                                    <!-- founder -->
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
@endsection

@section('style')
<style>
    .single-place img {
    width: 180px;
    height: auto;
    border-top-left-radius: 30%;
    border-bottom-right-radius: 30%;
    border: 1px black solid;
    background-color: white;
    padding: 10px;
    box-shadow: 0px 0px 50px 0px rgb(0 0 0 / 80%);
}

.fa-border {
    padding: .2em .25em .15em;
    border: solid .08em #eee;
    border-radius: .1em;
}
</style>
@endsection