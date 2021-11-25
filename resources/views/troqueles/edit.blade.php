@extends('layouts.base')

@section('title', 'Editar Troquel')
    
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

        /*---   Formulario   ---*/
        #hov:hover{
            background-color: #198754 ;
        }

        #form{
            background-color: rgb(205, 236, 227);
        }

        #form:hover{
            background-color: rgb(131, 192, 131) ;
            color: white;
        }

        #home{
            line-height : 45px;
            font-size: 20px;
            margin-top: 30px;
        }
        /*---   Fin Formulario   ---*/
    </style>

    <br>
    <div class="migasPan mb-3">
        <a href="/troqueles">
            Listado de Troqueles
        </a>
        >         
        Editar Troquel {{$troquel->tipoTroquel->tipo_troquel}}     
    </div>

    <p><b>*</b>Obligatorio</p>

    <div class="shadow-lg p-3 mb-5 bg-body rounded border border-2 border-success">
        <form action="/troqueles/{{$troquel->id}}" method="post" enctype="multipart/form-data" class="p-3 rounded border border-1 border-success" id="form">
            @method('put')
            @csrf
    
            <!--Primera fila del formulario-->
            <div class="row mb-4">
                <!--Columna 1-->
                <div class="col">
                    <label for="cliente" class="form-label"><b>*</b>Cliente</label>
                    <select class="form-control" name="cliente" id="cliente">
                        @foreach($clientes as $cliente)
                            <option value="{{ $cliente->id }}" @if ($cliente->id == $troquel->cliente_id) selected @endif>
                                {{ $cliente->nombre_cliente }}
                            </option>
                        @endforeach
                    </select>
                </div>
    
                <!--Columna 2-->
                <div class="col">
                    <label for="tipoTroquel" class="form-label"><b>*</b>Tipo de Troquel</label>
                    <select class="form-control" name="tipoTroquel" id="tipoTroquel">
                        @foreach($tipoTroqueles as $tipoTroquel)
                            <option value="{{ $tipoTroquel->id }}">{{ $tipoTroquel->tipo_troquel }}</option>
                        @endforeach
                    </select>
                </div>
    
                <!--Columna 3-->
                <div class="col">
                    <label for="estado" class="form-label"><b>*</b>Estado del Troquel</label>
                    <select class="form-control" name="estado" id="estado">
                        @foreach($estados as $estado)
                            <option value="{{ $estado->id }}">{{ $estado->nombre_estado }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="row mt-5">
                    <div class="col"></div>
        
                    <div class="col-auto">
                        <button class="btn btn-success btn-lg" type="submit">Guardar</button>
                        <a href="/troqueles" class="btn btn-dark btn-lg">Cancelar</a>    
                    </div>
        
                    <div class="col"></div>
                </div>
            </div>       
        </form>
    </div>
@endsection