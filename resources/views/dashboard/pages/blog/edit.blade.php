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

                        <a href="{{route('dashboard-blog')}}" class="btn-fill btn btn-success mb-5">
                            Volver
                        </a>

                    </h4>
                </div>
                <div class="card-body">
                    <form class="container" enctype='multipart/form-data' method="post" action="{{route('dashboard-update-article', ['id' => $article->id])}}" >
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Titulo del articulo</label>
                                    <input type="text" class="form-control" placeholder="" name="title" value="{{$article->title}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Creador</label>
                                    <select class="form-control" name="creator_id" id="">
                                        @foreach ($creators as $creator)
                                            <option {{ ($article->creator_id === $creator->id) ? 'selected' : '' }} value="{{ $creator->id }}">{{ $creator->userName }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group bannerDiv">
                                <label class="">Banner del articulo</label>
                                <input type="file" class="form-control banner-input" name="banner">

                                <div class="bannerAgregado">
                                    <label class="mt-3" for="">Banner seleccionado</label><br>
                                    <div class="mt-5 mb-4 bannerAgregadoDiv">
                                        <img src="{{$article->image->path}}" class="bannerImage" style="width: 100%; height: 450px; border-radius: 0.25em;" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group" id="selectPickerContainer">
                                    <label class="d-block">Tags</label>
                                    <select class="container-select d-block form-control" name="tags_id[]" id="selectTag" multiple title="Selecciona una categoria">
                                        @foreach ($tags as $tag)
                                            <option @if(in_array($tag->id, $article->tags->pluck('id')->toArray())) selected @endif value="{{ $tag->id }}">{{ $tag->title }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Contenido del articulo</label>
                                    <textarea name="content" id="" class="form-control wygiwys" cols="60" rows="10">{!! $article->content !!}</textarea>
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
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.7/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('dashboard/js/selectpicker.controller.js') }}"></script>
    <script>
      //Clase que le pasas un array con el id del select y si tiene mas de 10 options, te lo transforma en selectpicker
      $(function () {
        new SelectpickerController(['selectTag'], 'No hay mas categorias');
      });
    </script>

    <script>
      tinymce.init({
        selector: 'textarea.wygiwys',
        plugins: [
          'link',
        ],
        toolbar: 'bold italic | link',
      });
    </script>

    <script>
      let imagenBannerInput = document.querySelector('.banner-input');
      let imgInput = document.querySelector('.banner-input');
      let bannerImage = document.querySelector('.bannerImage')
      let divBannerAgregado = document.querySelector('.bannerAgregado')

      if (imagenBannerInput) {
        imagenBannerInput.addEventListener('change', function () {
          if (imgInput.files) {
            divBannerAgregado.classList.remove('d-none')
            const element = imgInput.files[0];
            let fr = new FileReader();
            fr.onload = function(e) {
              bannerImage.src = this.result;
            };
            fr.readAsDataURL(element);
          }
        });
      }
    </script>
@stop

