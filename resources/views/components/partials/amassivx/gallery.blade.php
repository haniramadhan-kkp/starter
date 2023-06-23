<section id="work" class="pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title wow fadeInDown animated mb-80 text-center" data-animation="fadeInDown animated"
                    data-delay=".2s">
                    <span>Best Work</span>
                    <h2>My Recent Portfolio</h2>
                </div>
            </div>
        </div>
        <div class="portfolio wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
            <div class="my-masonry mb-30">
                <div class="button-group filter-button-group text-center">
                    {{ $filterlist }}
                </div>
            </div>

            <div class="col3 grid">
                {{ $slot }}
            </div>
        </div>
    </div>
</section>
