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
{{-- ffim lojas home --}}


<div class="banner_info">
    <div>
        <h1>Entrega ou Retirada</h1>
        <p>Aqui você escolhe o melhor pra você.</p>
    </div>
    <div>
        <h1>Entrega Rápida</h1>
        <p>Confira os locais atendidos.</p>
    </div>
    <div>
        <h1>Atendimento</h1>
        <p>Precisa de ajuda? Entre em contato conosco!</p>
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
{{-- fim servicos home --}}

<div id="OfertasDia">
    <h1><i class="fa-solid fa-percent"></i> Ofertas do Dia</h1>
    <div id="OfertasHome">
        <div class="tipo_loja_oferta">
            <h3>Lanchonete, pizzaria e restaurante</h3>
            <section>
                <div class="ofertas_home">
                
                    <figure>
                        <a href="acaimania/acai-500-ml-15-00"><img src="{{asset('img/jcarousel_slider/img2.jpg')}}" alt=""></a>
                        <figcaption>
                            <a href="acaimania"><h2>Açai mania</h2></a>
                            <a href="acaimania/acai-500-ml-15-00">Açai 500ml</a>
                        </figcaption>
                        <div class="acoes_ofertas_home">
                            <div><i class="fa-solid fa-bag-shopping" title="Adicionar a Sacola"></i></div>
                            <div><i class="fa-solid fa-heart" title="Adicionar a lista de desejos"></i></div>
                            <div><i class="fa-solid fa-eye" title="Saber mais"></i></div>
                        </div>
                        <div class="precos">
                            <div class="atual">R$ 15,00</div>
                            <div class="antigo">R$ 17,00</div>
                        </div>
                    </figure>
                </div>
                <div class="ofertas_home">
                    
                    <figure>
                        <a href="acaimania/acai-500-ml-15-00"><img src="{{asset('img/jcarousel_slider/img2.jpg')}}" alt=""></a>
                        <figcaption>
                            <a href="acaimania"><h2>Açai mania</h2></a>
                            <a href="acaimania/acai-500-ml-15-00">Açai 500ml</a>
                        </figcaption>
                        <div class="acoes_ofertas_home">
                            <div><i class="fa-solid fa-bag-shopping" title="Adicionar a Sacola"></i></div>
                            <div><i class="fa-solid fa-heart" title="Adicionar a lista de desejos"></i></div>
                            <div><i class="fa-solid fa-eye" title="Saber mais"></i></div>
                        </div>
                        <div class="precos">
                            <div class="atual">R$ 15,00</div>
                            <div class="antigo">R$ 17,00</div>
                        </div>
                    </figure>
                </div>
                <div class="ofertas_home">
                        
                    <figure>
                        <a href="acaimania/acai-500-ml-15-00"><img src="{{asset('img/jcarousel_slider/img2.jpg')}}" alt=""></a>
                        <figcaption>
                            <a href="acaimania"><h2>Açai mania</h2></a>
                            <a href="acaimania/acai-500-ml-15-00">Açai 500ml</a>
                        </figcaption>
                        <div class="acoes_ofertas_home">
                            <div><i class="fa-solid fa-bag-shopping" title="Adicionar a Sacola"></i></div>
                            <div><i class="fa-solid fa-heart" title="Adicionar a lista de desejos"></i></div>
                            <div><i class="fa-solid fa-eye" title="Saber mais"></i></div>
                        </div>
                        <div class="precos">
                            <div class="atual">R$ 15,00</div>
                            <div class="antigo">R$ 17,00</div>
                        </div>
                    </figure>
                </div>
                <div class="ofertas_home">
                        
                    <figure>
                        <a href="acaimania/acai-500-ml-15-00"><img src="{{asset('img/jcarousel_slider/img2.jpg')}}" alt=""></a>
                        <figcaption>
                            <a href="acaimania"><h2>Açai mania</h2></a>
                            <a href="acaimania/acai-500-ml-15-00">Açai 500ml</a>
                        </figcaption>
                        <div class="acoes_ofertas_home">
                            <div><i class="fa-solid fa-bag-shopping" title="Adicionar a Sacola"></i></div>
                            <div><i class="fa-solid fa-heart" title="Adicionar a lista de desejos"></i></div>
                            <div><i class="fa-solid fa-eye" title="Saber mais"></i></div>
                        </div>
                        <div class="precos">
                            <div class="atual">R$ 15,00</div>
                            <div class="antigo">R$ 17,00</div>
                        </div>
                    </figure>
                </div>
                
            </section>
            
        </div>
        {{-- fim Lanchonete, pizzaria e restaurante  --}}

        <div class="tipo_loja_oferta">
            <h3>Mercearia, Kitanda e deposito</h3>
            <section>
                <div class="ofertas_home">
                
                    <figure>
                        <a href="acaimania/acai-500-ml-15-00"><img src="{{asset('img/jcarousel_slider/img2.jpg')}}" alt=""></a>
                        <figcaption>
                            <a href="acaimania"><h2>Açai mania</h2></a>
                            <a href="acaimania/acai-500-ml-15-00">Açai 500ml</a>
                        </figcaption>
                        <div class="acoes_ofertas_home">
                            <div><i class="fa-solid fa-bag-shopping" title="Adicionar a Sacola"></i></div>
                            <div><i class="fa-solid fa-heart" title="Adicionar a lista de desejos"></i></div>
                            <div><i class="fa-solid fa-eye" title="Saber mais"></i></div>
                        </div>
                        <div class="precos">
                            <div class="atual">R$ 15,00</div>
                            <div class="antigo">R$ 17,00</div>
                        </div>
                    </figure>
                </div>
                <div class="ofertas_home">
                    
                    <figure>
                        <a href="acaimania/acai-500-ml-15-00"><img src="{{asset('img/jcarousel_slider/img2.jpg')}}" alt=""></a>
                        <figcaption>
                            <a href="acaimania"><h2>Açai mania</h2></a>
                            <a href="acaimania/acai-500-ml-15-00">Açai 500ml</a>
                        </figcaption>
                        <div class="acoes_ofertas_home">
                            <div><i class="fa-solid fa-bag-shopping" title="Adicionar a Sacola"></i></div>
                            <div><i class="fa-solid fa-heart" title="Adicionar a lista de desejos"></i></div>
                            <div><i class="fa-solid fa-eye" title="Saber mais"></i></div>
                        </div>
                        <div class="precos">
                            <div class="atual">R$ 15,00</div>
                            <div class="antigo">R$ 17,00</div>
                        </div>
                    </figure>
                </div>
                <div class="ofertas_home">
                        
                    <figure>
                        <a href="acaimania/acai-500-ml-15-00"><img src="{{asset('img/jcarousel_slider/img2.jpg')}}" alt=""></a>
                        <figcaption>
                            <a href="acaimania"><h2>Açai mania</h2></a>
                            <a href="acaimania/acai-500-ml-15-00">Açai 500ml</a>
                        </figcaption>
                        <div class="acoes_ofertas_home">
                            <div><i class="fa-solid fa-bag-shopping" title="Adicionar a Sacola"></i></div>
                            <div><i class="fa-solid fa-heart" title="Adicionar a lista de desejos"></i></div>
                            <div><i class="fa-solid fa-eye" title="Saber mais"></i></div>
                        </div>
                        <div class="precos">
                            <div class="atual">R$ 15,00</div>
                            <div class="antigo">R$ 17,00</div>
                        </div>
                    </figure>
                </div>
                <div class="ofertas_home">
                        
                    <figure>
                        <a href="acaimania/acai-500-ml-15-00"><img src="{{asset('img/jcarousel_slider/img2.jpg')}}" alt=""></a>
                        <figcaption>
                            <a href="acaimania"><h2>Açai mania</h2></a>
                            <a href="acaimania/acai-500-ml-15-00">Açai 500ml</a>
                        </figcaption>
                        <div class="acoes_ofertas_home">
                            <div><i class="fa-solid fa-bag-shopping" title="Adicionar a Sacola"></i></div>
                            <div><i class="fa-solid fa-heart" title="Adicionar a lista de desejos"></i></div>
                            <div><i class="fa-solid fa-eye" title="Saber mais"></i></div>
                        </div>
                        <div class="precos">
                            <div class="atual">R$ 15,00</div>
                            <div class="antigo">R$ 17,00</div>
                        </div>
                    </figure>
                </div>
                
            </section>
            
        </div>
        {{-- fim Mercearia, Kitanda e deposito  --}}
        <div class="tipo_loja_oferta">
            <h3>Roupas, calçados e acessorios</h3>
            <section>
                <div class="ofertas_home">
                
                    <figure>
                        <a href="acaimania/acai-500-ml-15-00"><img src="{{asset('img/jcarousel_slider/img2.jpg')}}" alt=""></a>
                        <figcaption>
                            <a href="acaimania"><h2>Açai mania</h2></a>
                            <a href="acaimania/acai-500-ml-15-00">Açai 500ml</a>
                        </figcaption>
                        <div class="acoes_ofertas_home">
                            <div><i class="fa-solid fa-bag-shopping" title="Adicionar a Sacola"></i></div>
                            <div><i class="fa-solid fa-heart" title="Adicionar a lista de desejos"></i></div>
                            <div><i class="fa-solid fa-eye" title="Saber mais"></i></div>
                        </div>
                        <div class="precos">
                            <div class="atual">R$ 15,00</div>
                            <div class="antigo">R$ 17,00</div>
                        </div>
                    </figure>
                </div>
                <div class="ofertas_home">
                    
                    <figure>
                        <a href="acaimania/acai-500-ml-15-00"><img src="{{asset('img/jcarousel_slider/img2.jpg')}}" alt=""></a>
                        <figcaption>
                            <a href="acaimania"><h2>Açai mania</h2></a>
                            <a href="acaimania/acai-500-ml-15-00">Açai 500ml</a>
                        </figcaption>
                        <div class="acoes_ofertas_home">
                            <div><i class="fa-solid fa-bag-shopping" title="Adicionar a Sacola"></i></div>
                            <div><i class="fa-solid fa-heart" title="Adicionar a lista de desejos"></i></div>
                            <div><i class="fa-solid fa-eye" title="Saber mais"></i></div>
                        </div>
                        <div class="precos">
                            <div class="atual">R$ 15,00</div>
                            <div class="antigo">R$ 17,00</div>
                        </div>
                    </figure>
                </div>
                <div class="ofertas_home">
                        
                    <figure>
                        <a href="acaimania/acai-500-ml-15-00"><img src="{{asset('img/jcarousel_slider/img2.jpg')}}" alt=""></a>
                        <figcaption>
                            <a href="acaimania"><h2>Açai mania</h2></a>
                            <a href="acaimania/acai-500-ml-15-00">Açai 500ml</a>
                        </figcaption>
                        <div class="acoes_ofertas_home">
                            <div><i class="fa-solid fa-bag-shopping" title="Adicionar a Sacola"></i></div>
                            <div><i class="fa-solid fa-heart" title="Adicionar a lista de desejos"></i></div>
                            <div><i class="fa-solid fa-eye" title="Saber mais"></i></div>
                        </div>
                        <div class="precos">
                            <div class="atual">R$ 15,00</div>
                            <div class="antigo">R$ 17,00</div>
                        </div>
                    </figure>
                </div>
                <div class="ofertas_home">
                        
                    <figure>
                        <a href="acaimania/acai-500-ml-15-00"><img src="{{asset('img/jcarousel_slider/img2.jpg')}}" alt=""></a>
                        <figcaption>
                            <a href="acaimania"><h2>Açai mania</h2></a>
                            <a href="acaimania/acai-500-ml-15-00">Açai 500ml</a>
                        </figcaption>
                        <div class="acoes_ofertas_home">
                            <div><i class="fa-solid fa-bag-shopping" title="Adicionar a Sacola"></i></div>
                            <div><i class="fa-solid fa-heart" title="Adicionar a lista de desejos"></i></div>
                            <div><i class="fa-solid fa-eye" title="Saber mais"></i></div>
                        </div>
                        <div class="precos">
                            <div class="atual">R$ 15,00</div>
                            <div class="antigo">R$ 17,00</div>
                        </div>
                    </figure>
                </div>
                
            </section>
        </div>
        {{-- fim Roupas, calçados e acessorios --}}
    </div>
    {{-- fim ofertas home --}}
</div>
{{-- fim ofertas dia --}}
@endsection