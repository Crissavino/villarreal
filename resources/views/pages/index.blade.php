@extends('layouts.app')

@section('title', 'Bienvenido')

@section('content')

    <!-- Intro -->
    <section id="intro" class="wrapper style1 fullscreen fade-up">
        <div class="flashMessage">
            @include('flash.messages')
        </div>
        <div class="inner">
            <h1 class="nombreMarca">V & V</h1>
            <p class="pieMarca">Valora a quien te dedica su tiempo, es lo único irrecuperable en la vida.</p>
            {{--            <ul class="actions">--}}
            {{--                <li><a href="#one" class="button scrolly">Learn more</a></li>--}}
            {{--            </ul>--}}
        </div>
    </section>

    <!-- One -->
    <section id="one" class="wrapper style2 fade-up">
        <div class="inner">
            <h2>Ultimos articulos publicados</h2>
            <p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada
                quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit
                quis lorem.</p>
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
                <li><a href="{{route('blog')}}" class="button">Ver el blog</a></li>
            </ul>
        </div>
    </section>

    <!-- Two -->
    <section id="two" class="wrapper style1 spotlights" data-aos="fade-left" data-aos-offset="250" data-aos-duration="1500">

        <section>
            <a href="{{route('nosotros')}}" class="image"
               style="background-image: url('{{asset('images/pic03.jpg')}}'); background-position: center center">
                {{--                <img src="{{asset('images/pic03.jpg')}}" alt="" data-position="center center"/>--}}
            </a>
            <div class="content">
                <div class="inner">
                    <h2>Estudio Juridico Villarreal</h2>
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
                        <li><a href="{{route('nosotros')}}" class="button">Saber mas</a></li>
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

