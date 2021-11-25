<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">

    <title>TroquelesJC | Login</title>
  </head>
  <body>

    <style>
        b{
            color: red;
        }
        #ibyx{
            color: gray;
            font-size: small;
            margin-bottom: 2px;
        }
    </style>

    <div class="container mt-5">
        <div class="row m-3 p-0">
            <div class="col"></div>
            <div class="m-0 p-0">
                <a class="navbar-brand text-dark fs-2 m-0 p-0" href="/">
                    <p class="text-center m-0 p-0">
                        <img src="{{asset('img/favicon.ico')}}" alt="TroquelesJC" class="d-inline-block align-text-top m-0 p-0">
                        Troqueles<b class="fs-1">JC</b>
                    </p>                    
                </a>
            </div>
            <div class="col"></div>
        </div>
    </div>
 
    <div class="row">
        <div class="col"></div>
        
        <div class="border border-3 rounded shadow-lg p-3 mb-4 bg-body" style="width: 400px">
            <div class="bg-success p-3 rounded">
                <table class="table caption-top center">
                    <caption>
                        <p class="text-center text-light">Inicio de Sesión</p>
                    </caption>        
                </table>
    
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="usaername" class="text-light">Nombre de Usuario</label>
                        <input type="text" name="username" class="form-control" id="username"required>
                        @error('username')
                            <small>{{$message}}</small>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="password" class="text-light">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                        @error('password')
                            <small>{{$message}}</small>
                        @enderror
                    </div>
            
                    <br>
                    <button type="submit" class="btn btn-dark">Ingresar</button>
                </form>
            </div>          
        </div>

        <div class="col"></div>
    </div>
<!--
    <a href="{{ route('register') }}">
        <p class="text-center">Registrar</p>
    </a>
-->
    <p class="text-center m-0" id="ibyx">
        Sistema desarrollado por IbyX Technology - 2021
    </p>
    <!--
    <a href="{{ route('password.request') }}">
        <p class="text-center">Reestablecer contraseña</p>        
    </a>-->
    

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


