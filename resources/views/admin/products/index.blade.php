@extends('admin.app')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li>Home</li><li>Productos</li>
    </ol>
@endsection

@section('title')
    <i class="fa-fw fa fa-th-large"></i> Productos
    <sapn>&gt; Listado</span>
@endsection

@section('header-buttons')
    <a href="/admin/products/create" class="btn btn-success pull-right"><span class="fa fa-plus"></span> Agregar</a>
@endsection

@section('widget-title')
    <h2>Listado de Productos</h2>
@endsection

@section('widget-body')
    <table id="datatable" class="table table-striped table-hover" width="100%">
        <thead>
            <tr>
                <th>Imagen</th>
                <th>Marca</th>
                <th>Código</th>
                <th>Vencimiento</th>
                <th>Estado</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody><!--Datatable--></tbody>
    </table>
@endsection

@section('scripts')
    <script src="/js/admin/products.js"></script>
@endsection
