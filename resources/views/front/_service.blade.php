<div class="col-lg-4">
    <div class="text-center services-boxes rounded p-4 mt-4">
        <div class="services-boxes-icon">
            <i class="{{$service->icon}} text-custom display-4"></i>
        </div>
        <div class="mt-4">
            <h5 class="mb-0">{{ $service->title }}</h5>
            <div class="services-title-border"></div>
            <p class="text-muted mt-3">{!! nl2br($service->label) !!}</p>
        </div>
    </div>
</div>