<div>
    <div class="card border-top  border-info Policies">
        <div class="card-header text-center  py-2">
            <h4 class="header-title">Policies
            </h4>
        </div>
        <div class="card-body pt-0">
            <div id="carouselExampleCaptions" class="carousel w-100 slide">
                <div class="carousel-indicators">
                    @foreach ($policies as $index => $policy)
                        <button type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"
                            aria-current="{{ $index == 0 ? 'true' : 'false' }}"
                            aria-label="Slide {{ $index + 1 }}"></button>
                    @endforeach
                </div>
                <div class="carousel-inner">
                    @foreach ($policies as $index => $policy)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}  text-center bg-light">
                            @foreach ($policy->files as $file)
                                <a href="{{ asset(AppConst::STORAGE . AppConst::EMPLOYEE_POLICIES . '/' . $file->path) }}"
                                    download="{{ $file->path }}" class="m-2">
                                    <div class="pb-2">
                                        <img src="{{ asset(AppConst::ASSET_IMAGES . '/PolicyManual.jpg') }} "
                                            alt="" width="200">
                                    </div>
                                </a>
                            @endforeach
                            <div class="carousel-caption d-none d-md-block mt-5">
                                <h5 class="text-dark">{{ $policy->title }}</h5>
                            </div>
                        </div>
                    @endforeach
                </div>
                @if (count($policies) > 1)
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="text-dark"><i class="ri-arrow-left-s-line fs-1"></i></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="text-dark"><i class="ri-arrow-right-s-line fs-1"></i></span>
                    </button>
                @endif
            </div>
        </div>
    </div>
</div>
