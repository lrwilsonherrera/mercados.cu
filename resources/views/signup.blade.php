@extends('layouts.main')

@section('title', 'Registrar')

@section('nav')
    <x-nav :type="'inicio'" :menu="'registrarse'"></x-nav>
@endsection

@section('slider')
    @parent

    
@endsection

@section('content')
<div id="bulevar" class="favourite-place testimonial-padding">
       
     <div class="container  ">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="section-tittle text-center mb-6">                            
                <h2 class="text-muted mb-0">Registrar</h2>
                <br></br>
                    <div class="d-flex align-items-center flex-column" > 
                        <form class="formulario">
                        <input type="text" class="form-control" placeholder="Nombre de Comercio">
                        <input type="text" class="form-control f-center" placeholder="Correo Electrónico">
                        
                        <div class="select-form ">
                                        <div class="select-itms">
                                            <select name="select" id="select1">
                                            <option value="">PLATAFORMA</option>
                                                <option value="">ENSUCASA</option>
                                                <option value="">SERVITIENDAS</option>
                                                <option value="">BODEGAS</option>
                                                <option value="">UNITIENDAS</option>
                                                <option value="">MERCABAL</option>
                                            </select>
                                        </div>
                                    </div>
                       
                        <input type="password" class="form-control f-center" placeholder="Contraseña">
                        <button class="btn color-button">Registrar</button>
                        </form>  
                    </div>
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
    background-image: -moz-linear-gradient(0deg, #494f9b 0%, #707ae5 100%);
    background-image: -webkit-linear-gradient(0deg, #494f9b 0%, #707ae5 100%);
    background-image: -ms-linear-gradient(0deg, #494f9b 0%, #707ae5 100%);
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