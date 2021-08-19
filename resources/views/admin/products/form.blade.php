@extends('admin.app')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li>Home</li>
        <li><a href="/admin/products">Productos</a></li>
        <li>{{ $viewConfig['accion'] }}</li>
    </ol>
@endsection

@section('title')
    <i class="fa-fw fa fa-th-large"></i> Productos
    <sapn>&gt; {{ $viewConfig['accion'] }}</span>
@endsection

@section('widget-title')
    <h2>{{ $viewConfig['accion'] }}</h2>
@endsection

@section('widget-body')
    {!! Form::model($product, array_merge($formOptions, ['autocomplete' => 'off'])) !!}
        <fieldset>
            <legend>Datos</legend>
            <div class="row">
                <section class="col col-md-6 col-sm-6 col-xs-12">
                    <label class="label">Marca:</label>
                    <label class="input">
                        {!! Form::text('name', null, ['autofocus']) !!}
                    </label>
                </section>
                <section class="col col-md-6 col-sm-6 col-xs-12">
                    <label class="label">Descripción imagen:</label>
                    <label class="input">
                        {!! Form::text('label', null) !!}
                    </label>
                </section>
                
            </div>
            <div class="row">
                <section class="col col-md-3 col-sm-12 col-xs-12">
                    <label class="label">Vencimiento:</label>
                    <label class="input">
                        {!! Form::text('expiration', null) !!}
                    </label>
                </section>
                <section class="col col-md-3 col-sm-12 col-xs-12">
                    <label class="label">Código:</label>
                    <label class="input">
                        {!! Form::text('code', null) !!}
                    </label>
                </section>
                <section class="col col-md-3 col-sm-12 col-xs-12">
                    <label class="label">Categoría:</label>
                    <label class="select">
                        {!! Form::select('category_id', $categories) !!}
                        <i></i>
                    </label>
                </section>
                <section class="col col-md-3 col-sm-12 col-xs-12">
                    <label class="label">Estado:</label>
                    <label class="select">
                        {!! Form::select('is_visible', ['1'=>'Visible', '0'=>'Oculto']) !!}
                        <i></i>
                    </label>
                </section>
            </div>
        </fieldset>
        <fieldset>
            <legend>Descripción</legend>
            <div class="row">
                <section class="col col-md-12 col-sm-12 col-xs-12">
                    <label class="label">Descripción del producto:</label>
                    <label class="textarea">
                        {!! Form::textarea('description', null) !!}
                    </label>
                </section>
            </div>
        </fieldset>
    {!! Form::close() !!}

    @include('admin.partials._widget-footer')
@endsection

@section('extra-content')
    @include('admin.components.images-uploader', ['model' => $product, 'resource' => 'products'])
@endsection

@section('scripts')
    <script src="/js/admin/plugin/jquery-form/jquery-form.min.js"></script>
    <script src="/js/admin/product.js"></script>
@endsection
