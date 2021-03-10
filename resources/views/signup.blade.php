@extends('layouts.main')

@section('title', 'Registrar')

@section('nav')
    <x-nav :type="'inicio'" :menu="'registrarse'"></x-nav>
@endsection

@section('slider')
    @parent

    
@endsection


@section('content')       
<div  class="favourite-place pt-5 pb-100">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="section-tittle text-center mb-6">                            
                    <h2 class="text-muted mb-0">Registrarse</h2>
                    <br>
                    <div class="d-flex align-items-center flex-column" >
                        <form class="formulario">
                            <div class="form-group"><input type="text" maxlength="45" class="form-control" placeholder="Nombre" required></div>
                            <div class="form-group"><input type="text" maxlength="45" class="form-control" placeholder="Apellidos" required></div>
                            <div class="form-group"><input type="text" maxlength="20" class="form-control" placeholder="Teléfono" required></div>
                            <div class="form-group"><input type="email" maxlength="80" class="form-control" placeholder="Correo electrónico" required></div>
                            <div class="form-group"><input type="password" minlength="8" class="form-control" placeholder="Contraseña" required></div>
                            <div class="form-group"><button class="btn color-button" type="submit">Aceptar</button>  
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
        width: 60%;
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
    
    .sombra {
        box-shadow: 0px 0px 50px rgb(39, 42, 82);
        border-radius: 10px;
        border: none;
    }
</style>
@endsection

