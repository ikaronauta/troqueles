@extends('layouts.base')

@section('title', 'Editar CLiente')
    
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
            Listado de Clientes
        </a>
        > 
        <a href="/clientes">
            Editar Cliente
        </a>
    </div> 
    
    <p><b>*</b>Obligatorio</p>

    <div class="shadow-lg p-3 mb-5 bg-body rounded border border-2 border-success">
        <form action="/clientes/{{$cliente->id}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
    
            <!--Primera fila del formulario-->
            <div class="row mb-4">
                <!--Columna 1-->
                <div class="col">
                    <label for="tipoDocumento" class="form-label"><b>*</b>Tipo de Documento</label>
                    <select class="form-control" name="tipoDocumento" id="tipoDocumento">
                        @foreach($tipoDocumentos as $tipoDocumento)
                            <option value="{{ $tipoDocumento->id }}" @if ($tipoDocumento->id == $cliente->tipo_documento) selected @endif>
                                {{ $tipoDocumento->tipo_documento }}                      
                            </option>
                        @endforeach
                    </select>
                </div>
    
                <!--Columna 2-->
                <div class="col">
                    <label for="numeroDocumento" class="form-label"><b>*</b>Número de Documento</label>
                    <input type="number" class="form-control" id="numeroDocumento" name="numeroDocumento" value="{{ $cliente->documento_cliente}}">
                    @error('numeroDocumento')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                
                <!--Columna 3-->
                <div class="col">
                    <label for="nombre" class="form-label"><b>*</b>Nombre Cliente ó Negocio</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $cliente->nombre_cliente }}">
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
                            <option value="{{ $municipio->id }}" @if ($municipio->id == $cliente->municipio_cliente) selected @endif>                          
                                {{ $municipio->nombre_municipio }}
                            </option>
                        @endforeach
                    </select>
                </div>
    
                <!--Columna 2-->
                <div class="col">
                    <label for="telefono" class="form-label"><b>*</b>Telefono</label>
                    <input type="number" class="form-control" id="telefono" name="telefono" value="{{ $cliente->telefono_cliente }}">
                    @error('telefono')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
    
                <!--Columna 3-->
                <div class="col">
                    <label for="direccion" class="form-label"><b>*</b>Dirección</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $cliente->direccion_cliente }}">
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
                    <input type="text" class="form-control" id="correo" name="correo" value="{{ $cliente->correo_cliente }}">
                    @error('correo')
                        <small>{{ $message }}</small>
                    @enderror
                </div> 
                
                <!--Columna 2-->
                <div class="col">
                    <label for="logo" class="form-label">Logotipo</label>
                    <input type="file" name="logo" id="logo" class="form-control">
                    @error('logo')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
            </div>
    
            <div class="row mb">
                <div class="col"></div>
    
                <div class="col-auto">
                    <button class="btn btn-success btn-lg" type="submit">Actualizar</button>
                    <a href="/clientes" class="btn btn-dark btn-lg">Cancelar</a>
                    
                </div>
    
                <div class="col"></div>
            </div>
        </form>
    </div>
@endsection