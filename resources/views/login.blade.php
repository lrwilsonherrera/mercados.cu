@extends('layouts.main')

@section('title', 'Entrar')

@section('nav')
    <x-nav :type="'inicio'" :menu="'entrar'"></x-nav>
@endsection

@section('slider')
    @parent

    
@endsection

@section('content')
       
            <div class="container pb-70 ">
            <div class="row d-flex justify-content-center">

  <div class="col-md-12">
  <div class="section-tittle text-center mb-6">                            
        <h2 class="text-muted mb-0">Autenticar</h2>
        <br>
        <div class="d-flex align-items-center flex-column" > 
            <form class="formulario">
                <input type="text" class="form-control" placeholder="Usuario">
                <input type="text" class="form-control f-center" placeholder="Contraseña">
                
                    <button class="btn color-button">Entrar</button>
                
                    
              
            </form>
        
  </div>
  </div>
  </div>
  </div>
  </div>
 
  
       
@endsection

@section('style')
<style>
  .formulario {
    width: 50%;
    max-width: 450px;
}

  .formulario input {
    background-color: white;
    box-shadow: 0 8px 20px 0 rgba(0, 0, 0, 0.08);
    border-radius: 50px;
    
    width: 100%;
    height: 60px;
    border: none;
    margin-bottom: 30px;
    padding-left: 30px;
    color: #000;
}
.color-button {
    background-image: -moz-linear-gradient(0deg, #06c6f9 0%, #38eaf9 100%);
    background-image: -webkit-linear-gradient(0deg, #06c6f9 0%, #38eaf9 100%);
    background-image: -ms-linear-gradient(0deg, #06c6f9 0%, #38eaf9 100%);
    font-size: 18px;
    font-family: "OpenSans-Semibold";
    color: #fff;
    border-radius: 50px;
   
    display: inline-block;
    text-transform: uppercase;
    height: 50px;
    text-decoration: none !important;
}

.sombra{
    box-shadow: 0px 0px 50px rgb(39, 42, 82);
    border-radius: 10px;
    border: none;
}
</style>
@endsection