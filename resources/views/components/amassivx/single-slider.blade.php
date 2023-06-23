<div class="single-slider slider-bg d-flex align-items-center" style="background-image: url({{ $image }})">
    <div class="container">
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-8">
                <div class="slider-content s-slider-content text-center">
                    <h2 data-animation="fadeInUp" data-delay=".4s">
                        {{ $header }}
                    </h2>
                    <p data-animation="fadeInUp" data-delay=".6s">
                        {{ $description }}
                    </p>
                    <div class="slider-btn mt-55">
                        <a href="{{ $link }}" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">
                            {{ $button }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-2"></div>
        </div>
    </div>
</div>
