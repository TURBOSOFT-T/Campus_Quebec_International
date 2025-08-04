@extends('front.fixe')
@section('titre', 'Contact')
@section('body')
@php
$config = DB::table('configs')->first();
$service = DB::table('services')->get();
$produit = DB::table('produits')->get();
@endphp
<main>


    <!-- Page Header Start -->
 {{--    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">
                            {{ \App\Helpers\TranslationHelper::TranslateText('Nous Contactez') }}
                        </h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">{{ \App\Helpers\TranslationHelper::TranslateText('Accueil') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ \App\Helpers\TranslationHelper::TranslateText('nous contactez') }}
                                </li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div> --}}
    <!-- Page Header End -->

    <!-- Page Contact Start -->
    <div class="page-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Contact Info Item Start -->
                    <div class="contact-info-item wow fadeInUp">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="images/icon-green-location.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Contact Info Content Start -->
                        <div class="contact-info-content">
                            <h3> {{ \App\Helpers\TranslationHelper::TranslateText('Location') }}</h3>
                            <p>{{ $config->addresse }}</p>
                        </div>
                        <!-- Contact Info Content End -->
                    </div>
                    <!-- Contact Info Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Contact Info Item Start -->
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="images/icon-green-mail.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Contact Info Content Start -->
                        <div class="contact-info-content">
                            <h3>email</h3>
                            <p>
                                <a style="color: #606262;" href="mailto:tim.jennings@example.com">{{ $config->email }}</a>

                            </p>

                        </div>
                        <!-- Contact Info Content End -->
                    </div>
                    <!-- Contact Info Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Contact Info Item Start -->
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="images/icon-green-phone.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Contact Info Content Start -->
                        <div class="contact-info-content">
                            <h3>{{ \App\Helpers\TranslationHelper::TranslateText('Téléphone') }}</h3>
                            <p>
                                <a style="color: #606262;" href="https://wa.me/{{ preg_replace('/\D/', '', $config->telephone) }}" target="_blank">
                                    {{ $config->telephone }}
                                    <i class="fab fa-whatsapp"></i>

                                </a>
                                <p>
                                    {{-- <p>(+01) 789 854 856</p>
							<p>(+02) 895 867 781</p> --}}
                        </div>
                        <!-- Contact Info Content End -->
                    </div>
                    <!-- Contact Info Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Contact Info Item Start -->
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.75s">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="images/icon-green-hour.svg" alt="">
                        </div>
                        <!-- Icon Box End -->

                        <!-- Contact Info Content Start -->
                        <div class="contact-info-content">
                            <h3>
                                {{ \App\Helpers\TranslationHelper::TranslateText('Les horaires') }}
                            </h3>
                            <p>Mon to Fri : 10:00 To 6:00</p>
                            <p>Sat : 10:00AM To 3:00PM</p>
                        </div>
                        <!-- Contact Info Content End -->
                    </div>
                    <!-- Contact Info Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact End -->

    <!-- Contact Form Start -->
    <div class="contact-us-form">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Contact Us Image Start -->
                    <div class="contact-us-img">
                        <figure class="reveal image-anime">
                            <img src="{{ Storage::url($config->imagecontact) }}" alt="">
                        </figure>
                    </div>
                    <!-- Contact Us Image End -->
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="text-anime-style-2" data-cursor="-opaque"><span>{{ \App\Helpers\TranslationHelper::TranslateText('Vous avez des questions?') }} </span> {{ \App\Helpers\TranslationHelper::TranslateText(' Besoin d’un plan personnalisé ?') }}</h3>
                            <h3 class="wow fadeInUp">{{ \App\Helpers\TranslationHelper::TranslateText('Nous contactez') }}</h3>

                        </div>
                        <!-- Section Title End -->
                        @livewire('Front.ContactForm')

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form End -->

    <!-- Google Map Start -->
    <div class="google-map">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Google Map Iframe Start -->
                    <div class="google-map-iframe">

                        <div class="container-fluid px-0">
                            <div style="width: 100%; height: 400px;">


                                @if ($configs->localisation)
                                <iframe src="{{ $configs->localisation }}" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                @else
                                <p>

                                    {{ \App\Helpers\TranslationHelper::TranslateText('Aucune localisation disponible') }}
                                </p>
                                @endif

                            </div>
                        </div>

                    </div>
                    <!-- Google Map Iframe End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map End -->

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
