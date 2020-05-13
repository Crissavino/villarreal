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
            <p class="pieMarca">Valora a alguien que te da su tiempo, porque es lo unico irrecuperable en la vida.</p>
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
                    <section class="d-block w-100">
                        <a href="{{route('articulo', ['id' => $article->id])}}"><span class="image lastArticleImage left"><img src="{{$article->image->path}}" alt=""></span></a>
                        <a href="{{route('articulo', ['id' => $article->id])}}"><h3 id="articleTitle">{{$article->title}}</h3></a>
                        <p>
                            {!! $article->content !!}
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
    <section id="two" class="wrapper style1 spotlights">

        <section>
            <a href="{{route('nosotros')}}" class="image" style="background-image: url('{{asset('images/pic03.jpg')}}'); background-position: center center">
{{--                <img src="{{asset('images/pic03.jpg')}}" alt="" data-position="center center"/>--}}
            </a>
            <div class="content">
                <div class="inner">
                    <h2>El estudio</h2>
                    <p>
                        Fringilla nisl. Donec accumsan
                        interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis
                        in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu
                        faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod.
                        Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis
                        volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan
                        interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis
                        in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu
                        faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod.
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

