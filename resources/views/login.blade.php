@extends('layouts.main')

@section('title', 'Entrar')

@php
    $menu = 'login';
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
<!-- Section Entrar
================================================== -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"><b>Autenticarse</b></h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div id="registro" class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                 <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="regularform">
                        <div class="done">
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                Mensajes de error.
                            </div>
                        </div>
                        <div class="contact-form" style="height: auto">
                            <div class="col-lg-12"><input type="email" name="email" placeholder="Correo *" required></div>
                            <div class="col-lg-12"><input type="password" name="password" placeholder="Contraseña *" required></div>
                            <div class="col-lg-12"><input class="bg-primary" type="submit" value="Entrar"></div>
                            <!--</div>-->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection