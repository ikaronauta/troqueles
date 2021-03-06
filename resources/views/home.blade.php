@extends('layouts.base')

@section('title', 'Home')

@section('content')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <div class="container">

        <style>
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
                color: white;
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
            #perfil{
                width: 100%;
            }
            #tarjeta{
                width: 50%;
                margin-left: 20%;
                margin-top: 10px;
            }            
        </style>
        
        <br>
        <div class="migasPan">
            <a href="/" id="active">
                Pagina de Inicio
            </a>
        </div>
        
        <div class="row links-marco">
            <div class="col p-4 m-4 fs-3 border border-3 rounded shadow" id="link-home-uno">
                <div class="row">
                    <div class="col-8">                        
                        <img src="{{asset('img/icons/user-white.png')}}" alt="" style="width: 30px">
                        Usuarios                        
                    </div>
                    <div class="col-2">
                        {{$usuarios}}
                    </div> 
                </div>                
            </div>
            <div class="col p-4 m-4 fs-3 border border-3 rounded shadow" id="link-home-dos">
                <div class="row">
                    <div class="col-8">
                        <img src="{{asset('img/icons/team-white.png')}}" alt="" style="width: 40px">
                        Clientes                        
                    </div>
                    <div class="col-2">
                        {{$clientes}}
                    </div>                    
                </div>
            </div>
            <div class="col p-4 m-4 fs-3 border border-3 rounded shadow" id="link-home-tres">
                <div class="row">
                    <div class="col-8">                      
                        <img src="{{asset('img/icons/box-white.png')}}" alt="" style="width: 35px">
                        Troqueles
                    </div>
                    <div class="col-2">
                        {{$troqueles}}
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
                        El presente Sistema de Informaci??n titulado SISTMA DE REGISTRO Y CONTROL 
                        FABRICA DE TROQUELES JC, tiene como finalidad facilitar la gesti??n 
                        operativa de la empresa, agilizando los procesos de registro y control
                        en la etapa de producci??n.                         
                    </p>
                </div>
            </div>           
        </div>

        <div class="row">
            <div class="col">
                <p class="p-4" id="home">
                    Con esta herramienta se pretende aumentar la productividad de 
                    la empresa, brindando una interfaz intuitiva para los usuarios, 
                    permitiendo gestionar la informaci??n de una manera m??s eficiente.
                </p>
            </div>

            <div class="col-5 p-3">
                <img src="{{asset('img/laptop.png')}}" alt="" style="width: 75%">
            </div>
        </div> 

        <div class="shadow-lg p-3 mb-5 bg-body rounded border mt-3">

            <div class="row">
                <div class="col-5 p-3">
                    <img src="{{asset('img/perfil-circulo.png')}}" alt="" id="perfil">
                </div>

                <div class="col">
                    <p class="p-4" id="home">
                        Sistema desarrollado por Julian Andres Ortiz, 
                        Programador Junior egresado del Sena en An??lisis 
                        y Desarrollo de Sistemas de Informaci??n.                         
                    </p>
                    <img src="{{asset('img/tarjeta.jpg')}}" alt="Tarjeta Julian Ortiz" id="tarjeta">
                </div>
            </div>           
        </div>
        
                 
        
    </div>    
    
@endsection
