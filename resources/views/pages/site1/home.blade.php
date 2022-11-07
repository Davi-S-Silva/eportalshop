@extends('includes.site1.main')

@section('content')
    <div class="row col-12 m-0 p-0">
        <div class="banner row col-12 m-0 p-0">
            <figure>
                <img src="{{asset('img/modelo-banner-1366-650.jpg')}}" alt="" srcset="">
            </figure>
        </div>

        <section class="areas_parceiros row col-12 p-0">
            @for ($p = 0; $p < 2; $p++)
                <div class="parceiros row col-12 m-0">
                    <h4>Lojas</h4>
                    <div>
                        @for ($i = 0; $i < 4; $i++)
                        <div class="parceiro col-lg-3 col-md-4 col-6">
                            <article>
                                <figure>
                                    <a href="">
                                        <img src="{{asset('img/modelo-parceiro-360-260.jpg')}}" alt="">
                                    </a>
                                </figure>
                            </article>
                        </div>
                        @endfor
                    </div>
                </div>
            @endfor
        </section><!--Fim area parceiros-->

        <section class="area_sessoes_gerais row col-12 m-0 p-0">
            <div class="area_left_sessoes_gerais m-0 p-0">
                <section class="noticias">
                    noticias
                </section>
                <section class="entretenimento">
                    entretenimento
                </section>
                <section class="receitas">
                    receita
                </section>
            </div>
            <aside class="area_right_sessoes_gerais m-0 p-0">
                <section>
                    <header attr="economia">Economia</header>
                    <div class="economia">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <div class="tradingview-widget-copyright"><a href="https://br.tradingview.com/markets/indices/" rel="noopener" target="_blank"><span class="blue-text">Índices</span></a> por TradingView</div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                            {
                            "colorTheme": "light",
                            "dateRange": "12M",
                            "showChart": false,
                            "locale": "br",
                            "largeChartUrl": "",
                            "isTransparent": false,
                            "showSymbolLogo": true,
                            "showFloatingTooltip": false,
                            "width": "350",
                            "height": "300",
                            "tabs": [
                            {
                                "title": "Índices",
                                "symbols": [
                                {
                                    "s": "BINANCE:USDTBRL",
                                    "d": "USD/BRL"
                                },
                                {
                                    "s": "FX_IDC:EURBRX",
                                    "d": "EUR/BRL"
                                },
                                {
                                    "s": "FX_IDC:ARSBRL",
                                    "d": "ASR/BRL"
                                }
                                ],
                                "originalTitle": "Indices"
                            }
                            ]
                        }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                </section>                
                <section>
                    <header class="header_clima">Clima</header>
                    <div class="clima">
                        <div id="cont_faac7f930ad191de068179d4c9d58aca"><script type="text/javascript" async 
                            src="https://www.tempo.com/wid_loader/faac7f930ad191de068179d4c9d58aca"></script></div>
                    </div>
                </section>
                <section>
                    <header>Versiculo do Dia</header>
                    <div class="versiculo">
                        <div id="dailyVersesWrapper"></div>
                        <script async defer src="https://dailyverses.net/get/verse.js?language=arc"></script>
                    </div>
                </section>
                <section>
                    <header>Futebol</header>
                    <div class="futebol">
                        <div>
                            <script src="https://webmasters.onlinebettingacademy.com/assets/js/webmasters.js" data-zapping_type="date" data-lang="br" data-timezone="America/Sao_Paulo" data-width="350" data-widget="zapping" data-color="3b5998|8b9dc3|dfe3ee|f7f7f7|ffffff|333333|5f7ec1|263961|d0d0d0|7b7b7b" type="text/javascript"></script>
                        </div>
                    </div>
                </section>
                <section>
                    <header>Horoscopo</header>
                    <div class="horoscopo">
                        <div>
                            <script async src="//widget.horoscopovirtual.com.br/js/horoscopo.js?background=ffffff&color=050a30&border=ffffff&text=050a30&font=arial"></script>
                        </div>
                    </div>
                </section>
            </aside>
        </section><!--fim area sessoes gerais-->

    </div><!--Fim da class que alinha a pagina de conteudo-->
@endsection