@extends('admin.app')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li>Home</li><li>Quiénes Somos</li>
    </ol>
@endsection

@section('title')
    <i class="fa-fw fa fa-info-circle"></i> Quiénes Somos 
@endsection

@section('header-buttons')
    <a href="/admin/abouts/1/edit" class="btn btn-success pull-right"><span class="fa fa-plus"></span> Editar</a>
@endsection

@section('widget-title')
    <h2>Quiénes Somos</h2>
@endsection

@section('widget-body')
    <form action="/admin/abouts/1" id="form" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="row" style="padding: 20px 40px">
            <div class="col-md-4">
                <div class="vista-previa imagenUploader">
                    <a style="display: none" data-src="/content/abouts/{{$about->image->src}}" class="btn btn-mini btn-danger borrarImagen" data-id="{{$about->image->id}}"><i class="fa fa-trash-o"></i></a>
                    <p class="info"><i style="display: none" class="fa fa-circle-o-notch fa-spin"></i> <span>Click para cargar la imagen</span></p>
                    <img style="cursor: pointer;" class="img-responsive inputFileDispacher" src="/content/abouts/thumb/{{$about->image->src}}">
                </div>
            </div>
            <div class="col-md-8">
                <h1>{{ $about->title }}</h1>
                <textarea rows="8" class="form-control" name="label">{{ $about->label }}</textarea>
            </div>
        </div>
        <input type="hidden" name="image_id" value="">
    </form>
    @include('admin.partials._widget-footer')
@endsection

@section('scripts')
    <script src="/js/admin/plugin/jquery-form/jquery-form.min.js"></script>
    <script src="/js/admin/ajaxImagesUploader.js"></script>
    <script src="/js/admin/about.js"></script>
@endsection