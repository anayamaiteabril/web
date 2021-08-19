<div class="col-lg-3 work_item {{$product->category->slug}}">
    {{-- <a href="/content/products/big/{{$product->thumb}}" class="img-zoom"> --}}
    <a href="/productos/{{$product->category->slug}}/{{$product->slug}}#product">
        <div class="work_box">
            <div class="work_img">
                <img src="/content/products/800x533/{{$product->thumb}}" class="img-fluid mx-auto d-block rounded" alt="work-img">
            </div>
            <div class="work_detail">
                <p class="mb-2">{{$product->label}}</p>
                {{--<h4 class="mb-0">{{$product->description}}</h4>--}}
            </div>
        </div>
    </a>
    <p><a href="/productos/{{$product->category->slug}}/{{$product->slug}}#product">Ver oferta</a></p>
</div>