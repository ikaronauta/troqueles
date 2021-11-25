@extends('layouts.base')

@section('title', 'Usuarios')

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
            Listado de Usuarios
        </a> 
    </div>

    @if (Auth::user()->rol == 1)
        <a href="#" class="btn btn-success m-1">Nuevo Usuario</a>        
    @endif

    <div class="shadow-lg p-3 mb-5 bg-body rounded border border-2 border-success">
        <table class="table table-hover">
            <thead class="bg-success text-light">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Nombres</th>
                <th scope="col">E-mail</th>
                <th scope="col">Rol</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <th scope="row">{{$usuario->id}}</th>
                        <td>{{$usuario->username}}</td>
                        <td>{{$usuario->name}}</td>
                        <td>{{$usuario->email}}</td>
                        @if ($usuario->rol == 1)
                            <td>Administrador</td>
                        @endif 

                        @if ($usuario->rol == 2)
                            <td>Empleado</td>  
                        @endif                       
                        
                        @if ($usuario->rol == 3)
                            <td>Invitado</td>
                        @endif
                            
                        <td style="width: 160px">
                            <a href="/clientes/" class="btn btn-outline-light btn-sm">
                                <img src="{{asset('img/icons/eye.png')}}" alt="Ver" class="btn-img">
                            </a>
    
                            @if (Auth::user()->rol == 1 || Auth::user()->rol == 2)
                                <a href="/clientes/" class="btn btn-outline-light btn-sm">
                                    <img src="{{asset('img/icons/refresh-cw.png')}}" alt="Editar" class="btn-img">
                                </a>
    
                                <form class="delete d-line" action="/clientes/" method="POST" style="display: inline">
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
