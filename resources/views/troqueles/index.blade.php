@extends('layouts.base')

@section('title', 'Troqueles')

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
    <!--Mensaje Confirmacion-->
    @if (session('status'))
        <div class="alert alert-success">  
            {{ session('status') }}
        </div>
    @endif

    <div class="migasPan mb-3">
        <a href="/clientes">
            Listado de Troqueles
        </a> 
    </div>

    @if (Auth::user()->rol == 1 || Auth::user()->rol == 2)
        <a href="/troqueles/create" class="btn btn-success m-1">Nuevo Troquel</a>
        <br> 
    @endif

    <div class="shadow-lg p-3 mb-5 bg-body rounded border border-2 border-success">
        <table class="table table-hover">
            <thead class="bg-success text-light">
              <tr>
                <th scope="col">Cliente</th>
                <th scope="col">Troquel</th>
                <th scope="col">Valor</th>
                <th scope="col">Estado</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody> 
                @foreach ($troqueles as $troquel)
                    <tr>
                        <th scope="row">{{$troquel->cliente->nombre_cliente}}</th>
                        <td>{{$troquel->tipotroquel->tipo_troquel}}</td>
                        <td>{{$troquel->tipotroquel->valor_troquel}}</td>
                        <td><b>{{$troquel->estado->nombre_estado}}</b></td>
                        <td>
                            <a href="/troqueles/{{$troquel->id}}" class="btn btn-outline-light btn-sm">
                                <img src="{{asset('img/icons/eye.png')}}" alt="Ver" class="btn-img">
                            </a>
    
                            @if (Auth::user()->rol == 1 || Auth::user()->rol == 2)
                                <a href="/troqueles/{{$troquel->id}}/edit" class="btn btn-outline-light btn-sm">
                                    <img src="{{asset('img/icons/refresh-cw.png')}}" alt="Editar" class="btn-img">
                                </a>
    
                                <form class="delete d-line" action="/troqueles/{{$troquel->id}}" method="POST" style="display: inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-light btn-sm" onclick="return ConfirmDelete()">
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

    <script>
        function ConfirmDelete()
        {
            var respuesta = confirm("¿Está seguro de querer eliminar este registro?");

            if (respuesta == true) 
            {
                return true;  
            }
            else
            {
                return false;
            }
        }
    </script>
      
@endsection
