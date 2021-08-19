@extends('admin.blank')

@section('content')
    <!-- RIBBON -->
    <div id="ribbon">
        <!-- breadcrumb -->
        <ol class="breadcrumb">
            <li>Home</li>
            <li>Puntos de Venta</li>
        </ol>
        <!-- end breadcrumb -->
    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark">

                    <!-- PAGE HEADER -->
                    <i class="fa-fw fa fa-cubes"></i>
                        Puntos de Venta
                </h1>
            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

        <!-- FORM -->
        <form id="form" method="post" action="/admin/brands">
            {{ csrf_field() }}
        </form>
        <!-- FORM -->

        <!-- IMAGENES -->
        @include('admin.modals.edit')
        <textarea id="formImagen" style="display: none">@include('admin.sliders._form-modal')</textarea>
        @include('admin.components.images-uploader', ['model' => $slider, 'resource' => 'brands'])
        <div class="widget-footer smart-form">
            <div class="btn-group">
                <a href="javascript: window.history.back();" class="btn btn-sm btn-default" style="margin-right: 10px">
                    Cancelar
                </a>
                <button class="btn btn-sm btn-success saveForm" type="submit">
                    Guardar
                </button>
            </div>
        </div>
        <!-- /IMAGENES -->

    </div>
    <!-- END MAIN CONTENT -->
@endsection

@section('scripts')
    <script src="/js/admin/plugin/jquery-form/jquery-form.min.js"></script>
    <script src="/js/admin/brands.js"></script>
@endsection
