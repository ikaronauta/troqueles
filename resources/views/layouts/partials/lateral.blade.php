<style>
        b, small{
        color: red;
    }
    html, body {  
        margin:0px;  
        height:100%;  
    }

    #row{
        height: 100%;
    }

    #lateral{
        background-color: rgb(131, 192, 131);
    }

    li{
        list-style: none;
    }

    #hov:hover{
        background-color: #198754 ;
    }

    #fixed-top{
        width: 15%;
        padding-top: 50px;
    }

    #content{
        padding-top: 30px;
    }

    body{
        background-color: azure;
    }
</style>

<div class="fixed-top m-2" id="fixed-top">
    <!--Inicio-->
    <li class="nav-item rounded" id="hov">
        <a class="nav-link text-light fs-4 mt-md-5" href="/">
        <img src="{{asset('img/icons/home.png')}}" alt="" style="width: 40px">
        Inicio
        </a>
    </li>
    <hr>

    @if (Auth::user()->rol == 1)
        <!--Usuarios-->
        <li class="nav-item rounded dropdown mt-4" id="hov">
            <a class="nav-link dropdown-toggle text-light fs-4" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{asset('img/icons/usuario.png')}}" alt="" style="width: 40px">
            Usuarios
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/usuarios">Listado Usuarios</a></li>
            <li><a class="dropdown-item" href="/usuarios/create">Nuevo Usuario</a></li>
            </ul>
        </li>      
    @endif

    <!--Clientes-->
    <li class="nav-item rounded dropdown mt-4" id="hov">
        <a class="nav-link dropdown-toggle text-light fs-4" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{asset('img/icons/clientes-all.png')}}" alt="" style="width: 40px">
            Clientes
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/clientes">Listado Clientes</a></li>
            @if (Auth::user()->rol == 1 || Auth::user()->rol == 2)
                <li><a class="dropdown-item" href="/clientes/create">Nuevo CLiente</a></li>
            @endif
        </ul>
    </li>

    <!--Troqueles-->
    <li class="nav-item rounded dropdown mt-4" id="hov">
        <a class="nav-link dropdown-toggle text-light fs-4" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{asset('img/icons/troquel.png')}}" alt="" style="width: 40px">
            Troqueles
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Litado Troqueles</a></li>
            @if (Auth::user()->rol == 1 || Auth::user()->rol == 2)
                <li><a class="dropdown-item" href="/troqueles/create">Nuevo Troquel</a></li>              
            @endif
        </ul>
    </li>

    <!--Manuales-->
    <li class="nav-item rounded dropdown mt-4" id="hov">
        <a class="nav-link dropdown-toggle text-light fs-4" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="{{asset('img/icons/manual.png')}}" alt="" style="width: 40px">
        Manuales
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{asset('doc/Manual_Usuario.pdf')}}">Manual de Usuario</a></li>
            @if (Auth::user()->rol == 1 || Auth::user()->rol == 2)
              <li><a class="dropdown-item" href="/troqueles/create">Manual Tecnico</a></li>              
            @endif
        </ul>
    </li>
</div>