<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Portal Shop - Portal de Notícias, Entretenimento e Compras oline</title>
    
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('fontawesome/css/all.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/site1/layout.css')}}">
    
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/site1/layout.js')}}"></script>
    
    <link href="{{asset('jcarousel/style_jcarousel.css')}}" rel="stylesheet">
    <link href="{{asset('jcarousel/jcarousel.connected-carousels.css')}}" rel="stylesheet">
    <link href="{{asset('jcarousel/jcarousel.responsive.css')}}" rel="stylesheet">
    <script src="{{asset('jcarousel/jquery.jcarousel.min.js')}}"></script> 
    <script src="{{asset('jcarousel/jcarousel.connected-carousels.js')}}"></script>
    <script src="{{asset('jcarousel/jcarousel.responsive.js')}}"></script>
</head>
<div class="alinhamento_total_site row col-12 p-0 m-0">
<header class="row col-12 p-0 m-0">
    <div id="TopoHeaderPortal" class="row col-12 p-0 m-0">
       <ul class="row col-12 m-0">
        <li>
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-youtube"></i></a>
        </li>
        <li>
            06 de Novembro de 2022
        </li>
        <li class="pesquisa">
            <i class="fa fa-search icon_busca"></i>
            <form action="" method="post">
                <input type="text" name="BuscarNoSite" id=""> 
                <i class="fa fa-search buscar"></i>                              
            </form>            
        </li>
        <li>
            <a href="{{route('portallojista')}}"> <i class="fa-solid fa-lock"> </i>  Portal do Lojista </a>
            <a href="{{route('portalcliente')}}"> <i class="fa-solid fa-lock"> </i>  Portal do Cliente </a>
        </li>
       </ul> 
    </div>  
    <div id="HeaderPortal" class="row col-12 m-0">
        <figure class="m-0">
            {{-- <p>teste</p> --}}
            <a href="{{route('home')}}"><img src="{{asset('img/logo_eportalshop.png')}}" alt="#"></a>
        </figure>
        @include('includes.site1.nav')   
        <div class="bars">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header> 