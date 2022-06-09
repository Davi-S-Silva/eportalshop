@extends('includes.main')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('img/jcarousel_slider/img4.jpeg')}}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('img/jcarousel_slider/img4.jpeg')}}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('img/jcarousel_slider/img4.jpeg')}}" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<div id="LojasHome">
    <h1><i class="fa-solid fa-bag-shopping"></i> Lojas</h1>
    <div id="CategoriaLojas">
        <div class="categorias_lojas_home">
            <a href="">
                <figure>
                    <img src="{{asset('img/jcarousel_slider/img4.jpeg')}}" alt="">
                    <figcaption>Roupas, Calçados e Acessórios</figcaption>
                </figure>
            </a>
        </div>
        <div class="categorias_lojas_home">
            <a href="">
                <figure>
                    <img src="{{asset('img/jcarousel_slider/img3.png')}}" alt="">
                    <figcaption>Mercearia, Kitanda e Depósito</figcaption>
                </figure>
            </a>
        </div>
        <div class="categorias_lojas_home">
            <a href="">
                <figure>
                    <img src="{{asset('img/jcarousel_slider/img1.jpg')}}" alt="">
                    <figcaption>Lanchonete, Pizzaria e Restaurante</figcaption>
                </figure>
            </a>
        </div>
        <div class="categorias_lojas_home">
            <a href="">
                <figure>
                    <img src="{{asset('img/jcarousel_slider/img2.jpg')}}" alt="">
                    <figcaption>Lanchonete, Pizzaria e Restaurante</figcaption>
                </figure>
            </a>
        </div>
    </div>
</div>

<div id="ServicosHome">
    <h1><i class="fa-solid fa-wrench"></i> Serviços</h1>
    <div id="CategoriaServicos">
        <div class="categorias_servicos_home">
            <a href="">
                <figure>
                    <img src="{{asset('img/jcarousel_slider/img4.jpeg')}}" alt="">
                    <figcaption>Montagens de Moveis</figcaption>
                </figure>
            </a>
        </div>
        <div class="categorias_servicos_home">
            <a href="">
                <figure>
                    <img src="{{asset('img/jcarousel_slider/img3.png')}}" alt="">
                    <figcaption>Reformas e Construções</figcaption>
                </figure>
            </a>
        </div>
        <div class="categorias_servicos_home">
            <a href="">
                <figure>
                    <img src="{{asset('img/jcarousel_slider/img1.jpg')}}" alt="">
                    <figcaption>Gráfica</figcaption>
                </figure>
            </a>
        </div>
        <div class="categorias_servicos_home">
            <a href="">
                <figure>
                    <img src="{{asset('img/jcarousel_slider/img2.jpg')}}" alt="">
                    <figcaption>Provedor de Internet</figcaption>
                </figure>
            </a>
        </div>
    </div>
</div>
<div id="OfertasDia">
    <h1><i class="fa-solid fa-percent"></i> Ofertas do Dia</h1>
    <div id="OfertasHome">
        <div class="ofertas_home">
            <a href="">
                <figure>
                    <img src="{{asset('img/jcarousel_slider/img2.jpg')}}" alt="">
                    <figcaption>
                        <h2>Loja 2</h2>
                        Compre 1 e leve 2
                    </figcaption>
                </figure>
            </a>
        </div>
        <div class="ofertas_home">
            <a href="">
                <figure>
                    <img src="{{asset('img/jcarousel_slider/img2.jpg')}}" alt="">
                    <figcaption>
                        <h2>Loja 1</h2>
                        Desconto de 20% para as 10 primeiras compras do dia
                    </figcaption>
                </figure>
            </a>
        </div>
        <div class="ofertas_home">
            <a href="">
                <figure>
                    <img src="{{asset('img/jcarousel_slider/img2.jpg')}}" alt="">
                    <figcaption>
                        <h2>Loja 3</h2>
                        Digite MEUDESCONTO10 e ganhe 10% de desconto no seu pedido
                    </figcaption>
                </figure>
            </a>
        </div>
    </div>
</div>
@endsection