@extends('layouts.base')

@section('title', 'Crear Cliente')
    
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
        <a href="/clientes">
            Nuevo Cliente
        </a>
    </div>            

    <p><b>*</b>Obligatorio</p>

    <div class="shadow-lg p-3 bg-body rounded border border-2 border-success">    
        
        <form action="/clientes" method="post" enctype="multipart/form-data" class="p-3 rounded border border-1 border-success" id="form">    
            @csrf
    
            <!--Primera fila del formulario-->
            <div class="row mb-4">
                <!--Columna 1-->
                <div class="col">
                    <label for="tipoDocumento" class="form-label"><b>*</b>Tipo de Documento</label>
                    <select class="form-control" name="tipoDocumento" id="tipoDocumento">
                        @foreach($tipoDocumentos as $tipoDocumento)
                            <option value="{{ $tipoDocumento->id }}">{{ $tipoDocumento->tipo_documento }}</option>
                        @endforeach
                    </select>
                </div>
    
                <!--Columna 2-->
                <div class="col">
                    <label for="numeroDocumento" class="form-label"><b>*</b>Número de Documento</label>
                    <input type="number" class="form-control" id="numeroDocumento" name="numeroDocumento" value="{{ old('numeroDocumento') }}">
                    @error('numeroDocumento')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                
                <!--Columna 3-->
                <div class="col">
                    <label for="nombre" class="form-label"><b>*</b>Nombre Cliente ó Negocio</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}">
                    @error('nombre')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
            </div>
    
            <!--Segunda fila del formulario-->
            <div class="row mb-4">
                <!--Columna 1-->
                <div class="col">
                    <label for="municipio" class="form-label"><b>*</b>Municipio</label>
                    <select class="form-control" id="municipio" name="municipio">
                        @foreach($municipios as $municipio)
                            <option value="{{ $municipio->id }}">{{ $municipio->nombre_municipio }}</option>
                        @endforeach
                    </select>
                </div>
    
                <!--Columna 2-->
                <div class="col">
                    <label for="telefono" class="form-label"><b>*</b>Telefono</label>
                    <input type="number" class="form-control" id="telefono" name="telefono" value="{{ old('telefono') }}">
                    @error('telefono')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
    
                <!--Columna 3-->
                <div class="col">
                    <label for="direccion" class="form-label"><b>*</b>Dirección</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" value="{{ old('direccion') }}">
                    @error('direccion')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
            </div>
    
            <!--Tercera fila del formulario-->
            <div class="row mb-4">
                <!--Columna 1-->
                <div class="col">
                    <label for="correo" class="form-label"><b>*</b>Correo Electronico</label>
                    <input type="text" class="form-control" id="correo" name="correo" value="{{ old('correo') }}">
                    @error('correo')
                        <small>{{ $message }}</small>
                    @enderror
                </div> 
                
                <!--Columna 2-->
                <div class="col">
                    <label for="logo" class="form-label">Imagen</label>
                    <input type="file" name="logo" id="logo" class="form-control">
                    @error('logo')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
            </div>
    
            <div class="row mb">
                <div class="col"></div>
    
                <div class="col-auto">
                    <button class="btn btn-success btn-lg" type="submit">Guardar</button>
                    <a href="/clientes" class="btn btn-dark btn-lg">Cancelar</a>    
                </div>
    
                <div class="col"></div>
            </div>
        </form>
    </div> 
@endsection