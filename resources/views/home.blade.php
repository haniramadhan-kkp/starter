<x-base-layout>
    <!-- nav -->
    <x-partials.amassivx.nav />
    <!-- nav-end -->
    <!-- main-area -->
    <main>
        <!-- slider-area -->
        <x-partials.amassivx.slider>
            <x-amassivx.single-slider>
                <x-slot:image> /img/Banner_05.jpg </x-slot:image>
                <x-slot:header>
                    Registrasi anggota <span>Ispikani</span>
                </x-slot:header>

                <x-slot:description>
                    Bagi anggota lama maupun anggota baru, dihimbau untuk
                    melakukan registrasi anggota melalui tombol di bawah ini
                </x-slot:description>

                <x-slot:button> Bergabung bersama kami </x-slot:button>
                <x-slot:link>https://laravel.com/docs/10.x/blade#component-attributes</x-slot:link>
            </x-amassivx.single-slider>
        </x-partials.amassivx.slider>
        <!-- slider-area-end -->

        <div hidden>
            <!-- services-area -->
            <x-partials.amassivx.services>
                <div class="col-lg-4 col-md-6 mb-30">
                    <x-amassivx.single-service>
                        <x-slot:icon>
                            <i class="fal fa-tachometer-alt-fastest"></i>
                        </x-slot:icon>
                        <x-slot:header> Speed Optimization </x-slot:header>
                        <x-slot:description>
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed do eiusmod tempor inc ididunt ut labore.
                        </x-slot:description>
                        <x-slot:button>Read More</x-slot:button>
                        <x-slot:link>https://www.google.com/</x-slot:link>
                    </x-amassivx.single-service>
                </div>

                <div class="col-lg-4 col-md-6 mb-30">
                    <x-amassivx.single-service>
                        <x-slot:icon>
                            <i class="fal fa-tachometer-alt-fastest"></i>
                        </x-slot:icon>
                        <x-slot:header> Speed Optimization </x-slot:header>
                        <x-slot:description>
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed do eiusmod tempor inc ididunt ut labore.
                        </x-slot:description>
                        <x-slot:button>Read More</x-slot:button>
                        <x-slot:link>https://www.google.com/</x-slot:link>
                    </x-amassivx.single-service>
                </div>

                <div class="col-lg-4 col-md-6 mb-30">
                    <x-amassivx.single-service>
                        <x-slot:icon>
                            <i class="fal fa-tachometer-alt-fastest"></i>
                        </x-slot:icon>
                        <x-slot:header> Speed Optimization </x-slot:header>
                        <x-slot:description>
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed do eiusmod tempor inc ididunt ut labore.
                        </x-slot:description>
                        <x-slot:button>Read More</x-slot:button>
                        <x-slot:link>https://www.google.com/</x-slot:link>
                    </x-amassivx.single-service>
                </div>
            </x-partials.amassivx.services>

            <!-- services-area-end -->

            <!-- choose-area -->
            <x-partials.amassivx.choose />
            <!-- choose-area-end -->

            <!-- services-area -->
            <x-partials.amassivx.products>
                <div class="col-lg-4 col-md-6">
                    <x-amassivx.single-product>
                        <x-slot:icon><i class="fal fa-dice-d10"></i></x-slot:icon>
                        <x-slot:head>Pixel Perfect Design</x-slot:head>
                        <x-slot:body>Lorem ipsum dolor sit amet, ipsum consectetur
                            adipisicing elit, sed do eiusmod tempor inc ididunt
                            ut.</x-slot:body>
                    </x-amassivx.single-product>
                </div>
                <div class="col-lg-4 col-md-6">
                    <x-amassivx.single-product>
                        <x-slot:icon><i class="fal fa-dice-d10"></i></x-slot:icon>
                        <x-slot:head>Pixel Perfect Design</x-slot:head>
                        <x-slot:body>Lorem ipsum dolor sit amet, ipsum consectetur
                            adipisicing elit, sed do eiusmod tempor inc ididunt
                            ut.</x-slot:body>
                    </x-amassivx.single-product>

                </div>
            </x-partials.amassivx.products>
            <!-- services-area-end -->

            <!-- brand-area -->
            <x-partials.amassivx.brand>
                <div class="col-lg-2">
                    <x-amassivx.single-brand>
                        <x-slot:logo>img/brand/c-logo1.png</x-slot:logo>
                    </x-amassivx.single-brand>
                </div>
                <div class="col-lg-2">
                    <x-amassivx.single-brand>
                        <x-slot:logo>img/brand/c-logo1.png</x-slot:logo>
                    </x-amassivx.single-brand>
                </div>
            </x-partials.amassivx.brand>
            <!-- brand-area-end -->

            <!-- gallery-area -->
            <x-partials.amassivx.gallery>
                <x-slot:filterlist>
                    <button class="active" data-filter="*">All</button>
                    <button data-filter=".applications">Applications</button>
                    <button data-filter=".development">Development</button>
                    <button data-filter=".logo">Logo</button>
                    <button data-filter=".web-design">Web Design</button>
                </x-slot:filterlist>
                <x-amassivx.gallery-item>
                    <x-slot:image>
                        img/gallery/protfolio-img01.jpg
                    </x-slot:image>
                    <x-slot:alt>protfolio </x-slot:alt>
                    <x-slot:caption>Applications</x-slot:caption>
                    <x-slot:filter>applications</x-slot:filter>
                </x-amassivx.gallery-item>
                <x-amassivx.gallery-item>
                    <x-slot:image>
                        img/gallery/protfolio-img01.jpg
                    </x-slot:image>
                    <x-slot:alt>protfolio </x-slot:alt>
                    <x-slot:caption>Development</x-slot:caption>
                    <x-slot:filter>development</x-slot:filter>
                </x-amassivx.gallery-item>
            </x-partials.amassivx.gallery>
            <!-- gallery-area-end -->

            <!-- counter-area -->
            <x-partials.amassivx.counter>
                <x-amassivx.single-counter />
            </x-partials.amassivx.counter>
            <!-- counter-area-end -->

            <!-- pricing-area -->
            <x-partials.amassivx.pricing>
                <x-amassivx.single-pricing />
            </x-partials.amassivx.pricing>
            <!-- pricing-area-end -->

            <!-- team-area -->
            <x-partials.amassivx.team>
                <x-amassivx.single-team />
            </x-partials.amassivx.team>
            <!-- team-area-end -->

            <!-- testimonial-area -->
            <x-partials.amassivx.testimonial>
                <x-amassivx.single-testimonial />
            </x-partials.amassivx.testimonial>
            <!-- testimonial-area-end -->

            <!-- blog-area -->
            <x-partials.amassivx.latestblog>
                <x-amassivx.single-post />
            </x-partials.amassivx.latestblog>
            <!-- blog-area-end -->

            <!-- contact-area -->
            <x-partials.amassivx.contact> </x-partials.amassivx.contact>
            <!-- contact-area-end -->
        </div>
    </main>
    <!-- main-area-end -->
    <!-- footer -->
    <x-partials.amassivx.footer />
    <!-- footer-end -->

    <!-- JS here -->
    <x-partials.amassivx.jshere />
</x-base-layout>
