@extends('layouts.base')

@section('title', 'Detalle Cliente')
    
@section('content')

    <style>
        /*---Botones de acciones tabla index ---*/
        .btn-img{
            /*Reduce el tamaño de las imagenes de los botones*/
            width: 25px;
        }
        /*---   Fin Botnes   ---*/

        /*---   Migas de Pan   ---*/
        .migasPan{
            color: rgb(155, 155, 155);
        }
            .migasPan a{
                text-decoration: none;
                color: rgb(155, 155, 155);
            }
            .migasPan a:hover{
                color: rgb(20, 94, 30);
            }
        /*---   Fin Migas de Pan   ---*/
    </style>

    <br>

    <div class="migasPan">
        <a href="/clientes">
            Clientes
        </a>
        >
        <a href="/clientes">
            Detalle {{$cliente->nombre_cliente}}
        </a>
    </div>
    <br>
            
    <div class="shadow-lg p-3 mb-3 bg-body rounded border border-2 border-success">
        <div class="row">
            <div class="col-sm-4">
                <img src="{{ asset('img/clientes/' . $cliente->logo_cliente) }}" alt="Logo Cliente" style="width: 250px">
            </div>
        
            <div class="col-sm-8">
                <p class="h3">{{ $cliente->nombre_cliente }}</p>
                <hr>
                
                <p class="h5">{{ $cliente->direccion_cliente }}</p>
                <p class="h5">Telefono - {{ $cliente->telefono_cliente }}</p>
                <p class="h5 mb-4">{{ $cliente->correo_cliente }}</p> 
                
                <form class="delete d-line" action="/clientes/{{$cliente->id}}" method="POST">
                    @method('DELETE')
                    @csrf
    
                    @if (Auth::user()->rol == 1 || Auth::user()->rol == 2)                  
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                        <a href="/clientes/{{$cliente->id}}/edit" class="btn btn-outline-warning">Modificar</a>  
                    @endif                   
                    
                    <a href="/clientes" class="btn btn-outline-primary">Regresar</a>
                </form>               
            </div>                       
        </div>
    </div>   
    
    <!--Boton para crear troquel-->
    @if (Auth::user()->rol == 1)
        <a href="/troqueles/create" class="btn btn-success float-start m-1">Nuevo Troquel</a>
        <br>
    @endif

    <table class="table caption-top">
        <caption>Troqueles de {{$cliente->nombre_cliente}}</caption>        
    </table>

    <div class="shadow-lg p-3 mb-3 bg-body rounded border border-2 border-success">
        <!--Listado de troqueles del cliente-->
        <table class="table table-sm table-hover">
            <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tamaño</th>
                <th scope="col">Valor</th>
                <th scope="col">Estado</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($troquelesCliente as $troquelCliente)
                    <tr>
                        <th scope="row">{{$troquelCliente->id}}</th>
                        <td>{{$troquelCliente->tipotroquel->tipo_troquel}}</td>
                        <td>{{$troquelCliente->tipotroquel->valor_troquel}}</td>
                        <td>{{$troquelCliente->estado->nombre_estado}}</td>
                        <td>
                            <a href="/troqueles/{{$troquelCliente->id}}" class="btn btn-outline-light btn-sm">
                                <img src="{{asset('img/icons/eye.png')}}" alt="Ver" class="btn-img">
                            </a>

                            @if (Auth::user()->rol == 1 || Auth::user()->rol == 2)                            
                                <a href="/troqueles/{{$troquelCliente->id}}/edit" class="btn btn-outline-light btn-sm">
                                    <img src="{{asset('img/icons/refresh-cw.png')}}" alt="Editar" class="btn-img">
                                </a>

                                <form class="delete d-line" action="/troqueles/{{$troquelCliente->id}}" method="POST" style="display: inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-light btn-sm">
                                        <img src="{{asset('img/icons/trash-2.png')}}" alt="Eliminar" class="btn-img">
                                    </button>
                                </form>
                            @endif                         
                        </td>
                    </tr>                
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection
