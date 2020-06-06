@extends('layouts.app')

@section('title', 'Bienvenido')

@section('content')

    <!-- Intro Mobile-->
    <section id="intro" class="wrapper style1 fullscreen fade-up introMobile">
        <div class="flashMessage">
            @include('flash.messages')
        </div>
        <div class="inner">
            <div class="marcaMobile">
                <span class="text-wrapper">
                    <span style="margin-left: -140px;" class="letters letters-left">V</span><br>
                    <span style="font-size: 80%" class="letters ampersand">&amp;</span><br>
                    <span style="margin-left: 150px" class="letters letters-right">V</span>
                </span>
            </div>

{{--            <h1 class="nombreMarca">V & V</h1>--}}
            <p class="pieMarca">Mejor que el hombre que sabe lo que es justos, es el hombre que ama lo justo.</p>
        </div>
    </section>

    <!-- Intro -->
    <section id="intro" class="wrapper style1 fullscreen fade-up introDesktop">
        <div class="flashMessage">
            @include('flash.messages')
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active fade-up">
                    <img src="{{asset('images/salaDeEspera.jpeg')}}"
                         style="-webkit-filter: grayscale(100%);
                            filter: grayscale(100%);
                            margin: auto;
                            overflow: auto;
                            height: 100vh;
                            transform: translateX(-225px);"
                         class="d-block image"
                         alt="...">
                    <img src="{{asset('images/prueba1.jpg')}}"
                         style="-webkit-filter: grayscale(100%);
                            filter: grayscale(100%);
                            margin: auto;
                            overflow: auto;
                            height: 100vh;
                            width: 100%;"
                         class="d-none"
                         alt="...">
                    <div class="carousel-caption" style="
                        top: 50%;
                        transform: translateY(-15%);
                        bottom: initial;"
                    >
                        <p class="text-center" style="
                            /*color: #312450;*/
                            font-size: 1em !important;
                            font-family: 'Crimson Text', serif;
                            font-weight: 400;
                            letter-spacing: 0.25em;
                            line-height: 1.75;
                            outline: 0;"
                        >
                            Estudio Juridico Integral Villarreal <br>
                            Dr. Luis Lujan Villarreal <br>
                            Dr. Fernando Villarreal <br><br>
                            "Mejor que el hombre que sabe lo que es justos, es el hombre que ama lo justo"
                        </p>
                    </div>
                </div>
                <div class="carousel-item fade-up">
                    <img src="{{asset('images/salaDeReunion.jpeg')}}"
                         style="-webkit-filter: grayscale(100%);
                            filter: grayscale(100%);
                            overflow: auto;
                            height: 100vh;
                            transform: translateX(-445px);"
                         class="d-block image"
                         alt="...">
                    <img src="{{asset('images/prueba2.jpg')}}"
                         style="-webkit-filter: grayscale(100%);
                            filter: grayscale(100%);
                            margin: auto;
                            overflow: auto;
                            height: 100vh;
                            width: 100%;"
                         class="d-none"
                         alt="...">
                    <div class="carousel-caption" style="
                        top: 50%;
                        transform: translateY(-30%);
                        bottom: initial;"
                    >
                        <p class="text-center" style="
                            /*color: #312450;*/
                            font-size: 1em !important;
                            font-family: 'Crimson Text', serif;
                            font-weight: 400;
                            letter-spacing: 0.25em;
                            line-height: 1.75;
                            outline: 0;"
                        >
                            Contamos con un equipo de expertos dedicados al derecho empresarial, civil, comercial,
                            laboral, tributario, penal y familia
                        </p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </section>

    <!-- One -->
    <section id="one" class="wrapper style2 fade-up">
        <div class="inner">
            <h2>Noticias</h2>
            <p>
                Informate con nuestros artículos de actualidad jurídica y tributaria
            </p>
            <div class="features" id="blogContainer">
                @foreach ($articles as $article)
                    <section class="d-block w-100" data-aos="flip-left">
                        <a href="{{route('articulo', ['id' => $article->id])}}"><span
                                    class="image lastArticleImage left"><img src="{{$article->image->path}}"
                                                                             alt=""></span></a>
                        <a href="{{route('articulo', ['id' => $article->id])}}"><h3
                                    id="articleTitle">{{$article->title}}</h3></a>
                        <p>
                            {!! Str::limit($article->content, 1000) !!}
                        </p>
                    </section>
                @endforeach
            </div>
            <ul class="actions">
                <li><a href="{{route('blog')}}" class="button">Ver más</a></li>
            </ul>
        </div>
    </section>

    <!-- Two -->
    <section id="two" class="wrapper style1 spotlights" data-aos="fade-left" data-aos-offset="250"
             data-aos-duration="1500">

        <section>
            {{--            <a href="{{route('nosotros')}}" class="image"--}}
            {{--               style="background-image: url('{{asset('images/pic03.jpg')}}'); background-position: center center">--}}
            {{--            </a>--}}
            <div class="content">
                <div class="inner">
                    <h2>Estudio Jurídico Integral Villarreal</h2>
                    <p>
                        Con mas de 30 años de experiencia, nuestro grupo de trabajo cuenta con un fuerte enfoque en el
                        derecho empresarial de avanzada sin descuidar las demás ramas del derecho particular.
                    </p>
                    <p>
                        Estamos integrados por un cuerpo de profesionales que nos permite obtener los mejores resultados
                        en cada campo; de hecho, quienes nos eligen, nos confían mas que sus conflictos jurídicos
                        permitiéndonos asi inmiscuirnos en cuestiones tributarias para un eficaz resultado a corto y
                        largo plazo.
                    </p>
                    <p>
                        También lideramos otras áreas de práctica, entre las que se incluyen las cuestiones civiles y
                        comerciales, laborales, seguros, telecomunicaciones y servicios, operaciones inmobiliarias y
                        construcción, asesoramiento a profesionales dedicados a las areas de la medicina, contable,
                        juridicas, escribanos, entre otras.
                    </p>
                    <p>
                        Todos nuestros grupos de trabajo son liderados por socios de gran experiencia y se conforman en
                        función de los objetivos de nuestros clientes. No obstante ello, los temas que nos convocan a
                        diario, son de conocimiento por parte de cada uno de los integrantes, generando la confianza de
                        que al realizar una consulta, resolveremos la misma de manera eficiente.
                    </p>
                    <ul class="actions" style="margin-bottom: 0 !important;">
                        <li><a href="{{route('nosotros')}}" class="button">Saber más</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </section>

    <!-- Three -->
    {{--    <section id="two" class="wrapper style3 fade-up">--}}
    {{--        <div class="inner">--}}
    {{--            <div class="split style1">--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

@endsection