@extends('dashboard.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">



                    </h4>
                </div>
                <div class="card-body">
                    <form class="container" method="post" action="{{route('dashboard-store-article')}}" >
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Titulo del articulo</label>
                                    <input type="text" class="form-control" placeholder="" name="title" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Creador</label>
                                    <select class="form-control" name="creator_id" id="">
                                        <option value="">Fernando</option>
                                        <option value="">Luis</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tags</label>
                                    <select class="form-control" name="tag_id" id="">
                                        <option value="">Penal</option>
                                        <option value="">Penal</option>
                                        <option value="">Civil</option>
                                        <option value="">Civil</option>
                                        <option value="">Comercial</option>
                                        <option value="">Comercial</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Contenido del articulo</label>
                                    <textarea name="content" id="" class="form-control wygiwys" cols="60" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info btn-fill btn-block">Guardar articulo</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('javascript')
    <script src="https://cdn.tiny.cloud/1/ygcv1k1au534orpgc1mejstobl25vaojyinr3cg7d0ronmb0/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: 'textarea.wygiwys',
        plugins: [
          'link',
        ],
        toolbar: 'bold italic | link',
      });
    </script>
@stop

