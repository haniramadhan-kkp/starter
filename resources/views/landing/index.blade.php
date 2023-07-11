@extends('landing.layouts.main')
@section('container')
    <!-- slider-area -->
    <section id="home" class="slider-area fix p-relative">
        <div class="slider-active">
            @php
                $images = ['/img/Banner_05.jpg', '/img/Banner_01.jpg', '/img/Banner_02.jpg', '/img/Banner_03.jpg', '/img/Banner_04.jpg'];
            @endphp

            @foreach ($images as $image)
                <div class="single-slider slider-bg d-flex align-items-center"
                    style="
                background-image: url('<?php echo $image; ?>');
            ">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-2"></div>
                            <div class="col-xl-8">
                                <div class="slider-content s-slider-content text-center">
                                    <h2 data-animation="fadeInUp" data-delay=".4s">
                                        Registrasi anggota <span>Ispikani</span>
                                    </h2>
                                    <p data-animation="fadeInUp" data-delay=".6s">
                                        Bagi anggota lama maupun anggota baru, dihimbau untuk
                                        melakukan registrasi anggota melalui tombol di bawah ini
                                    </p>
                                    <div class="slider-btn mt-55">
                                        <a href="{{ Route('register') }}" class="btn ss-btn" data-animation="fadeInRight"
                                            data-delay=".8s">Register</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2"></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a href="#about" class="down-arrow smoth-scroll"><i class="fas fa-long-arrow-alt-down"></i></a>
    </section>
@endsection
