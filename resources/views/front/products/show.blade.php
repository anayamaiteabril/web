@extends('front.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="/js/plugin/fancybox/jquery.fancybox.css">
@endsection

@section('navbar')
    @include('front.navbars.products')
@endsection

@section('content')
    @include('front.partials.banner')

    <!-- PRODUCT -->
    <section class="section text-center" id="product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="owl-carousel owl-theme" id="images">
                        @forelse ($product->images as $image)
                            <div class="item">
                                <a class="fancybox" rel="gallery1" href="/content/products/big/{{$image->src}}">
                                    <img width="100%" src="/content/products/800x533/{{$image->src}}" alt="{{$product->name}}">
                                </a>
                            </div>
                        @empty
                            <img width="100%" src="/content/products/800x533/{{$product->thumb}}" alt="{{$product->name}}">
                        @endforelse
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="text-center">
                        <h2>
                            <span class="font-weight-bold">{{$product->name}}</span>
                        </h2>
                        <h4>{{$product->label}}</h4>
                        <p class="text-muted mx-auto section-subtitle mt-3">{{$product->description}}</p>
                        <h6>Oferta válida hasta:<i> {{$product->expiration}} </i> </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /PRODUCT -->
@endsection

@section('scripts')
    <script src="/js/plugin/fancybox/jquery.fancybox.pack.js"></script>
    <script>
        $('.fancybox').fancybox({
            padding:0,
            title: false
        });
        var $owl = $('.owl-carousel');
        $(document).ready(function () {
            function createCarousel (loop) {
                $owl.owlCarousel({
                    items:1,
                    margin:10,
                    lazyLoad:false,
                    center:true,
                    nav:true,
                    dots: true,
                    loop:loop,
                    autoHeight:true
                });
                $owl.on('resized.owl.carousel', function (event) {
                    var $this = $(this);
                    $this.find('.owl-height').css('height', $this.find('.owl-item.active').height());
                });
            }
            createCarousel($('#images .owl-item').length > 1);
        });
    </script>
@endsection
