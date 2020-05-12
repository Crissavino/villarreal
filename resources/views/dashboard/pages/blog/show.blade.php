@extends('dashboard.layouts.app')

@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">



                    </h4>
                </div>
                <div class="card-body">
                    <a href="{{route('dashboard-add-article')}}" class="btn-fill btn btn-success mb-5">
                        Crear nuevo articulo
                    </a>

                    <div class="row">
                        @foreach ($articles as $article)
                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">{{$article->title}}</h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">{!! $article->content !!}</p>
                                    </div>
                                    <div class="card-footer mt-3">
                                        <a href="{{route('dashboard-edit-article', ['id' => $article->id])}}" class="btn-fill btn btn-primary mb-5">
                                            Editar
                                        </a>
                                        <a href="{{route('dashboard-delete-article', ['id' => $article->id])}}" class="btn-fill btn btn-danger mb-5">
                                            Eliminar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection

@section('javascript')

@stop

