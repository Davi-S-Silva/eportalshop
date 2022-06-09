<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Portal Shop - Portal de Notícias, Entretenimento e Compras oline</title>
    
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('fontawesome/css/all.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
    
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/layout.js')}}"></script>
    
    <link href="{{asset('jcarousel/style_jcarousel.css')}}" rel="stylesheet">
    <link href="{{asset('jcarousel/jcarousel.connected-carousels.css')}}" rel="stylesheet">
    <link href="{{asset('jcarousel/jcarousel.responsive.css')}}" rel="stylesheet">
    <script src="{{asset('jcarousel/jquery.jcarousel.min.js')}}"></script> 
    <script src="{{asset('jcarousel/jcarousel.connected-carousels.js')}}"></script>
    <script src="{{asset('jcarousel/jcarousel.responsive.js')}}"></script>
</head>
<body>  
    <header>
        <div id="TopoHeaderPortal">
            <form action="" method="post">
                <div>
                    <select name="Loja" id="">
                        <option value="">Nome da Loja</option>
                        <option value="Loja1">Loja 1</option>
                        <option value="Loja2">Loja 2</option>
                    </select>
                </div>    
                {{-- <div>
                    <select name="SegmentoLoja" id="">
                        <option value="">Segmento da Loja</option>
                        <option value="Loja1">Roupas, Calcados e acessorios</option>
                        <option value="Loja2">Loja 2</option>
                    </select>
                </div>   --}}
               
            </form>   
            <div>
                <a href="{{route('portallojista')}}"> <i class="fa-solid fa-lock"> </i>  Portal do Lojista </a>
                <a href="{{route('portalcliente')}}"> <i class="fa-solid fa-lock"> </i>  Portal do Cliente </a>
            </div>  
        </div>  
        <div id="HeaderPortal">
            <figure>
                <a href="{{route('home')}}"><img src="{{asset('img/logo.png')}}" alt="#"></a>
            </figure>
            @include('includes.nav')   
        </div>
    </header> 
    
