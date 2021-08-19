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
    <div class="row" style="padding: 20px 40px">
        <div class="col-md-4">
            <img class="img-responsive" src="/content/abouts/thumb/{{$about->image->src}}">
        </div>
        <div class="col-md-8">
            <h1>{{ $about->title }}</h1>
            <p>{!! nl2br($about->label) !!}</p>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('#left-panel li[data-nav="abouts"]').addClass('active');
        Box.small({title: 'Perfecto', content:'La sección se editó con éxito.'}).success().showIfHash('edit');
    </script>
@endsection