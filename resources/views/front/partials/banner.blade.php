<!-- START HOME -->
<section class="section header-bg-img h-100vh" id="home" style="background-image: url('/content/sliders/big/{{$image->src}}')">
    <div class="bg-overlay"></div>
    <div class="header-table">
        <div class="header-table-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center header-content mx-auto">
                            <h1 id="titulo" class="header-name text-white text-capitalize mb-0">{{ $image->title }}</h1>
                            <p id="parrafo" class="text-white mx-auto header-desc mt-4">{!! nl2br($image->description) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    var datos = {!!$imgs!!};
</script>
<!-- END HOME -->
