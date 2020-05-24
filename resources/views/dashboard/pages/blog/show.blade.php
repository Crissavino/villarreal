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

                        <a href="{{route('dashboard-add-article')}}" class="btn-fill btn btn-success mb-5">
                            Crear nuevo articulo
                        </a>
    
                        <a href="{{route('dashboard-tags')}}" class="btn-fill btn btn-success mb-5">
                            Ver tags
                        </a>

                    </h4>
                </div>
                <div class="card-body">
                    
                    <div class="row">
                        @foreach ($articles as $article)
                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">{{$article->title}}</h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">{!! Str::limit($article->content, 200) !!}</p>
                                    </div>
                                    <div class="card-footer text-center mt-3">
                                        @if ($article->visible)
                                            <button onclick="changeVisibility({{$article->id}}, 0)" class="btn-block btn-fill btn btn-info d-inline-block">
                                                Ocultar
                                            </button>
                                        @else
                                            <button onclick="changeVisibility({{$article->id}}, 1)" class="btn-block btn-fill btn btn-success d-inline-block">
                                                Mostrar
                                            </button>
                                        @endif
                                        <a href="{{route('dashboard-edit-article', ['id' => $article->id])}}" class="btn-block btn-fill mt-2 mb-2 btn btn-primary d-inline-block">
                                            Editar
                                        </a>
                                        <form class="d-inline-block w-100" action="{{route('dashboard-delete-article', ['id' => $article->id])}}">
                                            <button class="btn-fill btn btn-danger btn-block" type="submit">Eliminar</button>
                                        </form>
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
    <script>
          function changeVisibility(articleId, visibility) {
            console.log(JSON.parse(visibility));
            fetch("{{route('dashboard-article-visibility')}}", {
              method: 'PUT',
              body: JSON.stringify({visibility: visibility, articleId: articleId}),
              headers:{
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            }).then(res => res.text())
            .catch(error => console.error('Error:', error))
            .then(res => {
              if (res !== '') {
                Swal.fire(
                    'Articulo actualizado',
                    res,
                    'success'
                ).then( () => {
                  location.reload()
                });
              }

            });
          }
    </script>
@stop

