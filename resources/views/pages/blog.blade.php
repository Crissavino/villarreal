@extends('layouts.app')

@section('content')
    <div id="wrapper">

        <!-- Main -->
        <section id="main" class="wrapper style1 fullscreen fade-up">
            <div class="inner">
                <a href="{{route('blog')}}"><h2>Articulos publicados</h2></a>
                <div class="tags">
                    <button id="toggleTags" class="btn-block mb-3" type="button">
                        Categorias
                    </button>
                    <div id="collapsedTags" class="collapse">
                        <ul class="actions small row d-inline-flex">
                            @foreach ($tags as $tag)
                                <li><a href="{{route('blog', ['tagTitle' => $tag->title])}}" class="button primary small mt-3">{{$tag->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <hr>
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

<script>
  setTimeout( () => {
    const tagButton = document.getElementById('toggleTags')
    const collapsedTags = document.getElementById('collapsedTags')

    tagButton.addEventListener('click', () => {
      collapsedTags.classList.toggle('show')
    })
  }, 200)
</script>