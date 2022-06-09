<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administração E-Portal Shop</title>
    
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('fontawesome/css/all.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/layoutadmin.css')}}">
    
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/layoutadmin.js')}}"></script>
    
</head>
<body>  
    <header>
       
        <div id="HeaderPortal">
            <figure>
                <a href="{{route('admin')}}"><img src="{{asset('img/logo.png')}}" alt="#"></a>
            </figure>
            @include('includes.admin.nav')   
        </div>
    </header> 
    
