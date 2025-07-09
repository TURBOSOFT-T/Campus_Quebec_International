@extends('front.fixe')
@section('titre', 'A propos de nous')
@section('body')

@php
    $config = DB::table('configs')->first();

           
           
        

@endphp
    <main>


        <body>

            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Page Header Box Start -->
                            <div class="page-header-box">
                                <h1 class="text-anime-style-2" data-cursor="-opaque">
                                    {{ \App\Helpers\TranslationHelper::TranslateText('A propos de nous') }}</h1>
                                <nav class="wow fadeInUp">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a
                                                href="./">{{ \App\Helpers\TranslationHelper::TranslateText('Home') }}</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            {{ \App\Helpers\TranslationHelper::TranslateText('A propos de nous') }}</li>
                                    </ol>
                                </nav>
                            </div>
                            <!-- Page Header Box End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->

            <!-- About Us Start -->
            <div class="about-us page-about-us">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <!-- About Image Start -->
                            <div class="about-us-image">
                                <div class="about-img">
                                    <figure class="reveal image-anime">
                                        <img {{-- src="images/about-img.jpg" --}}src="{{ Storage::url($config->imageenteteabout) }}" alt="">
                                    </figure>

                                    <!-- Company Experience Box Start -->
                                    <div class="company-experience">
                                        <div class="icon-box">
                                            <img src="images/icon-experience.svg" alt="">
                                        </div>
                                        <div class="company-experience-content">
                                            <h3><span class="counter"> {{ \App\Helpers\TranslationHelper::TranslateText($config->annees_experience) }}</span>+</h3>
                                            <p> {{ \App\Helpers\TranslationHelper::TranslateText('années d\'experience') }}</p>
                                        </div>
                                    </div>
                                    <!-- Company Experience Box End -->
                                </div>
                            </div>
                            <!-- About Image End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- About Us Content Start -->
                            <div class="about-content">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h3 class="wow fadeInUp">
                                        {{ \App\Helpers\TranslationHelper::TranslateText('A propos de nous') }}</h3>
                                  {{--   <h2 class="text-anime-style-2" data-cursor="-opaque">We Are The Best For
                                        <span>Physiotherapy</span></h2> --}}
                                    <p class="wow fadeInUp" data-wow-delay="0.25s">   {!! \App\Helpers\TranslationHelper::TranslateText($config->des_apropos ?? '') !!}</p>
                                </div>
                                <!-- Section Title End -->

                                <!-- About Us Body Start -->
                                <div class="about-us-body">
                                    <!-- About List Item Start -->
                                    <div class="about-list-item wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="icon-box">
                                            <img src="images/icon-about-us-1.svg" alt="">
                                        </div>
                                        <div class="about-list-content">
                                            <h3>nutrition strategies</h3>
                                        </div>
                                    </div>
                                    <!-- About List Item End -->

                                    <!-- About List Item Start -->
                                    <div class="about-list-item wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="icon-box">
                                            <img src="images/icon-about-us-2.svg" alt="">
                                        </div>
                                        <div class="about-list-content">
                                            <h3>be pro active</h3>
                                        </div>
                                    </div>
                                    <!-- About List Item End -->

                                    <!-- About List Item Start -->
                                    <div class="about-list-item wow fadeInUp" data-wow-delay="0.75s">
                                        <div class="icon-box">
                                            <img src="images/icon-about-us-3.svg" alt="">
                                        </div>
                                        <div class="about-list-content">
                                            <h3>workout routines</h3>
                                        </div>
                                    </div>
                                    <!-- About List Item End -->

                                    <!-- About List Item Start -->
                                    <div class="about-list-item wow fadeInUp" data-wow-delay="0.75s">
                                        <div class="icon-box">
                                            <img src="images/icon-about-us-4.svg" alt="">
                                        </div>
                                        <div class="about-list-content">
                                            <h3>support & motivation</h3>
                                        </div>
                                    </div>
                                    <!-- About List Item End -->
                                </div>
                                <!-- About Us Body End -->

                                <!-- About Us Footer Start -->
                                <div class="about-us-footer">
                                    <!-- Doctor Info Start -->
                                    <div class="doctor-info wow fadeInUp" data-wow-delay="1s">
                                        <div class="doctor-info-item">
                                            <div class="image-box">
                                                <figure class="image-anime">
                                                    <img src="images/about-doctor-img.jpg" alt="">
                                                </figure>
                                            </div>
                                            <div class="doctor-info-content">
                                                <h3>dr. jamie smith</h3>
                                                <p>Physiotherapy</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Doctor Info End -->

                                    <!-- Appointment Button Start -->
                                    <div class="appointment-btn wow fadeInUp" data-wow-delay="1s">
                                        <a href="#" class="btn-default">Make an appointment</a>
                                    </div>
                                    <!-- Appointment Button End -->
                                </div>
                                <!-- About Us Footer End -->
                            </div>
                            <!-- About Us Content End -->
                        </div>
                    </div>
                </div>
            </div>
            <!--  About Us End -->

            <!-- Company Counter Start -->
            <div class="company-counter">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <!-- Company Counter Item Start -->
                            <div class="company-counter-item">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="images/icon-counter-1.svg" alt="">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Company Counter Content Start -->
                                <div class="company-counter-content">
                                    <h3><span class="counter">78</span>+</h3>
                                    <p>skilled therapist</p>
                                </div>
                                <!-- Company Counter Content End -->
                            </div>
                            <!-- Company Counter Item End -->
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <!-- Company Counter Item Start -->
                            <div class="company-counter-item">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="images/icon-counter-2.svg" alt="">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Company Counter Content Start -->
                                <div class="company-counter-content">
                                    <h3><span class="counter">98</span>%</h3>
                                    <p>success rate</p>
                                </div>
                                <!-- Company Counter Content End -->
                            </div>
                            <!-- Company Counter Item End -->
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <!-- Company Counter Item Start -->
                            <div class="company-counter-item">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="images/icon-counter-3.svg" alt="">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Company Counter Content Start -->
                                <div class="company-counter-content">
                                    <h3><span class="counter">950</span>+</h3>
                                    <p>patients treated</p>
                                </div>
                                <!-- Company Counter Content End -->
                            </div>
                            <!-- Company Counter Item End -->
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <!-- Company Counter Item Start -->
                            <div class="company-counter-item">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="images/icon-counter-4.svg" alt="">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Company Counter Content Start -->
                                <div class="company-counter-content">
                                    <h3><span class="counter">78</span>+</h3>
                                    <p>Skilled Therapist</p>
                                </div>
                                <!-- Company Counter Content End -->
                            </div>
                            <!-- Company Counter Item End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Company Counter End -->

            <!-- Mission Vision Start -->
            <div class="mission-vision">
                <div class="container">
                    <div class="row section-row">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            {{-- <h3 class="wow fadeInUp">vision to victory</h3> --}}
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>
                             {{ \App\Helpers\TranslationHelper::TranslateText('Nous sommes un leader reconnu') }}    
                            </span> 
                                 {{ \App\Helpers\TranslationHelper::TranslateText('en immigration') }}</h2>
                        </div>
                        <!-- Section Title End -->
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <!-- Mva Item Start -->
                            <div class="our-mva-item wow fadeInUp">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="images/icon-our-mission.svg" alt="">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Mva Content Start -->
                                <div class="mva-item-content">
                                    <h3>
                                        {{ \App\Helpers\TranslationHelper::TranslateText('Notre mission') }}
                                    </h3>
                                    <p>   {!! \App\Helpers\TranslationHelper::TranslateText($config->des_apropos1 ?? '') !!}</p>
                                </div>
                                <!-- Mva Content End -->
                            </div>
                            <!-- Mva Item End -->
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <!-- Mva Item Start -->
                            <div class="our-mva-item wow fadeInUp" data-wow-delay="0.25s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="images/icon-our-vision.svg" alt="">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Mva Content Start -->
                                <div class="mva-item-content">
                                    <h3>
                                        {{ \App\Helpers\TranslationHelper::TranslateText('Notre vision') }}
                                    </h3>
                                    <p>   {!! \App\Helpers\TranslationHelper::TranslateText($config->des_apropos2 ?? '') !!}</p>
                                </div>
                                <!-- Mva Content End -->
                            </div>
                            <!-- Mva Item End -->
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <!-- Mva Item Start -->
                            <div class="our-mva-item wow fadeInUp" data-wow-delay="0.5s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="images/icon-our-approch.svg" alt="">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Mva Content Start -->
                                <div class="mva-item-content">
                                   <h3>
                                        {{ \App\Helpers\TranslationHelper::TranslateText('Notre objectif') }}
                                    </h3>
                                    <p>   {!! \App\Helpers\TranslationHelper::TranslateText($config->des_apropos3 ?? '') !!}</p>
                                </div>
                                <!-- Mva Content End -->
                            </div>
                            <!-- Mva Item End -->
                        </div>
                    </div>

                    <!-- Call To Action Start -->

                    <!-- Call To Action End -->
                </div>
            </div>
            <!-- Mission Vision End -->


            <!-- Therapy Process Start -->
            <div class="therapy-process">
                <div class="container">
                    <div class="row section-row">
                        <div class="col-lg-12">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                {{-- <h3 class="wow fadeInUp">therapy process</h3> --}}
                                <h2 class="text-anime-style-2" data-cursor="-opaque"> {{ \App\Helpers\TranslationHelper::TranslateText('Quel est le processus? ') }}
                                </h2>
                            </div>
                            <!-- Section Title End -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <!-- Therapy Process Item Start -->
                            <div class="therapy-process-item wow fadeInUp">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <figure class="image-anime">
                                        <img src="images/therapy-process-1.jpg" alt="">
                                    </figure>
                                </div>
                                <!-- Icon Box End -->

                                <!-- Therapy Process Content Start -->
                                <div class="therapy-process-content">
                                    <h3>get paired with a therapist</h3>
                                    <p>We understand that injuries and acute pain can happen unexpectedly.</p>
                                </div>
                                <!-- Therapy Process Content End -->
                            </div>
                            <!-- Therapy Process Item End -->
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <!-- Therapy Process Item Start -->
                            <div class="therapy-process-item wow fadeInUp" data-wow-delay="0.25s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <figure class="image-anime">
                                        <img src="images/therapy-process-2.jpg" alt="">
                                    </figure>
                                </div>
                                <!-- Icon Box End -->

                                <!-- Therapy Process Content Start -->
                                <div class="therapy-process-content">
                                    <h3>choose your preferred way to receive care</h3>
                                    <p>We understand that injuries and acute pain can happen unexpectedly.</p>
                                </div>
                                <!-- Therapy Process Content End -->
                            </div>
                            <!-- Therapy Process Item End -->
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <!-- Therapy Process Item Start -->
                            <div class="therapy-process-item wow fadeInUp" data-wow-delay="0.5s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <figure class="image-anime">
                                        <img src="images/therapy-process-3.jpg" alt="">
                                    </figure>
                                </div>
                                <!-- Icon Box End -->

                                <!-- Therapy Process Content Start -->
                                <div class="therapy-process-content">
                                    <h3>we help you get better, faster!</h3>
                                    <p>We understand that injuries and acute pain can happen unexpectedly.</p>
                                </div>
                                <!-- Therapy Process Content End -->
                            </div>
                            <!-- Therapy Process Item End -->
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <!-- Therapy Process Item Start -->
                            <div class="therapy-process-item wow fadeInUp" data-wow-delay="0.75s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <figure class="image-anime">
                                        <img src="images/therapy-process-4.jpg" alt="">
                                    </figure>
                                </div>
                                <!-- Icon Box End -->

                                <!-- Therapy Process Content Start -->
                                <div class="therapy-process-content">
                                    <h3>what psychotherapy can help with</h3>
                                    <p>We understand that injuries and acute pain can happen unexpectedly.</p>
                                </div>
                                <!-- Therapy Process Content End -->
                            </div>
                            <!-- Therapy Process Item End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Therapy Process End -->


       
            <!-- Our Scrolling Ticker Section Start -->
            <div class="our-scrolling-ticker">
                <!-- Scrolling Ticker Start -->
                <div class="scrolling-ticker-box">
                    <div class="scrolling-content">
                        <span><img src="images/icon-sparkles.svg" alt="">Emergency No. : {{ $config->telephone }}</span>
                        <span><img src="images/icon-sparkles.svg" alt="">For any additional inqueries :
                            {{ $config->email }}</span>
                        <span><img src="images/icon-sparkles.svg" alt="">Book Appointment: {{ $config->telephone }}</span>
                        <span><img src="images/icon-sparkles.svg" alt="">Working Hourse : Mon to Fri : 10:00 To
                            6:00 </span>
                    </div>

                    
                </div>
            </div>
            <!-- Scrolling Ticker Section End -->

        </body>

        </html>


    </main>
@endsection
