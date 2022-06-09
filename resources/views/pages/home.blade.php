@extends('includes.main')

@section('content')
<div class="local_slider">
    <div class="wrapper">
       <div class="connected-carousels">
            <div class="stage">
                <div class="carousel carousel-stage">
                    <ul>
                        <li><a href="pagina da promocao"><img src="{{asset('img/jcarousel_slider/img1.jpg')}}" alt=""></a></li>
                        <li><img src="{{asset('img/jcarousel_slider/img2.jpg')}}" alt=""></li>
                        <li><img src="{{asset('img/jcarousel_slider/img3.png')}}" alt=""></li>
                        <li><img src="{{asset('img/jcarousel_slider/img1.jpg')}}" alt=""></li>
                        <li><img src="{{asset('img/jcarousel_slider/img2.jpg')}}" alt=""></li>
                        <li><img src="{{asset('img/jcarousel_slider/img3.png')}}" alt=""></li>
                    </ul>
                </div>
                <a href="#" class="prev prev-stage"><span>&lsaquo;</span></a>
                <a href="#" class="next next-stage"><span>&rsaquo;</span></a>
            </div>

            <!-- <div class="navigation">
                <a href="#" class="prev prev-navigation">&lsaquo;</a>
                <a href="#" class="next next-navigation">&rsaquo;</a>
                <div class="carousel carousel-navigation">
                    <ul>
                        <li><img src="templatePortal/imagens/jcarousel_slider/img1.jpg" width="50" height="50" alt=""></li>
                        <li><img src="templatePortal/imagens/jcarousel_slider/img2.jpg" width="50" height="50" alt=""></li>
                        <li><img src="templatePortal/imagens/jcarousel_slider/img3.png" width="50" height="50" alt=""></li>
                        <li><img src="templatePortal/imagens/jcarousel_slider/img1.jpg" width="50" height="50" alt=""></li>
                        <li><img src="templatePortal/imagens/jcarousel_slider/img2.jpg" width="50" height="50" alt=""></li>
                        <li><img src="templatePortal/imagens/jcarousel_slider/img3.png" width="50" height="50" alt=""></li>
                    </ul>
                </div>
            </div> -->
        </div>
    </div>
</div><!-- local_slider -->
@endsection