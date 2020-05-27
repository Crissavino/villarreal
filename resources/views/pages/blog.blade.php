@extends('layouts.app')

@section('content')
    <div id="wrapper">

        <!-- Main -->
        <section id="main" class="wrapper style1 fullscreen fade-up">
            <div class="inner">
                <a href="{{route('blog')}}"><h2>Articulos publicados</h2></a>
                    <ul class="actions small row d-inline-flex">
                        @foreach ($tags as $tag)
                            <li><a href="{{route('blog', ['tagTitle' => $tag->title])}}" class="button primary small mt-3">{{$tag->title}}</a></li>
                        @endforeach
                    </ul>
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
            </div>

            <div class="m-auto">
                {{ $articles->links() }}
            </div>
        </section>

    </div>
@endsection

