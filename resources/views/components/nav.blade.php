<div class="main-menu f-right d-none d-lg-block">
    <nav>               
        <ul id="navigation"> 
            @if ($type == 'inicio')
                <li><a class="page-scroll" @if ($menu == 'inicio') style="color: #136689"; @endif href="#page-top">Inicio</a></li>
                <li><a class="page-scroll" @if ($menu == 'bulevar') style="color: #136689"; @endif href="#bulevar">Bulevar</a></li>
                <li><a class="page-scroll" @if ($menu == 'entrar') style="color: #136689"; @endif href="entrar.html">Entrar</a></li>
                <li><a class="page-scroll" @if ($menu == 'registrarse') style="color: #136689"; @endif href="registrarse.html">Registrarse</a>
            @elseif($type == 'tiendas')
                <li><a class="page-scroll" @if($menu == 'unitienda') style="color: #136689"; @endif href="{{ route('unitiendas') }}">UNITIENDAS</a></li>
                <li><a class="page-scroll" @if($menu == 'servitienda') style="color: #136689"; @endif href="{{ route('servitienda') }}">SERVITIENDAS</a></li>
                <li><a class="page-scroll" @if($menu == 'mercabal') style="color: #136689"; @endif href="{{ route('mercabal') }}">MERCABAL</a></li>
                <li><a class="page-scroll " @if($menu == 'bodegas') style="color: #136689"; @endif href="{{ route('bodegas') }}">BODEGAS</a>
                <li><a class="page-scroll" href="https://ensucasa.comerciogtm.co.cu">ENSUCASA</a>
            @endif   
                
        </ul>
    </nav>
</div>