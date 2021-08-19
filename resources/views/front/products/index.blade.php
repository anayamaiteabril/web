@extends('front.app')

@section('navbar')
    @include('front.navbars.products')
@endsection

@section('content')
    @include('front.partials.banner')

    <!-- PRODUCTS -->
    <section class="section text-center" id="products">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Nuestros <span class="font-weight-bold">Productos</span></h2>
                    </div>
                </div>
            </div>
            @if ($products->count())
                <div class="row mt-5 ">
                    <ul class="col list-unstyled list-inline mb-0 text-uppercase work_menu" id="products-filter">
                        <li class="list-inline-item"><a class="{{$categorySlug ? '' : 'active'}}" data-filter="*">Todos</a></li>
                        @foreach ($categories as $category)
                            @php
                                $active = ($categorySlug == $category->slug) ? 'active' : '';
                            @endphp
                            <li class="list-inline-item">
                                <a class="{{$active}}" data-filter=".{{$category->slug}}">{{$category->value}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="container">
            <div class="row mt-4 work-filter">
                @each ('front.products._product', $products, 'product', 'front.products._empty')
            </div>
        </div>
    </section>
    <!-- /PRODUCTS -->

    @include('front.partials.products')
@endsection


@push('scripts')
    <script>
        var filer = '{{$categorySlug ? ".$categorySlug" : '*'}}'
        $(window).on('load', function () {
            var $container = $('.work-filter');
            var $filter = $('#products-filter');
            $container.isotope({
                filter: filer,
                layoutMode: 'masonry',
                animationOptions: {
                    duration: 750,
                    easing: 'linear'
                }
            });

            $filter.find('a').on("click",function() {
                var selector = $(this).attr('data-filter');
                var cat = (selector == '*') ? '' : selector.replace('.', '');
                history.pushState({}, cat, '/productos/' + cat + '#products');
                $filter.find('a').removeClass('active');
                $(this).addClass('active');
                $container.isotope({
                    filter: selector,
                    animationOptions: {
                        animationDuration: 750,
                        easing: 'linear',
                        queue: false,
                    }
                });
                return false;
            });
        });
    </script>
@endpush