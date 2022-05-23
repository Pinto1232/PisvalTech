<!DOCTYPE html>
<html lang="pt">
@extends('layouts.master')

@section('content')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A Pisvaltech é uma empresa de desenvolvimento de Websites e aplicativos móveis">
    <script src="https://www.googleoptimize.com/optimize.js?id=OPT-WBQPGGX"></script>
    <title>Pisvaltech - Luanda | Cape Town - Websites, SEO, aplicativos móveis e consciência de marca</title>

    <link rel="alternate" href="https://pisvaltech.com/" hreflang="pt-pt" />
    <link src="{{asset('resources/views/front/style/media_query.css')}}" />
    <link href="{{asset('resources/views/front/style/demo-page.css')}}" rel="stylesheet" media="all" />
    <link href="{{asset('resources/views/front/style/imagehover.min.css')}}" rel="stylesheet" media="all" />
    <link rel='shortcut icon' type='image/x-icon' href="{{asset('resources/views/front/style/favicon.ico')}}" />
    <script src="{{asset('resources/views/front/style/image_hove.js')}}"></script>

</head>

<body>

    <!-- carousel -->
    <video id="video_id" autoplay loop muted playsinline width="100%!important;" height="508">
        <source src="resources/views/front/assets/images/promos.mp4" type="video/mp4" />
        <img id="color1" src="https://pisvaltech.com/resources/external/assets/images/1.png" alt=" confort Zone logo">
    </video>


    <section id="super_section_id_con">
        <div id="super_cont_id" class="container">
            <div class="row">
                <div class="col align-self-start">
                    <img id="color1" src="https://pisvaltech.com/resources/external/assets/images/1.png"
                        alt="the gear head logo">
                </div>
                <div class="col align-self-start">
                    <img id="color1" src="https://pisvaltech.com/resources/external/assets/images/2.png"
                        alt="style logo">
                </div>
                <div class="col align-self-center">
                    <img id="color1" src="https://pisvaltech.com/resources/external/assets/images/3.png"
                        alt="organic logo">
                </div>
                <div class="col align-self-end">
                    <img id="color1" src="https://pisvaltech.com/resources/external/assets/images/4.png"
                        alt="cupcake logo">
                </div>
                <div class="col align-self-end">
                    <img id="color1" src="https://pisvaltech.com/resources/external/assets/images/5.png"
                        alt="cupcake logo">
                </div>
            </div>
        </div>
    </section>


    <section id="the_main_section_top_big">
        <div class="container">
            <div class="row row-cols-3">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <header id="the_big_step">SEU PASSO<strong id="txt_strong"> PARA O<br>FUTURO</strong>
                            </header>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row row-cols-4">
                <div class="col-md-8">
                    <h4 id="big_text">
                        <strong>
                            SOMOS MAIS DO QUE UMA EMPRESA
                        </strong>
                    </h4>

                    <div class="col-6">
                        <img id="computer_id" class="d-block w-100"
                            src="{{asset('resources/views/front/assets/images/mac3.png')}}" alt="mac computer">
                    </div>
                </div>


                <div class="col">
                    <h3 id="more_hey">
                        <strong>
                            CRIAMOS APLICATIVOS WEB RESPONSIVOS PARA ANGOLA
                        </strong>
                    </h3>

                    <div class="col-6">
                        <p id="main_text">
                            <strong>Pisval Tech,</strong> uma start up na area de
                            tecnológias, especializados em Programação,
                            Design gráfico e marketing digital. Actuamos em
                            desenvolvimento, manuntenção e gestão de
                            productos e serviços na área das tecnológias de
                            informação. Aplicamos resultados
                            direcionados a tudo o que fazemos.
                            Enquanto trabalhamos, adotamos uma abordagem
                            mais holística.
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-sm1">

                    <!-- Carousel section -->
                    <div id="mini_carousel_pinto" style=" width:558px; height:342px" id="carouselExampleIndicators"
                        class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-item active">
                            <img class="d-block w-100"
                                src="{{asset('resources/views/front/assets/images/Android_Apps.jpg')}}"
                                alt="Aplicativos adroind and iOS">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                src="{{asset('resources/views/front/assets/images/magento.jpg')}}"
                                alt="e-commerce em magento ">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                src="{{asset('resources/views/front/assets/images/wordpress.jpg')}}"
                                alt="wordpress website">
                        </div>
                        </>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>


                </div>
                <div class="col-sm1">
                    <div class="row">
                        <div id="build_more" class="col-lg-7">
                            <h5 id="texth5">
                                Pisval Tech, com especialidades que variam em desenvolvimento de aplicativos moveis,
                                aplicativos web e otimização de
                                mecanismo de busca à construção de marca, design de logotipo
                                de desenvolvimento de interfaces para sistemas, nossa equipe interna oferece estratégias
                                inovadoras e resultados
                                reconhecíveis. Nós somos a Pisval Tech o que nutre a nossa criança interior e deixar
                                nossa
                                imaginação correr a solta.
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--checkout -->
    <div class="container" id="grunpy_id">
        <div class="row">
            <div class="w-100">

                <h1 id="best_offers"><strong id="strg_ser">Agência de Marketing Digital</strong> de alta performance Em Luanda
                </h1>
                <h5 style="    text-align: center;">
                    <p id="main_d_text">Se precisar aumentar a visibilidade online da sua marca, fale agora com o nosso
                        especialista e tire
                        todas as suas dúvidas</p>.
                </h5>
            </div>
        </div>
    </div>


    <section class="col-md-12">
        <div class="container">
            <div id="the_row" class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="col-sm">
                            <h2 id="mood_1">Android / iOS</h2>
                            <figure id="main_col_pinto" class="demo col s10 m5 l3 offset-s1 offset-m1">
                                <figure class="imghvr-push-up card-img-top"><img
                                        src="{{asset('resources/views/front/assets/images/Android_Apps.jpg')}}"
                                        alt="Aplicativos em android">
                                    <figcaption>
                                        <h5>Android / iOS</h5>
                                        <p>
                                            As tendências mundiais estão focadas em fornecer soluções
                                            que rodem em sistema móvel. É por isso que estamos aqui para
                                            garantir que você esteja um passo à frente de seus concorrentes!
                                        </p>

                                    </figcaption><a href="javascript:;"></a>
                                </figure>
                                <a id="go_now" href="https://pisvaltech.com/contact" class="btn btn-primary">Obter
                                    Cotação</a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-12">

                        <div class="card ">
                            <div class="col-sm">
                                <h2 id="mood_1">Lojas Virtuais</h2>
                                <figure id="main_col_pinto" class="demo col s10 m5 l3 offset-s1 offset-m1">
                                    <figure class="imghvr-push-up card-img-top"><img
                                            src="{{asset('resources/views/front/assets/images/e-commerce.jpg')}}"
                                            alt="sistemas e-commerce">
                                        <figcaption>
                                            <h5>e-commerce</h5>
                                            <p>
                                                Ao personalizar sites de comércio eletrônico, maximizamos
                                                as taxas de conversão.
                                            </p>
                                        </figcaption><a href="javascript:;"></a>
                                    </figure>
                                    <a id="go_now" href="https://pisvaltech.com/contact" class="btn btn-primary">Obter
                                        cotação</a>
                                </figure>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="col-sm">
                                <h2 id="mood_1">SEO</h2>
                                <figure id="main_col_pinto" class="demo col s10 m5 l3 offset-s1 offset-m1">
                                    <figure class="imghvr-push-up card-img-top"><img
                                            src="{{asset('resources/views/front/assets/images/SEO.jpg')}}"
                                            alt="Motor de Otimização de Busca">
                                        <figcaption>
                                            <h5>Motor de Otimização de Busca</h5>
                                            <p>
                                                Os motores de busca querem encontrar você, eles
                                                precisam da sua
                                                ajuda. Nós ajudamos a fazer isso acontecer.
                                            </p>
                                        </figcaption><a href="javascript:;"></a>
                                    </figure>
                                    <a id="go_now" href="https://pisvaltech.com/contact" class="btn btn-primary">Obter
                                        cotação</a>
                                </figure>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-12">

                        <div class="card ">
                            <div class="col-sm">
                                <h2 id="mood_1">Gestão Escolar</h2>
                                <figure id="main_col_pinto" class="demo col s10 m5 l3 offset-s1 offset-m1">
                                    <figure class="imghvr-push-up card-img-top"><img
                                            src="{{asset('resources/views/front/assets/images/gestao.jpg')}}"
                                            alt="Sistema de Gestão Escolar">
                                        <figcaption>
                                            <h5>GESTÃO ESCOLAR</h5>
                                            <p>
                                                Produzimos sistemas que iram de acordo com a necessidade do seu
                                                negócio.
                                            </p>
                                        </figcaption><a href="javascript:;"></a>
                                    </figure>
                                    <a id="go_now" href="https://pisvaltech.com/contact" class="btn btn-primary">Obter
                                        cotação</a>
                                </figure>
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="card ">
                                <div class="col-sm">
                                    <h2 id="mood_1">Wordpress CMS</h2>
                                    <figure id="main_col_pinto" class="demo col s10 m5 l3 offset-s1 offset-m1">
                                        <figure class="imghvr-push-up card-img-top"><img
                                                src="{{asset('resources/views/front/assets/images/wordpress.jpg')}}"
                                                alt="Sistema de gerenciamento de conteúdo wordpress">
                                            <figcaption>
                                                <h5>Wordpress CMS</h5>
                                                <h6>O Que é?</h6>
                                                <p>
                                                    É um Sistema de Gerenciamento de Conteúdo (CMS) que alimenta
                                                    mais de 35% de todos os sites da internet – e esse número
                                                    continua a crescer todos os anos.
                                                </p>
                                            </figcaption><a href="javascript:;"></a>
                                        </figure>
                                        <a id="go_now" href="https://pisvaltech.com/contact"
                                            class="btn btn-primary">Obter cotação</a>
                                    </figure>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card ">
                                <div class="col-sm">
                                    <h2 id="mood_1">Magento CMS</h2>
                                    <figure id="main_col_pinto" class="demo col s10 m5 l3 offset-s1 offset-m1">
                                        <figure class="imghvr-push-up card-img-top"><img
                                                src="{{asset('resources/views/front/assets/images/magento.jpg')}}"
                                                alt="Sistemas de gestao comercial">
                                            <figcaption>
                                                <h5>Magento CMS</h5>
                                                <h6>O Que é?</h6>
                                                <p>
                                                    Magento é um sistema web de e-commerce de código aberto
                                                    baseado em PHP e MySQL utilizando elementos do Framework
                                                    Zend, totalmente modular, desenvolvido pela Magento Inc
                                                </p>
                                            </figcaption><a href="javascript:;"></a>
                                        </figure>
                                        <a id="go_now" href="https://pisvaltech.com/contact"
                                            class="btn btn-primary">Obter cotação</a>
                                    </figure>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card ">
                                <div class="col-sm">
                                    <h2 id="mood_1">Logo Design</h2>
                                    <figure id="main_col_pinto" class="demo col s10 m5 l3 offset-s1 offset-m1">
                                        <figure class="imghvr-push-up card-img-top"><img
                                                src="{{asset('resources/views/front/assets/images/best_logo.jpg')}}"
                                                alt="Design de logotipo">
                                            <figcaption>
                                                <h5>Logo Design</h5>
                                                <p>
                                                    Quer seja o seu mais novo empreendimento ou uma
                                                    reformulação da marca, o design do logotipo é o primeiro
                                                    passo.
                                                </p>
                                            </figcaption><a href="javascript:;"></a>
                                        </figure>
                                        <a id="go_now" href="https://pisvaltech.com/contact"
                                            class="btn btn-primary">Obter cotação</a>
                                    </figure>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card ">
                                <div class="col-sm">
                                    <h2 id="mood_1">Manutenção do Website</h2>
                                    <figure id="main_col_pinto" class="demo col s10 m5 l3 offset-s1 offset-m1">
                                        <figure class="imghvr-push-up card-img-top"><img
                                                src="{{asset('resources/views/front/assets/images/maintenance-min.jpg')}}"
                                                alt="sistema de manutenção de website">
                                            <figcaption>
                                                <h5>Manutenção de sistema</h5>
                                                <p>
                                                    Agende backups, faça atualizações, novos produtos
                                                    e monitore o tráfego.
                                                </p>
                                            </figcaption><a href="javascript:;"></a>
                                        </figure>
                                        <a id="go_now" href="https://pisvaltech.com/contact"
                                            class="btn btn-primary">Obter cotação</a>
                                    </figure>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card ">
                                <div class="col-sm">
                                    <h2 id="mood_1">UI/UX Wireframes</h2>
                                    <figure id="main_col_pinto" class="demo col s10 m5 l3 offset-s1 offset-m1">
                                        <figure class="imghvr-push-up card-img-top"><img
                                                src="{{asset('resources/views/front/assets/images/UX.jpg')}}"
                                                alt="Projeto de protótipo de experiência do usuário(UX)">
                                            <figcaption>
                                                <h5>UI/UX Design</h5>
                                                <p>
                                                    Literalmente quer dizer “User Experience”, ou seja,
                                                    experiência do usuário.
                                                    Mas muito mais do que um termo técnico, UX é toda relação
                                                    que uma pessoa tem
                                                    com um produto ou serviço.
                                                </p>
                                            </figcaption><a href="javascript:;"></a>
                                        </figure>
                                        <a id="go_now" href="https://pisvaltech.com/contact"
                                            class="btn btn-primary">Obter cotação</a>
                                    </figure>
                                </div>
                            </div>
                        </div </div> </div> </div> </div> </div> </section> <!-- Brief description of this section -->

                        <!-- Marketing header -->
                        <section id="mark_devision">
                            <div class="uagb-ifb-separator-parent">
                                <h2 class="uagb-ifb-title">
                                    OS SERVIÇOS DE MARKETING DIGITAL DISPÕE DE SOLUÇÕES QUE FAZEM CRESCER O SEU NEGÓCIO
                                </h2>
                                <br>
                                <br>

                                <!-- Card block section-->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm">

                                            <div class="card" style="width: 21rem;">
                                                <img id="images_corner"
                                                    src="resources/views/front/assets/images/marketing_digital.jpg"
                                                    class="card-img-top" alt="Marketing Digital">
                                                <div class="card-body">
                                                    <h5 class="card-title">
                                                        ESTRATÈGIA DE MARKETING DIGITAL</h5>
                                                    <p id="text_big_chrome" class="card-text;" style="text-align: center;">
                                                        Elaboração da estratégia de marketing digital para que possa
                                                        conhecer o seu público, concorrente e como actuar no mercado
                                                        através das novas plataformas online.
                                                    </p>
                                                    <a id="btn_primary_1"  href="https://pisvaltech.com/contact" class="btn btn-primary">Quero a estratégia digital</a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm">

                                            <div class="card" style="width: 21rem;">
                                                <img src="resources/views/front/assets/images/website.jpg"
                                                    class="card-img-top" alt="Website">
                                                <div class="card-body">
                                                    <h5 class="card-title">CRIAÇÃO DE WEBSITE PROFISSIONAL</h5>
                                                    <p id="text_big_chrome" class="card-text" style="text-align: center;">
                                                        A criação do seu website profissional torna-se simples nas mãos
                                                        de especialistas. Desenvolvemos o seu website sob medida para o
                                                        seu negócio, com visual interativo.
                                                    </p>
                                                    <a id="btn_primary_1" href="https://pisvaltech.com/contact" class="btn btn-primary">Quero a criação do website</a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm">

                                            <div class="card" style="width: 21rem;">
                                                <img src="resources/views/front/assets/images/facebook.jpg"
                                                    class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">ANÚNCIAR NO FACEBOOK</h5>
                                                    <p id="text_big_chrome" class="card-text" style="text-align: center;">
                                                        Anuncie no facebook e no instagram, apresentando o seu
                                                        produto/serviço em grande escala em qualquer parte do mundo ao
                                                        seu público-alvo definido na estratégia de marketing.
                                                    </p>
                                                    <a id="btn_primary_1" href="https://pisvaltech.com/contact" class="btn btn-primary">Quero anuncio no facebook</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm">

                                            <div class="card" style="width: 21rem;">
                                                <img src="resources/views/front/assets/images/e-commerce23.jpg"
                                                    class="card-img-top" alt="Loja Virtual">
                                                <div class="card-body">
                                                    <h5 class="card-title">
                                                        LOJA VIRTUAL</h5>
                                                    <p id="text_big_chrome" class="card-text" style="text-align: center;">
                                                        Desenvolvemos a sua loja virtual para poder vender online de
                                                        acordo com a sua ideia, implementamos novas tecnologias para
                                                        oferecer ao seu público o uma experiência única.</p>
                                                    <a id="btn_primary_1" href="https://pisvaltech.com/contact" class="btn btn-primary">Quero a loja virtual</a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm">

                                            <div class="card" style="width: 21rem;">
                                                <img src="resources/views/front/assets/images/Identidade_visual.jpg"
                                                    class="card-img-top" alt="Identidade Visual">
                                                <div class="card-body">
                                                    <h5 class="card-title">
                                                        IDENTIDADE VISUAL</h5>
                                                    <p id="text_big_chrome" class="card-text" style="text-align: center;">
                                                        Desenhamos tudo que precisa para tirar do papel para a execução
                                                        sua marca, elaboramos a sua identidade corporativa com o
                                                        objetivo de ter o visual profissional de qualidade.</p>
                                                    <a id="btn_primary_1" href="https://pisvaltech.com/contact" class="btn btn-primary">Quero a criação do website</a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm">

                                            <div class="card" style="width: 21rem;">
                                                <img src="resources/views/front/assets/images/social_media.jpg"
                                                    class="card-img-top" alt="Midia Social">
                                                <div class="card-body">
                                                    <h5 class="card-title">REDES SOCIAIS</h5>
                                                    <p id="text_big_chrome" class="card-text" style="text-align: center;">
                                                        Orientamos qual social media é para o seu projeto, fazemos a
                                                        gestão para que possa estar perto do seu público de modo
                                                        apresentar conteúdo relevante e aumentar o seu branding.</p>
                                                    <a id="btn_primary_1" href="https://pisvaltech.com/contact" class="btn btn-primary">Quero a gestão das redes</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>




                        <!-- Price table -->
                        <section class="pricing py-5">
                            <h1 id="the_special_one" class=""><strong>VERIFIQUE OS NOSSO PREÇOS ESPECIAS DESENHADO
                                    PENSADO EM VOCÊ!</strong>
                                <p id="the_small_text"></p>
                            </h1>
                            <div class="container ">
                                <div class="row">

                                    <!-- Pacote de identidade de marca, producao e marketing digital -->
                                    <!-- Free Tier -->
                                    <div class="col-lg-3">
                                        <div class="card mb-5 mb-lg-0">
                                            <div id="my_card1" class="card-body"
                                                style="background:rgb(83, 51, 237); color:#fff">
                                                <h5 class="card-title text-muted text-uppercase text-center"
                                                    style="color:#fff!important">
                                                    Pacote</h5>
                                                <h5 class="card-title text-muted text-uppercase text-center"
                                                    style="color:#fff!important">
                                                    Agua</h5>
                                                <h6 id="price_idx" class="card-price text-center"
                                                    style="color:#fff!important">
                                                    4,000,000+kz<span class="period"
                                                        style="color:#fff!important">/Pacote
                                                    </span>
                                                </h6>
                                                <hr>
                                                <ul class="fa-ul">
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Logo
                                                        Design</li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Logo Intro
                                                    </li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Producao
                                                        de video
                                                        publicitario
                                                    </li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>E-commerce
                                                        /
                                                        Website</li>
                                                    <li class="text-muted" style="color:#fff!important">Producao de
                                                        contiudos media
                                                    </li>
                                                    <li class="text-muted" style="color:#fff!important">6 mes de
                                                        SEO</li>
                                                    <li class="text-muted" style="color:#fff!important">1 mes de
                                                        google Add</li>
                                                    <li class="text-muted" style="color:#fff!important">Sistema
                                                        gerenciais / Aplicativos</li>
                                                </ul>
                                                <a href="https://pisvaltech.com/contact" id="price_button"
                                                    class="btn btn-block btn-primary text-uppercase">COMPRE
                                                    AGORA</a>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Pro Tier -->
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div id="my_card1" class="card-body"
                                                style="background:rgba(240, 52, 52, 1)">
                                                <h5 style="color:#fff!important"
                                                    class="card-title text-muted text-uppercase text-center">
                                                    Pacote</h5>
                                                <h5 style="color:#fff!important"
                                                    class="card-title text-muted text-uppercase text-center">
                                                    Pisval Mercúrio</h5>
                                                <h6 id="price_idx" class="card-price text-center"
                                                    style="color:#fff!important">
                                                    1,400,000kz<span class="period">/Pacote
                                                    </span>
                                                </h6>
                                                <hr>
                                                <ul class="fa-ul">
                                                    <li><span class="fa-li"><i
                                                                class="fa fa-check"></i></span><strong>Inclui</strong>
                                                    </li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Logo
                                                        Design</li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Logo Intro
                                                    </li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Producao
                                                        de Video
                                                        Publicitario
                                                    </li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>E-commerce
                                                        /
                                                        Website</li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Producao
                                                        de
                                                        Continuodo para
                                                        Medias Sociais</li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span><strong>1
                                                            mes de
                                                            SEO</strong>
                                                </ul>
                                                <a href="https://pisvaltech.com/contact" id="price_button1"
                                                    class="btn btn-block btn-primary text-uppercase">COMPRE
                                                    AGORA</a>
                                            </div>
                                        </div>
                                    </div>



                                    <!-- Pro Tier -->
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div id="my_card1" class="card-body"
                                                style="background:rgba(54, 215, 183, 1)">
                                                <h5 class="card-title text-muted text-uppercase text-center"
                                                    style="color:#fff!important">
                                                    Pacote</h5>
                                                <h5 class="card-title text-muted text-uppercase text-center"
                                                    style="color:#fff!important">
                                                    Pisval Diamante</h5>
                                                <h6 id="price_idx" class="card-price text-center"
                                                    style="color:#fff!important">400,000kz<span class="period">/Pacote
                                                    </span>
                                                </h6>
                                                <hr>
                                                <ul class="fa-ul">
                                                    <li><span class="fa-li"><i
                                                                class="fa fa-check"></i></span><strong>Inclui</strong>
                                                    </li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Logo
                                                        Design</li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Logo Intro
                                                    </li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Producao
                                                        de Video
                                                        Publicitario
                                                    </li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Website
                                                        Corporativo</li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Producao
                                                        de
                                                        conteudos para
                                                        midias</li>
                                                </ul>
                                                <a href="https://pisvaltech.com/contact" id="price_button3"
                                                    class="btn btn-block btn-primary text-uppercase">COMPRE
                                                    AGORA</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Pro Tier -->
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div id="my_card1" class="card-body"
                                                style="background:rgba(248, 148, 6, 1)">
                                                <h5 class="card-title text-muted text-uppercase text-center"
                                                    style="color:#fff!important">
                                                    Auditoria de SEO</h5>
                                                <h5 class="card-title text-muted text-uppercase text-center"
                                                    style="color:#fff!important">
                                                    Implementação de estratégia de
                                                    SEO</h5>
                                                <h6 id="price_idx" class="card-price text-center"
                                                    style="color:#fff!important">130,
                                                    000kz<span class="period">/Mês
                                                    </span></h6>
                                                <hr>
                                                <ul class="fa-ul">
                                                    <li><span class="fa-li"><i
                                                                class="fa fa-check"></i></span><strong>Inclui
                                                        </strong></li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>150GB
                                                        Storage
                                                    </li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Inclui
                                                        Public
                                                        Projects
                                                    </li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Community
                                                        Access
                                                    </li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Inclui
                                                        Private
                                                        Projects
                                                    </li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Dedicated
                                                        Phone
                                                        Support
                                                    </li>
                                                    <li><span class="fa-li"><i
                                                                class="fa fa-check"></i></span><strong>Inclui</strong>
                                                        Free Subdomains</li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Pacote
                                                        Status
                                                        Reports
                                                    </li>
                                                </ul>
                                                <a href="https://pisvaltech.com/contact" id="price_button4"
                                                    class="btn btn-block btn-primary text-uppercase">COMPRE
                                                    AGORA</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Pacote de producao para medias sociais-->

                                    <!-- Free Tier -->
                                    <div class="col-lg-3">
                                        <div class="card mb-5 mb-lg-0">
                                            <div id="my_card1" class="card-body"
                                                style="background:rgba(245, 229, 27, 1)">
                                                <h5 class="card-title text-muted text-uppercase text-center">
                                                    Pacote</h5>
                                                <h5 class="card-title text-muted text-uppercase text-center">
                                                    Pisval Ouro</h5>
                                                <h6 id="price_idx" class="card-price text-center">100,000kz<span
                                                        class="period">/Pacote
                                                    </span>
                                                </h6>
                                                <hr>
                                                <ul class="fa-ul">
                                                    <li><span class="fa-li"><i
                                                                class="fa fa-check"></i></span><strong>Inclui</strong>
                                                    </li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>30
                                                        Banners
                                                    </li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>4
                                                        Flyers
                                                    </li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>2
                                                        Flyers Animados
                                                    </li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>
                                                        1 video Promocional
                                                    </li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>2
                                                        Slideshow
                                                    </li>

                                                </ul>
                                                <a href="https://pisvaltech.com/contact" id="price_button5"
                                                    class="btn btn-block btn-primary text-uppercase">COMPRE
                                                    AGORA</a>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Pro Tier -->
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div id="my_card11" class="card-body">
                                                <h5 class="card-title text-muted text-uppercase text-center">
                                                    Pacote</h5>
                                                <h5 class="card-title text-muted text-uppercase text-center">
                                                    Pisval Prata </h5>
                                                <h6 id="price_idx" class="card-price text-center">75,000kz<span
                                                        class="period">/Pacote
                                                    </span>
                                                </h6>
                                                <hr>
                                                <ul class="fa-ul">
                                                    <li><span class="fa-li"><i
                                                                class="fa fa-check"></i></span><strong>Inclui</strong>
                                                    </li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>30
                                                        Banners</li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>2
                                                        Flyers</li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>1
                                                        Video Promocional</li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>1
                                                        Flyers Animados</li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>1
                                                        Slideshow</li>
                                                </ul>
                                                <a href="https://pisvaltech.com/contact" id="price_button6"
                                                    class="btn btn-block btn-primary text-uppercase">COMPRE
                                                    AGORA</a>
                                            </div>
                                        </div>
                                    </div>



                                    <!-- Pro Tier -->
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div id="my_card12" class="card-body">
                                                <h5 class="card-title text-muted text-uppercase text-center">
                                                    Pacote</h5>
                                                <h5 class="card-title text-muted text-uppercase text-center">
                                                    Pisval Bronze</h5>
                                                <h6 id="price_idx" class="card-price text-center">50, 000kz<span
                                                        class="period">/Pacote
                                                    </span>
                                                </h6>
                                                <hr>
                                                <ul class="fa-ul">
                                                    <li><span class="fa-li"><i
                                                                class="fa fa-check"></i></span><strong>Inclui</strong>
                                                    </li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>30
                                                        Banners</li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>1
                                                        Flyers</li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>1
                                                        Flyers Animado</li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>1
                                                        Slideshow</li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span><strong>1
                                                            Video promocional
                                                        </strong>
                                                </ul>
                                                <a href="https://pisvaltech.com/contact" id="price_button7"
                                                    class="btn btn-block btn-primary text-uppercase">COMPRE
                                                    AGORA</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Pro Tier -->
                                    <div class="col-lg-3">
                                        <div class="card">
                                            <div id="my_card13" class="card-body">
                                                <h5 class="card-title text-muted text-uppercase text-center">
                                                    Pacote</h5>
                                                <h5 class="card-title text-muted text-uppercase text-center">
                                                    Campanha de email Marketing /
                                                    Assinatura de e-mail</h5>
                                                <h6 id="price_idx" class="card-price text-center">50,000kz<span
                                                        class="period">/Pacote
                                                    </span>
                                                </h6>
                                                <hr>
                                                <ul class="fa-ul">
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>
                                                        Revisão do marketing por e-mail existente
                                                    </li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>
                                                        Desenvolver estratégia de campanha por e-mail para campanha
                                                        específica
                                                    </li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>
                                                        Cópia escrita para até 4 e-mails
                                                    </li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Producao
                                                        Projetar e criar e-mails
                                                    </li>
                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span><strong>1
                                                            Enviar ou configurar automação
                                                        </strong>

                                                    <li><span class="fa-li"><i class="fa fa-check"></i></span><strong>1
                                                            Relatórios e revisão pós-campanha
                                                        </strong>
                                                </ul>
                                                <a href="https://pisvaltech.com/contact" id="price_button8"
                                                    class="btn btn-block btn-primary text-uppercase">COMPRE
                                                    AGORA</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>

                        <section id="sub_id_con" class="col-lg-12">
                            <h2 id="sub_t" style="text-align:center; padding:20px">
                                O QUE NOSSOS CLIENTES DIZEM
                            </h2>
                        </section>



                        <!-- Section testimonial -->
                        <section class="carousel slide testimonials-slider cid-s64I6LXT6w" data-interval="false"
                            id="testimonials-slider1-j">

                            <div class="container text-center">
                                <h2 id="mole" class="">
                                    O QUE NOSSOS FANTÁSTICOS USUÁRIOS DIZEM
                                </h2>

                                <div class="carousel slide" role="listbox" data-pause="true" data-keyboard="false"
                                    data-ride="carousel" data-interval="5000">
                                    <div class="carousel-inner">


                                        <div class="carousel-item">
                                            <div class="user col-md-8">
                                                <div class="user_image">
                                                    <img src="{{asset('resources/external/assets/images/face2.jpg')}}"
                                                        alt="Cliente da Pisval Tech">
                                                </div>
                                                <div class="user_text pb-3">
                                                    <p id="font_id" class="mbr-fonts-style display-7">
                                                        Falar da Pisval Tech é falar de uma empresa que chegou
                                                        no momento certo, na hora
                                                        ideal para poder suprir com as necessidades da nossa
                                                        empresa.
                                                        O trabalho foi realizado todo a distância e o resultado
                                                        foi satisfatório.
                                                        Podes assim dizer que estamos plenamente encantados com
                                                        o nível de qualidade dos
                                                        serviços prestados a nós pela Pisval Tech. Desde os
                                                        primeiros contatos para a
                                                        criação da nossa página de e-Commerce durante os
                                                        suportes técnicos percebem
                                                        tratar-se de uma equipe competente de alto nível
                                                        profissional e ético.
                                                        Parabéns!!
                                                    </p>
                                                </div>
                                                <div class="user_name mbr-bold pb-2 mbr-fonts-style display-7">
                                                    Maira Mendonça
                                                </div>
                                                <div class="user_desk mbr-light mbr-fonts-style display-7">
                                                    CEO & Founder - Lose Control
                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="user col-md-8">
                                                <div class="user_image">
                                                    <img src="{{asset('resources/external/assets/images/face4.jpg')}}"
                                                        alt="Cliente Pisval Tech">
                                                </div>
                                                <div class="user_text pb-3">
                                                    <p id="font_id" class="mbr-fonts-style display-7">
                                                        Prezados fundadores da empresa, é com muito orgulho que
                                                        me dirijo a vocês pela
                                                        grande iniciativa de criarem a PISVAL Tech Studio.
                                                        A C New Universe agradece com satisfação, o serviço de
                                                        criação do nosso logo assim
                                                        como da carta de apresentação dos nossos serviços de
                                                        buffet. O trabalho superou as
                                                        nossas expectativas.
                                                        Continuem a trabalhar com a vossa característica que vos
                                                        é peculiar: Rigor,
                                                        Qualidade e Responsabilidade.
                                                    </p>
                                                </div>
                                                <div class="user_name mbr-bold pb-2 mbr-fonts-style display-7">
                                                    Engracia André
                                                </div>
                                                <div class="user_desk mbr-light mbr-fonts-style display-7">
                                                    CEO - New Universe
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-controls">
                                        <a class="carousel-control-prev" role="button" data-slide="prev">
                                            <span id="prev" aria-hidden="true"
                                                class="mbri-arrow-prev mbr-iconfont"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>

                                        <a class="carousel-control-next" role="button" data-slide="next">
                                            <span id="prev" aria-hidden="true"
                                                class="mbri-arrow-next mbr-iconfont"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>


                        <section id="sub_id_con" class="col-lg-12">
                            <h2 id="sub_t" style="text-align:center; padding:20px">
                                FORNECENDO SOLUÇÕES QUE AJUDAM A AUMENTAR A PRESENÇA DE SUA EMPRESA ONLINE
                            </h2>
                        </section>


                        <section class="col-lg-12">
                            <h1 style="text-align:center">
                                <h2 id="moob_deep" style="text-align:center">CONTE-NOS A HISTÓRIA DA SUA MARCA, E NÓS
                                    AQUI ESTAREMOS PARA NARRAR COMO NINGUÉM!</h2>
                            </h1>
                            <p id="id_ui" style="text-align:center">
                                VOCÊ É A NOSSA PRIORIDADE.
                                <br>
                            </p>
                        </section>


                        <!-- Our best brands-->
                        <section id="the_main_client" class="clients cid-s64Ib3iVZf" data-interval="false"
                            id="clients-k">
                            <div class="container mb-5">
                                <div class="media-container-row">
                                    <div class="col-12 align-center">
                                        <h2 id="Our_pride_id" class="">
                                            VOCÊ É A NOSSA PRIORIDADE.
                                        </h2>
                                        <h3 class="mbr-section-subtitle mbr-light mbr-fonts-style display-5">
                                            Marcas são histórias que esperam ser contadas.
                                        </h3>
                                    </div>
                                </div>
                            </div>

                            <div id="more_container" class="container">
                                <div class="carousel slide" role="listbox" data-pause="true" data-keyboard="false"
                                    data-ride="carousel" data-interval="5000">
                                    <div class="carousel-inner" data-visible="5">
                                        <div class="carousel-item ">
                                            <div class="media-container-row">
                                                <div class="col-md-12">
                                                    <div class="wrap-img ">
                                                        <img src="{{asset('resources/external/assets/images/6.jpg')}}"
                                                            class="img-responsive clients-img"
                                                            alt="universal technology logo">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel-item ">
                                            <div class="media-container-row">
                                                <div class="col-md-12">
                                                    <div class="wrap-img ">
                                                        <img src="{{asset('resources/external/assets/images/7.png')}}"
                                                            class="img-responsive clients-img" alt="New Universe Logo">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="carousel-item ">
                                            <div class="media-container-row">
                                                <div class="col-md-12">
                                                    <div class="wrap-img ">
                                                        <img src="{{asset('resources/external/assets/images/8.png')}}"
                                                            class="img-responsive clients-img"
                                                            alt="Attar fragancia logo">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel-item ">
                                            <div class="media-container-row">
                                                <div class="col-md-12">
                                                    <div class="wrap-img ">
                                                        <img src="{{asset('resources/external/assets/images/9.png')}}"
                                                            class="img-responsive clients-img" alt="Valdesign logo">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="carousel-item ">
                                            <div class="media-container-row">
                                                <div class="col-md-12">
                                                    <div class="wrap-img ">
                                                        <img src="{{asset('resources/external/assets/images/10.png')}}"
                                                            class="img-responsive clients-img"
                                                            alt="Lose Control makeup logo">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="carousel-item ">
                                            <div class="media-container-row">
                                                <div class="col-md-12">
                                                    <div class="wrap-img ">
                                                        <img src="{{asset('resources/external/assets/images/11.png')}}"
                                                            class="img-responsive clients-img"
                                                            alt="Maiombeon classificados logo">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="carousel-controls">
                                        <a data-app-prevent-settings="" class="carousel-control carousel-control-prev"
                                            role="button" data-slide="prev">
                                            <span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a data-app-prevent-settings="" class="carousel-control carousel-control-next"
                                            role="button" data-slide="next">
                                            <span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>




                        <!-- Global site tag (gtag.js) - Google Ads: 623925183 -->
                        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-623925183"></script>
                        <script>
                            window.dataLayer = window.dataLayer || [];

                            function gtag() {
                                dataLayer.push(arguments);
                            }
                            gtag('js', new Date());

                            gtag('config', 'AW-623925183');

                        </script>

                        <!-- Global site tag (gtag.js) - Google Ads: 623925183 -->
                        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-623925183"></script>
                        <script>
                            window.dataLayer = window.dataLayer || [];

                            function gtag() {
                                dataLayer.push(arguments);
                            }
                            gtag('js', new Date());

                            gtag('config', 'AW-623925183');

                        </script>










</body>
@endsection
