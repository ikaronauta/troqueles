<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title> TroquelesJC | @yield('title')</title>
  </head>
  <body>

    <div class="container">
        <br>
    <div class="migasPan mb-3">
        <a href="/clientes">
            Formulario de registro
        </a>
    </div> 

    <p><b>*</b>Obligatorio</p>

    <div class="shadow-lg p-3 mb-5 bg-body rounded border border-2 border-success p-0">  
            
        <form action="{{ route('register') }}" method="post" class="p-3 rounded border border-1 border-success" id="form">
            @csrf

            <!--Primera fila del formulario-->
            <div class="row ">
                <!--Columna 1-->
                <div class="col">
                    <label for="usaername">Username</label>
                    <input type="text" name="username" class="form-control" id="username" value="{{old('username')}}" required>
                    @error('username')
                        <small>{{$message}}</small>
                    @enderror
                </div>
                
                <!--Columna 2-->
                <div class="col">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}" required>
                    @error('name')
                        <small>{{$message}}</small>
                    @enderror
                </div>
    
                <!--Columna 3-->
                <div class="col">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" value="{{old('email')}}" required>
                    @error('email')
                        <small>{{$message}}</small>
                    @enderror
                </div>
            </div>

            <!--Segunda fila del formulario-->
            <div class="row mb-4">
    
                <!--Columna 1-->
                <div class="col">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                    @error('password')
                        <small>{{$message}}</small>
                    @enderror
                </div>
    
                <!--Columna 2-->
                <div class="col">
                    <label for="rol">Rol</label>
                    <select class="form-control" name="rol" id="rol">
                        <option value="1">Administrador</option>
                        <option value="2">Empleado</option>
                        <option value="3">Invitado</option>
                    </select>
                </div>
            </div>

            <br>
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
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
