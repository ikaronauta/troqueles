@extends('layouts.base')

@section('title', 'Clientes')

@section('content')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">        

    <br>
    <!--Mensaje Confirmacion-->
    @if (session('status'))
        <div class="alert alert-success">  
            {{ session('status') }}
        </div>
    @endif  

    <div class="migasPan mb-3">
        <a href="/clientes">
            Listado de Clientes
        </a> 
    </div>

    <div class="shadow-lg p-3 mb-5 bg-body rounded border border-2 border-success">
        <table class="table table-hover">
            <thead class="bg-success text-light">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Cliente</th>
                <th scope="col">Direccion</th>
                <th scope="col">Telefono</th>
                <th scope="col">E-mail</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <th scope="row">{{$cliente->id}}</th>
                        <td>{{$cliente->nombre_cliente}}</td>
                        <td>{{$cliente->direccion_cliente}}</td>
                        <td>{{$cliente->telefono_cliente}}</td>
                        <td>{{$cliente->correo_cliente}}</td>
                        <td style="width: 160px">
                            <a href="/clientes/{{$cliente->id}}" class="btn btn-outline-light btn-sm">
                                <img src="{{asset('img/icons/eye.png')}}" alt="Ver" class="btn-img">
                            </a>
    

                                <a href="/clientes/{{$cliente->id}}/edit" class="btn btn-outline-light btn-sm">
                                    <img src="{{asset('img/icons/refresh-cw.png')}}" alt="Editar" class="btn-img">
                                </a>
    
                                <form class="delete d-line" action="/clientes/{{$cliente->id}}" method="POST" style="display: inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-light btn-sm boton">
                                        <img src="{{asset('img/icons/trash-2.png')}}" alt="Eliminar" class="btn-img">
                                    </button>
                                </form> 

                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    
          <div>
            {{$clientes->links()}}
          </div>
    </div>
@endsection
