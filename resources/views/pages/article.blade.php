@extends('layouts.app')

@section('content')
    <div id="wrapper">

        <!-- Main -->
        <section id="main" class="wrapper style1 fullscreen fade-up">
            <div class="inner">
                <h1 class="major">{{$article->title}}</h1>
                <span style="max-height: 375px; overflow: hidden" class="image fit"><img src="{{$article->image->path}}" alt="" /></span>
                <div>
                    {!! $article->content !!}
                </div>
            </div>
        </section>

    </div>
@endsection

