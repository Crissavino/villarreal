@extends('dashboard.layouts.app')

@section('content')
    @if(count($errors) !== 0)
        <div class="alert alert-danger" role="alert">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>

        </div>
    @endif

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

                        <a href="{{route('dashboard-tags')}}" class="btn-fill btn btn-success mb-5">
                            Volver
                        </a>

                    </h4>
                </div>
                <div class="card-body">
                    <form class="container" method="post" action="{{route('dashboard-update-tag', ['id' => $tag->id])}}" >
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Titulo del tag</label>
                                    <input type="text" class="form-control" placeholder="" name="title" value="{{$tag->title}}">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info btn-fill btn-block">Guardar tag</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('javascript')

@stop

