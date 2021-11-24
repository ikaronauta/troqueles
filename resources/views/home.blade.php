@extends('layouts.base')

@section('title', 'Home')

@section('content')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <div class="container">

        <style>
            
            #home{
                line-height : 45px;
                font-size: 20px;
                margin-top: 30px;
            }
            #content{
                padding-top: 30px;
            }
            #ibyx{
                line-height : 62px;
                font-size: 40px;
                text-align: justify;
            }
            body{
                background-color: azure;
            }
            #italic{
                font-style: italic;
                color: black;
            }
            #italic a{
                text-decoration: none;
            }
            .links-marco{
                color: rgb(12, 12, 12);
            }
            #link-home-uno{
                background-color: rgb(79, 206, 206);
            }
            #link-home-uno:hover{
                background-color: #198754;
                color: white;
            }
            #link-home-dos{
                background-color: rgb(180, 202, 80);
            }
            #link-home-dos:hover{
                background-color: #198754;
                color: white;
            }
            #link-home-tres{
                background-color: rgb(209, 125, 123);
            }
            #link-home-tres:hover{
                background-color: #198754;
                color: white;
            }
            #ibyx{
                color: gray;
                font-size: small;
                margin-bottom: 2px;
            }
        </style>
        <br>

        <div class="migasPan">
            <a href="/" id="active">
                Pagina de Inicio
            </a>
        </div>
        
        <div class="row links-marco">
            <div class="col p-4 m-4 fs-3 border border-dark border-2 rounded shadow" id="link-home-uno">
                <div class="row">
                    <div class="col-8">                        
                        <img src="{{asset('img/icons/users.png')}}" alt="" style="width: 35px">
                        Usuarios                        
                    </div>
                    
                </div>                
            </div>
            <div class="col p-4 m-4 fs-3 border border-dark border-2 rounded shadow" id="link-home-dos">
                <div class="row">
                    <div class="col-8">
                        <img src="{{asset('img/icons/star.png')}}" alt="" style="width: 30px">
                        Clientes                        
                    </div>
                    
                </div>
            </div>
            <div class="col p-4 m-4 fs-3 border border-dark border-2 rounded shadow" id="link-home-tres">
                <div class="row">
                    <div class="col-8">                      
                        <img src="{{asset('img/icons/codesandbox.png')}}" alt="" style="width: 30px">
                        Troqueles
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="shadow-lg p-3 mb-5 bg-body rounded border mt-3">
            <h1 class="text-center">Bienvenidos</h1>

            <div class="row">
                <div class="col-5 p-3">
                    <img src="{{asset('img/social-media.png')}}" alt="" style="width: 100%">
                </div>

                <div class="col">
                    <p class="p-4" id="home">
                        El presente Sistema de Información titulado SISTMA DE REGISTRO Y CONTROL 
                        FABRICA DE TROQUELES JC, tiene como finalidad facilitar la gestión 
                        operativa de la empresa, agilizando los procesos de registro y control
                        en la etapa de produccion.                         
                    </p>
                </div>
            </div>           
        </div>

        <div class="row">
            <div class="col">
                <p class="p-4" id="home">
                    Con esta herramienta se pretende aumentar la productividad de 
                    la empresa, brindando una interfaz intuitiva para los usuarios, 
                    permitiendo gestionar la información de una manera más eficiente.
                </p>
            </div>

            <div class="col-5 p-3">
                <img src="{{asset('img/laptop.png')}}" alt="" style="width: 75%">
            </div>
        </div>

        
          
        <a href="https//ibyx.com.co">
            <img src="{{asset('img/ibyx.png')}}" alt="">
        </a>         
        
    </div>    
    
@endsection
