@extends('layouts.main')

@section('title', 'Inicio')

@section('nav')
    <x-nav :type="'tiendas'" :menu="'mercabal'"></x-nav>
@endsection

@section('slider')
    @parent

    <section class="p-0">
        <img src="assets/img/banner/banner_mercabal.jpg" class="mx-auto d-block img-fluid">
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
                    <h2 class="text-muted mb-0">MERCADOS</h2>
                    <div class="d-inline-block bg-green-800" style="width: 125px; height: 7px;"></div>
                </div>
                
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="wow-pricing-table col col-md-3">
                <div class="wow-pricing unitienda">
                    <div class="wow-pricing-header bg-green-800">
                        <h5>Pinar del Rio</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="assets/img/mercabal/mercabal.jpg" alt=""/>

                    </div>
                    <div class="wow-pricing-button">
                        <a href="#" class="btn btn-danger bg-green-800" target="_self" rel="nofollow">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="wow-pricing-table col col-md-3">
                <div class="wow-pricing unitienda-featured">
                    <div class="wow-pricing-header bg-green-500">
                        <h5>Artemisa</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="assets/img/mercabal/mercabal.jpg" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="#" class="btn btn-danger bg-green-500" target="_self" rel="nofollow">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="wow-pricing-table col col-md-3">
                <div class="wow-pricing unitienda">
                    <div class="wow-pricing-header bg-green-800">
                        <h5>La Habana</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="assets/img/mercabal/mercabal.jpg" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="#" class="btn btn-danger bg-green-800" target="_self" rel="nofollow">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="wow-pricing-table col col-md-3">
                <div class="wow-pricing unitienda-featured">
                    <div class="wow-pricing-header bg-green-500">
                        <h5>Mayabeque</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="assets/img/mercabal/mercabal.jpg" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="#" class="btn btn-danger bg-green-500" target="_self" rel="nofollow">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="wow-pricing-table col col-md-3">
                <div class="wow-pricing unitienda-featured">
                    <div class="wow-pricing-header bg-green-800">
                        <h5>Matanzas</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="assets/img/mercabal/mercabal.jpg" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="#" class="btn btn-danger bg-green-800" target="_self" rel="nofollow">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="wow-pricing-table col col-md-3">
                <div class="wow-pricing unitienda">
                    <div class="wow-pricing-header bg-green-500">
                        <h5>Cienfuegos</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="assets/img/mercabal/mercabal.jpg" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="#" class="btn btn-danger bg-green-500" target="_self" rel="nofollow">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="wow-pricing-table col col-md-3">
                <div class="wow-pricing unitienda-featured">
                    <div class="wow-pricing-header bg-green-800">
                        <h5>Villa Clara</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="assets/img/mercabal/mercabal.jpg" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="#" class="btn btn-danger bg-green-800" target="_self" rel="nofollow">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="wow-pricing-table col col-md-3">
                <div class="wow-pricing unitienda">
                    <div class="wow-pricing-header bg-green-500">
                        <h5>Sancti Spíritu</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="assets/img/mercabal/mercabal.jpg" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="#" class="btn btn-danger bg-green-500" target="_self" rel="nofollow">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="wow-pricing-table col col-md-3">
                <div class="wow-pricing unitienda">
                    <div class="wow-pricing-header bg-green-800">
                        <h5>Ciego de Ávila</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="assets/img/mercabal/mercabal.jpg" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="#" class="btn btn-danger bg-green-800" target="_self" rel="nofollow">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="wow-pricing-table col col-md-3">
                <div class="wow-pricing unitienda-featured">
                    <div class="wow-pricing-header bg-green-500">
                        <h5>Camagüey</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="assets/img/mercabal/mercabal.jpg" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="#" class="btn btn-danger bg-green-500" target="_self" rel="nofollow">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="wow-pricing-table col col-md-3">
                <div class="wow-pricing unitienda">
                    <div class="wow-pricing-header bg-green-800">
                        <h5>Las Tunas</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="assets/img/mercabal/mercabal.jpg" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="#" class="btn btn-danger bg-green-800" target="_self" rel="nofollow">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="wow-pricing-table col col-md-3">
                <div class="wow-pricing unitienda-featured">
                    <div class="wow-pricing-header bg-green-500">
                        <h5>Holguín</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="assets/img/mercabal/mercabal.jpg" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="#" class="btn btn-danger bg-green-500" target="_self" rel="nofollow">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="wow-pricing-table col col-md-3">
                <div class="wow-pricing unitienda-featured">
                    <div class="wow-pricing-header bg-green-800">
                        <h5>Granma</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="assets/img/mercabal/mercabal.jpg" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="#" class="btn btn-danger bg-green-800" target="_self" rel="nofollow">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="wow-pricing-table  col col-md-3">
                <div class="wow-pricing unitienda">
                    <div class="wow-pricing-header bg-green-500">
                        <h5>Santiago de Cuba</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                       <img class="img-fluid" src="assets/img/mercabal/mercabal.jpg" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="#" class="btn btn-danger bg-green-500" target="_self" rel="nofollow">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="wow-pricing-table col col-md-3">
                <div class="wow-pricing unitienda-featured">
                    <div class="wow-pricing-header bg-green-800">
                        <h5>Guantánamo</h5>
                    </div>
                    <div class="wow-pricing-content">
                        <br>
                        <img class="img-fluid" src="assets/img/mercabal/mercabal.jpg" alt=""/>
                    </div>
                    <div class="wow-pricing-button">
                        <a href="https://gtm.unitiendas.cinet.cu" class="btn btn-danger bg-green-800" target="_self" rel="nofollow">Entrar</a>
                    </div>
                </div>
            </div>

        </div>
  </div>
@endsection

@section('style')
<style>
  .bg-green-300 {
      background-color: #6EE7B7 !important
  }
  .bg-green-500 {
      background-color: #10B981 !important
  }
 .bg-green-800 {
      background-color: #065F46 !important
  }

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