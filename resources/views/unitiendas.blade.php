@extends('layouts.main')

@section('title', 'Inicio')

@section('nav')
    <x-nav :type="'tiendas'" :menu="'unitienda'"></x-nav>
@endsection

@section('slider')
    @parent

    <section class="p-0">
        <img src="assets/img/banner/banner_unitienda.jpg" class="mx-auto d-block img-fluid">
    </section>
@endsection

@section('content')
  <!-- Favourite Places Start -->
  <div id="bulevar" class="favourite-place pt-5"></div>
  <div class="container">
       <!-- Section Tittle -->
        <div class="row">
            <div class="col-12">
                <div class="section-tittle text-center mb-5">                            
                    <h2 class="text-muted mb-0">TIENDAS</h2>
                    <div class="d-inline-block bg-info" style="width: 125px; height: 7px;"></div>
                </div>
                
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="wow-pricing-table col col-md-3">
                <div class="wow-pricing unitienda">
                    <div class="wow-pricing-header bg-secondary">
                        <h5>Pinar del Rio</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="assets/img/unitienda/pinar.jpg" alt=""/>

                    </div>
                    <div class="wow-pricing-button">
                        <a href="#" class="btn bg-secondary" target="_self" rel="nofollow">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="wow-pricing-table col col-md-3">
                <div class="wow-pricing unitienda-featured">
                    <div class="wow-pricing-header bg-info">
                        <h5>Artemisa</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="assets/img/unitienda/artemisa.jpg" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="#" class="btn bg-info" target="_self" rel="nofollow">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="wow-pricing-table col col-md-3">
                <div class="wow-pricing unitienda">
                    <div class="wow-pricing-header bg-secondary">
                        <h5>La Habana</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="assets/img/unitienda/habana.jpg" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="#" class="btn bg-secondary" target="_self" rel="nofollow">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="wow-pricing-table col col-md-3">
                <div class="wow-pricing unitienda-featured">
                    <div class="wow-pricing-header bg-info">
                        <h5>Mayabeque</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="assets/img/unitienda/mayabeque.jpg" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="#" class="btn bg-info" target="_self" rel="nofollow">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="wow-pricing-table col col-md-3">
                <div class="wow-pricing unitienda-featured">
                    <div class="wow-pricing-header bg-secondary">
                        <h5>Matanzas</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="assets/img/unitienda/matanzas.jpg" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="#" class="btn bg-secondary" target="_self" rel="nofollow">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="wow-pricing-table col col-md-3">
                <div class="wow-pricing unitienda">
                    <div class="wow-pricing-header bg-info">
                        <h5>Cienfuegos</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="assets/img/unitienda/cienfuegos.jpg" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="#" class="btn bg-info" target="_self" rel="nofollow">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="wow-pricing-table col col-md-3">
                <div class="wow-pricing unitienda-featured">
                    <div class="wow-pricing-header bg-secondary">
                        <h5>Villa Clara</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="assets/img/unitienda/villa_clara.jpg" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="#" class="btn bg-secondary" target="_self" rel="nofollow">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="wow-pricing-table col col-md-3">
                <div class="wow-pricing unitienda">
                    <div class="wow-pricing-header bg-info">
                        <h5>Sancti Spíritu</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="assets/img/unitienda/sancti.jpg" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="#" class="btn bg-info" target="_self" rel="nofollow">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="wow-pricing-table col col-md-3">
                <div class="wow-pricing unitienda">
                    <div class="wow-pricing-header bg-secondary">
                        <h5>Ciego de Ávila</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="assets/img/unitienda/ciego.jpg" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="#" class="btn bg-secondary" target="_self" rel="nofollow">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="wow-pricing-table col col-md-3">
                <div class="wow-pricing unitienda-featured">
                    <div class="wow-pricing-header bg-info">
                        <h5>Camagüey</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="assets/img/unitienda/camaguey.jpg" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="#" class="btn bg-info" target="_self" rel="nofollow">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="wow-pricing-table col col-md-3">
                <div class="wow-pricing unitienda">
                    <div class="wow-pricing-header bg-secondary">
                        <h5>Las Tunas</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="assets/img/unitienda/tunas.jpg" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="#" class="btn bg-secondary" target="_self" rel="nofollow">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="wow-pricing-table col col-md-3">
                <div class="wow-pricing unitienda-featured">
                    <div class="wow-pricing-header bg-info">
                        <h5>Holguín</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="assets/img/unitienda/holguin.jpg" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="#" class="btn bg-info" target="_self" rel="nofollow">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="wow-pricing-table col col-md-3">
                <div class="wow-pricing unitienda-featured">
                    <div class="wow-pricing-header bg-secondary">
                        <h5>Granma</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="assets/img/unitienda/granma.jpg" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="#" class="btn bg-secondary" target="_self" rel="nofollow">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="wow-pricing-table  col col-md-3">
                <div class="wow-pricing unitienda">
                    <div class="wow-pricing-header bg-info">
                        <h5>Santiago de Cuba</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="assets/img/unitienda/santiago.jpg" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="https://scu.unitiendas.cinet.cu" class="btn bg-info" target="_self" rel="nofollow">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="wow-pricing-table col col-md-3">
                <div class="wow-pricing unitienda-featured">
                    <div class="wow-pricing-header bg-secondary">
                        <h5>Guantánamo</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="assets/img/unitienda/guantanamo.jpg" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="https://gtm.unitiendas.cinet.cu" class="btn bg-secondary" target="_self" rel="nofollow">Entrar</a>
                    </div>
                </div>
            </div>

        </div>
  </div>
@endsection

@section('style')
<style>
   .wow-pricing-table {
    list-style: none;
    margin: 0;
    padding: 0;
    -webkit-transition: 0.3s;
    -moz-transition: 0.3s;
    transition: 0.3s;
}


.wow-pricing-table div {
    list-style: none;
    border-top-left-radius: 50%;
    border-top-right-radius: 50%;
}

.wow-pricing-table > div {
    list-style: none;
    text-shadow: none;
    margin-bottom: 0px;
    /*border: 1px solid #eee;*/
    margin: 0px 15px;
}

.wow-pricing-table > div.featured {
    z-index: 1;
}

.wow-pricing-table > div.featured {
}

.wow-pricing-table > div.featured .wow-pricing-header {
    background-color: #136689;
    /*padding: 30px 10px 30px 10px;*/
    border-top-left-radius: 50%;
    border-top-right-radius: 50%;
}
.wow-pricing-table > div.bodega .wow-pricing-header {
    background-color: #890808;
    /*padding: 30px 10px 30px 10px;*/
    border-top-left-radius: 50%;
    border-top-right-radius: 50%;
}
.wow-pricing-table > div.bodega-featured .wow-pricing-header {
    background-color: #d6e772;
    /*color: #000000;*/
    /*padding: 30px 10px 30px 10px;*/
    border-top-left-radius: 50%;
    border-top-right-radius: 50%;
}
.wow-pricing-table > div.mercabal .wow-pricing-header {
    background-color: #148940;
    /*padding: 30px 10px 30px 10px;*/
    border-top-left-radius: 50%;
    border-top-right-radius: 50%;
}
.wow-pricing-table > div.mercabal-featured .wow-pricing-header {
    background-color: #d6e772;
    /*color: #000000;*/
    /*padding: 30px 10px 30px 10px;*/
    border-top-left-radius: 50%;
    border-top-right-radius: 50%;
}

/*.wow-pricing {*/
/*!*border: 1px solid;*!*/
/*!*border-color: #4d4948;*!*/
/*padding: 30px 10px 30px 10px;*/
/*border-radius: 20%;*/
/*}*/

.wow-pricing-table:hover {
    margin-top: -5px;
}

.wow-pricing-table .wow-pricing-header {
    text-align: center;
    padding: 20px 0 10px 0;
    background-color: #838281;
}

.wow-pricing-table .wow-pricing-header h5 {
    color: #fff;
    font-size: 20px;
    margin: 0;
    padding: 0 20px 0px;
}

.wow-pricing-table .wow-pricing-cost {
    color: #fff;
    font-size: 1.500em;
    line-height: 1em;
    padding-top: 15px;
    background: #333;
}

.wow-pricing-table .wow-pricing-per {
    font-size: 0.786em;
    color: #fff;
    background-color: #333;
    padding-bottom: 10px;
}

.wow-pricing-table .wow-pricing-content {
    background: #fff;
    text-align: center;
}

.wow-pricing-table .wow-pricing-content ul {
    margin: 0 !important;
    list-style: none !important;
    padding-left: 0;
}

.wow-pricing-table .wow-pricing-content ul li {
    margin: 0 !important;
    padding: 10px 20px !important;
    border-bottom: 1px solid #eee;
    list-style: none !important;
    color: #555;
}

.wow-pricing-table .wow-pricing-content ul li:nth-child(2n+2) {
    background: #F9F9F9;
}

.wow-pricing-table .wow-pricing-button {
    background: #fff;
    text-align: center;
    border-top: 1px solid #fff;
    padding: 35px 20px 35px;
}

.wow-pricing-table .wow-pricing-button .wow-button {
    float: none;
    margin: 0 auto;
    background: #838281;
    color: #fff;
    border-radius: 3px;
    padding: 12px 22px 14px;
}

.featured .wow-pricing-per, .featured .wow-pricing-cost, .featured .wow-pricing-button .wow-button, .buttoncolor {
    background-color: #136689;
}
.bodega .wow-pricing-per, .bodega .wow-pricing-cost, .bodega .wow-pricing-button .wow-button, .buttoncolor {
    background-color: #890808;
}
.bodega-featured .wow-pricing-per, .bodega-featured .wow-pricing-cost, .bodega-featured .wow-pricing-button .wow-button, .buttoncolor {
    background-color: #d6e772;
    /*color: #000000;*/
}
.mercabal .wow-pricing-per, .mercabal .wow-pricing-cost, .mercabal .wow-pricing-button .wow-button, .buttoncolor {
    background-color: #148940;
}
.mercabal-featured .wow-pricing-per, .mercabal-featured .wow-pricing-cost, .mercabal-featured .wow-pricing-button .wow-button, .buttoncolor {
    background-color: #d6e772;
    /*color: #000000;*/
}

.wow-pricing-table .wow-pricing-content img {
    width: 100%;
    height: auto;
    border-top-left-radius: 20%;
    border-bottom-right-radius: 20%;
    padding: 10px;
    box-shadow: 0px 0px 10px 0px;
}
</style>
@endsection