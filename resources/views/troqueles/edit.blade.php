@extends('layouts.base')

@section('title', 'Editar Troquel')
    
@section('content')   
    <br>
    <table class="table caption-top">
        <caption>Editar Troquel {{$troquel->tipoTroquel->tipo_troquel}}</caption>        
    </table>
    <p><b>*</b>Obligatorio</p>

    <div class="shadow-lg p-3 mb-5 bg-body rounded border border-2 border-success">
        <form action="/troqueles/{{$troquel->id}}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
    
            <!--Primera fila del formulario-->
            <div class="row mb-4">
                <!--Columna 1-->
                <div class="col">
                    <label for="cliente" class="form-label"><b>*</b>Cliente</label>
                    <select class="form-control" name="cliente" id="cliente">
                        @foreach($clientes as $cliente)
                            <option value="{{ $cliente->id }}">{{ $cliente->nombre_cliente }}</option>
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