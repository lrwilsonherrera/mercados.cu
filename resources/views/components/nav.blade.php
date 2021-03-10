<div class="main-menu f-right d-none d-lg-block">
    <nav>               
        <ul id="navigation"> 
            @if ($type == 'inicio')
                <li><a class="page-scroll" @if ($menu == 'inicio') style="color: #136689"; @endif href="{{ url('/') }}#page-top" >Inicio</a></li>
                <li><a class="page-scroll" @if ($menu == 'bulevar') style="color: #136689"; @endif href="{{ url('/') }}#bulevar">Bulevar</a></li>
                <li><a class="page-scroll" @if ($menu == 'entrar') style="color: #136689";  @endif href="{{ route('login') }}">Entrar</a></li>
                <li><a class="page-scroll" @if ($menu == 'registrarse') style="color: #136689"; @endif href="{{ route('register') }}">Registrarse</a></li>
            @elseif($type == 'tiendas')
                <li><a class="page-scroll" @if($menu == 'unitienda') style="color: #136689"; @endif href="{{ route('unitiendas') }}">UNITIENDAS</a></li>
                <li><a class="page-scroll" @if($menu == 'servitienda') style="color: #136689"; @endif href="{{ route('servitienda') }}">SERVITIENDAS</a></li>
                <li><a class="page-scroll" @if($menu == 'mercabal') style="color: #136689"; @endif href="{{ route('mercabal') }}">MERCABAL</a></li>
                <li><a class="page-scroll " @if($menu == 'bodegas') style="color: #136689"; @endif href="{{ route('bodegas') }}">BODEGAS</a></li>
                <li><a class="page-scroll" @if($menu == 'ensucasa') style="color: #136689"; @endif href="{{ route('ensucasa') }}">ENSUCASA</a></li>
                <li><a class="page-scroll" @if ($menu == 'entrar') style="color: #136689";  @endif href="{{ route('login') }}">ENTRAR</a></li>
                <li><a class="page-scroll" @if ($menu == 'registrarse') style="color: #136689"; @endif href="{{ route('register') }}">REGISTRARSE</a></li>
            @endif   
                
        </ul>
    </nav>
</div>