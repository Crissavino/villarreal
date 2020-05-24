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

                        <a href="{{route('dashboard-blog')}}" class="btn-fill btn btn-success mb-5">
                            Ver articulos
                        </a>
    
                        <a href="{{route('dashboard-add-tag')}}" class="btn-fill btn btn-success mb-5">
                            Crear nuevo tag
                        </a>

                    </h4>
                </div>
                <div class="card-body">
                    
                    <div class="row">

                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titulo</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($tags as $tag)
                                    <tr>
                                        <th scope="row">{{$tag->id}}</th>
                                        <td>{{$tag->title}}</td>
                                        <td>
                                            <a href="{{route('dashboard-edit-tag', ['id' => $tag->id])}}" class="btn btn-primary btn-fill">
                                                Editar
                                            </a>
                                        </td>
                                        <td>
                                            <form class="d-inline-block w-100" method="post" action="{{route('dashboard-delete-tag', ['id' => $tag->id])}}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn-fill btn btn-danger" type="submit">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                          </table>

                            
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

