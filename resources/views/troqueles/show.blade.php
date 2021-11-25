@extends('layouts.base')

@section('title', 'Detalle Troquel')
    
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
        <a href="/troqueles">
            Listado de Troqueles
        </a>
        >
        <a href="/clientes">
            Detalle Troquel {{$troquel->tipotroquel->tipo_troquel}}
        </a>
    </div>
    <br>

    <div class="shadow-lg p-3 mb-5 bg-body rounded border border-2 border-success">
        <div class="row">
            <div class="col-sm-4">
                <img src="{{ asset('img/icons/cubo.gif') }}" alt="Logo Cliente" style="width: 125px" class="m-5">
            </div>
        
            <div class="col-sm-8">
                <p class="h3">Troqueles<b>JC</b></p>
                <hr>
                
                <p class="h5">Tipo de troquel: {{$troquel->tipotroquel->tipo_troquel}}</p>
                <p class="h5">Valor: {{$troquel->tipotroquel->valor_troquel}}</p>
                <p class="h5 mb-4">Esatdo: <b>{{$troquel->estado->nombre_estado}}</b></p> 
                
                <form class="delete d-line" action="/troqueles/{{$troquel->id}}" method="POST">
                    @method('DELETE')
                    @csrf
    
                    @if (Auth::user()->rol == 1 || Auth::user()->rol == 2)
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                        <a href="/troqueles/{{$troquel->id}}/edit" class="btn btn-outline-warning">Modificar</a> 
                    @endif
                    
                    <a href="/troqueles" class="btn btn-outline-primary">Regresar</a>
                </form>                   
            </div>                       
        </div>
    </div>
@endsection
