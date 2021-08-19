@extends('admin.app')

@section('head')
    <link rel="stylesheet" type="text/css" href="/js/admin/plugin/bootstrap-select/bootstrap-select.css">
     <style type="text/css">
        /*bootstrap select*/
        .bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
            width: 100% !important;
        }
        .bootstrap-select.btn-group .btn .filter-option {padding: 4px 12px}
        [class^="mbri-"], [class*=" mbri-"] {font-size: 20px; font-weight: bold; margin-right: 5px}
    </style>
@endsection

@section('breadcrumb')
    <ol class="breadcrumb">
        <li>Home</li>
        <li><a href="/admin/servicies">Informacion</a></li>
        <li>{{ $viewConfig['accion'] }}</li>
    </ol>
@endsection

@section('title')
    <i class="fa-fw fa fa-cogs"></i> Informacion
    <sapn>&gt; {{ $viewConfig['accion'] }}</span>
@endsection

@section('widget-title')
    <h2>{{ $viewConfig['accion'] }}</h2>
@endsection

@section('widget-body')
    {!! Form::model($service, $formOptions) !!}
        <fieldset>
            <legend>Datos</legend>
            <div class="row">
                <section class="col col-md-8 col-sm-12 col-xs-12">
                    <label class="label">Nombre:</label>
                    <label class="input">
                        {!! Form::text('title', null, ['autofocus']) !!}
                    </label>
                </section>
                <section class="col col-md-4 col-sm-12 col-xs-12">
                    <label class="label">Ícono:</label>
                    <label class="input">
                        {!! \App\Classes\Icon::toSelect($service) !!}
                    </label>
                </section>
            </div>
        </fieldset>
        <fieldset>
            <legend>Descripción</legend>
            <div class="row">
                <section class="col col-md-12 col-sm-12 col-xs-12">
                    <label class="label">Descripción:</label>
                    <label class="textarea">
                        {!! Form::textarea('label', null) !!}
                    </label>
                </section>
            </div>
        </fieldset>
    {!! Form::close() !!}

    @include('admin.partials._widget-footer')
@endsection

@section('scripts')
    <script src="/js/admin/plugin/bootstrap-select/bootstrap-select.js"></script>
    <script src="/js/admin/service.js"></script>
@endsection
