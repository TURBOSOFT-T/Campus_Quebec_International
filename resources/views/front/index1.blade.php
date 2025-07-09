@extends('layouts.layout1')


@section('titre', 'Accueil')
@php
$config = DB::table('configs')->first();
$service = DB::table('services')->get();
$produit = DB::table('produits')->get();
@endphp

@section('body')



<x-strickyHeader />
<x-sidebar />

<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/magnific-popup/dist/magnific-popup.css">

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/magnific-popup/dist/jquery.magnific-popup.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>


{{-- <script>
    $(document).ready(function() {
        $('.video-popup').magnificPopup({
            type: 'iframe'
            , mainClass: 'mfp-fade'
            , preloader: true
        });
    });

</script> --}}


<script>
$(document).ready(function() {
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' }
    });

    $('.video-popup').on('click', function(e) {
        e.preventDefault();

        const videoUrl = $(this).attr('href');
        const videoId = $(this).data('id');

        // Ouvrir la popup iframe avec la vidéo
        $.magnificPopup.open({
            items: { src: videoUrl },
            type: 'iframe',
            mainClass: 'mfp-fade',
            preloader: true
        });

        // Incrémenter le compteur de vues via AJAX
        $.post('/videos/' + videoId + '/view', {}, function(response) {
            if(response.success) {
                $('#views-count-' + videoId).text(response.views + ' vues');
            }
        });
    });
});
</script>





<section class="main-slider-two">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{
          "slidesPerView": 1,
          "loop": true,
          "effect": "fade",
          "pagination": {
            "el": "#main-slider-pagination",
            "type": "bullets",
            "clickable": true
          },
          "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
          },
          "autoplay": {
            "delay": 6000,
            "disableOnInteraction": false
          }
        }'>
        <div class="swiper-wrapper">
            @foreach ($banners as $banner)
            <div class="swiper-slide" style="background-image: url('{{ Storage::url($banner->image) }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <div class="container">
                    <div class="row align-items-center" style="min-height: 100vh;">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                            <div class="main-slider-two__content text-white">
                                <p class="main-slider-two__sub-title">


                                    {{ \App\Helpers\TranslationHelper::TranslateText($banner->titre ?? '') }}
                                </p>
                                <h2 class="main-slider-two__title">

                                    {!! \App\Helpers\TranslationHelper::TranslateText($banner->sous_titre ?? ' ') !!}
                                </h2>
                                <div class="main-slider-two__btn-box">
                                    <!-- Ajouter un bouton si besoin -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination et navigation -->
        <div class="swiper-pagination" id="main-slider-pagination"></div>
        <div class="swiper-button-prev" id="main-slider__swiper-button-prev"></div>
        <div class="swiper-button-next" id="main-slider__swiper-button-next"></div>
    </div>
</section>
<style>
    /*   .main-slider-two .swiper-slide {
    height: 100vh;
    display: flex;
    align-items: center;
    color: #fff;
} */

    .main-slider-two .swiper-slide {
        height: 100vh;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
    }

    /* Pour mobile */
    @media (max-width: 768px) {
        .main-slider-two .swiper-slide {
            height: 250px;
            /* ou 60vh si tu préfères en hauteur relative */
        }

        .main-slider-two__content {
            text-align: center;
        }
    }

</style>



<!-- Schedule Two Start -->
<section class="schedule-two">
    <div class="container">
        <div class="schedule-two__inner">
            <div class="section-title text-left">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">
                        {{ \App\Helpers\TranslationHelper::TranslateText('Découvrez  nos évènements à venir') }}
                    </span>
                </div>
                {{-- <h2 class="section-title__title section-title__title--two">Music Event Schedule</h2> --}}
            </div>
            <div class="schedule-two__main-tab-box tabs-box">
                <ul class="tab-buttons clearfix list-unstyled">
                    {{-- <li data-tab="#1st-day" class="tab-btn active-btn">
                            <h3>Day 01</h3>
                            <p>16 April 2024</p>
                        </li>
                        <li data-tab="#2nd-day" class="tab-btn">
                            <h3>Day 02</h3>
                            <p>18 April 2024</p>
                        </li>
                        <li data-tab="#3rd-day" class="tab-btn">
                            <h3>Day 03</h3>
                            <p>24 April 2024</p>
                        </li> --}}
                </ul>
                <div class="tabs-content">
                    <!--tab-->
                    <div class="tab active-tab" id="1st-day">
                        <div class="schedule-two__tab-content-box">
                            @foreach ($events as $event )
                            <div class="schedule-two__sinlge">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="schedule-two__img">


                                            <a href="{{ route('details-events', ['id' => $event->id, 'slug'=>Str::slug(Str::limit($event->titre, 10))]) , }}">
                                                <img src="{{ Storage::url($event->image) }}" style="width: 400px; height: 300px; object-fit: cover;" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-8">
                                        <div class="schedule-two__right">
                                            <div class="schedule-two__right-content">
                                                <h4 class="schedule-two__title"><a href="{{ route('details-events', ['id' => $event->id, 'slug'=>Str::slug(Str::limit($event->titre, 10))]) , }}"> {!! \App\Helpers\TranslationHelper::TranslateText($event->titre) !!}</a></h4>
                                                <p class="schedule-two__text">

                                                    {!! \App\Helpers\TranslationHelper::TranslateText($event->meta_description ?? 'Pas de meta description') !!}
                                                </p>
                                                <a href="{{ route('details-events', ['id' => $event->id, 'slug'=>Str::slug(Str::limit($event->titre, 10))]) , }}" class="schedule-two__btn">
                                                    {{ \App\Helpers\TranslationHelper::TranslateText('Voir plus') }}
                                                    <span class="icon-arrow-right"></span></a>
                                            </div>
                                            <ul class="list-unstyled schedule-two__address">
                                                <li>@if($event->type == 'presentiel')
                                                    <div class="icon">
                                                        <span class="icon-pin"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>{{ $event->adresse }} <br> {{ $event->country }}</p>
                                                    </div>
                                                    @endif

                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-pin"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>{{ \Carbon\Carbon::parse($event->start)->format('d/m/Y') }} à {{ \Carbon\Carbon::parse($event->heure)->format('H:i') }}
                                                            <br>
                                                            au {{ \Carbon\Carbon::parse($event->end)->format('d/m/Y') }}
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Schedule Two End -->



<!-- Services Two Start -->
<section class="services-two">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__tagline-box">
                <span class="section-title__tagline"> {{ \App\Helpers\TranslationHelper::TranslateText('Services') }}</span>
            </div>
            {{-- <h2 class="section-title__title section-title__title--two">Explore By Music Event <br> our Category
         --}} </h2>
        </div>
        <div class="row">
            <!-- Services Two Single Start -->
            @foreach ($services as $service )
            <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                <div class="services-two__single">
                    <div class="services-two__icon">
                        <img src="{{ Storage::url($service->image) }}" style="width: 200px; height: 100px; object-fit: cover;" alt="">

                        {{-- <span class="icon-theater"></span> --}}
                    </div>
                    <h3 class="services-two__title"><a href="#"> {{ \App\Helpers\TranslationHelper::TranslateText($service->nom) }}</a></h3>
                    <p class="services-two__text">

                        {{ \App\Helpers\TranslationHelper::TranslateText($service->meta_description ?? ' ') }}
                    </p>
                    {{-- <a href="#" class="services-two__btn">Read More <span
                            class="icon-arrow-right"></span></a> --}}
                </div>
            </div>
            @endforeach
            <!-- Services Two Single End -->

        </div>
    </div>
</section>
<!-- Services Two End -->

<!-- Event Two Start -->
<section class="event-two">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                <div class="event-two__left">
                    <div class="event-two__img-box">
                        <div class="event-two__img">
                            <img src="{{ Storage::url($config->image1_home) }}" height="505" width="290" alt="">
                        </div>
                        <div class="event-two__trusted-customer">
                            <div class="event-two__trusted-customer-icon-and-count-box">
                                <div class="event-two__trusted-customer-icon">
                                    <span class="icon-ionic-ios-people"></span>
                                </div>
                                <div class="event-two__trusted-customer-count">
                                    <h3 class="odometer" data-count="6.5">00</h3>
                                    <span class="event-two__trusted-customer-count-plus">K+</span>
                                </div>
                            </div>
                            <p class="event-two__trusted-customer-text">Trusted Customer</p>
                        </div>
                        <div class="event-two__img-two">
                            <img src="{{ Storage::url($config->image2_home) }}" width="310" height="402" alt="">
                        </div>
                        <div class="event-two__shape-1 float-bob-y">
                            <img src="/front/assets/images/shapes/event-two-shape-1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="300ms">
                <div class="event-two__right">
                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">
                            <span class="section-title__tagline">

                                {{ \App\Helpers\TranslationHelper::TranslateText($config->titre_home) }}
                            </span>
                        </div>
                        <h2 class="section-title__title section-title__title--two">

                            {{ \App\Helpers\TranslationHelper::TranslateText($config->sous_titre_home) }}
                        </h2>
                    </div>
                    <ul class="list-unstyled event-two__points">
                        <li>
                            <div class="event-two__points-icon">
                                <span class="icon-camera-two"></span>
                            </div>
                            <div class="event-two__points-text-box">
                                <div class="event-two__points-count">
                                    <h3 class="odometer" data-count="40">00</h3>
                                    <span class="event-two__points-count-plus">+</span>
                                </div>
                                <p class="event-two__points-text">
                                    {{ \App\Helpers\TranslationHelper::TranslateText('Formations') }}
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="event-two__points-icon">
                                <span class="icon-clown"></span>
                            </div>
                            <div class="event-two__points-text-box">
                                <div class="event-two__points-count">
                                    <h3 class="odometer" data-count="19">00</h3>
                                    <span class="event-two__points-count-plus">+</span>
                                </div>
                                <p class="event-two__points-text"> {{ \App\Helpers\TranslationHelper::TranslateText('Evènements') }}</p>
                            </div>
                        </li>
                    </ul>
                    <p class="event-two__text">

                        {{ \App\Helpers\TranslationHelper::TranslateText($config->des_home) }}
                    </p>
                    <div class="event-two__btn-box">
                        <a href="{{ route('contact') }}" class="event-two__btn thm-btn">
                            {{ \App\Helpers\TranslationHelper::TranslateText('Contact') }}
                            <span class="icon-arrow-right"></span> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Event Two End -->


<!--Brand Two Start-->
<section class="brand-two">
    <div class="container">
        <div class="brand-two__inner">
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100,
                "slidesPerView": 5,
                "loop": true,
                "navigation": {
                    "nextEl": "#brand-one__swiper-button-next",
                    "prevEl": "#brand-one__swiper-button-prev"
                },
                "autoplay": { "delay": 5000 },
                "breakpoints": {
                    "0": {
                        "spaceBetween": 30,
                        "slidesPerView": 1
                    },
                    "375": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "575": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "767": {
                        "spaceBetween": 50,
                        "slidesPerView": 3
                    },
                    "991": {
                        "spaceBetween": 50,
                        "slidesPerView": 4
                    },
                    "1200": {
                        "spaceBetween": 100,
                        "slidesPerView": 5
                    },
                    "1320": {
                        "spaceBetween": 100,
                        "slidesPerView": 5
                    }
                }}'>
                <div class="swiper-wrapper">


                    @foreach ($sponsors as $sponsor)
                    <div class="swiper-slide">
                        <div class="swiper-slide__img">
                            <a href="#"><img src="{{ Storage::url($sponsor->image) }}" style="width: 200px; height: 150px; object-fit: cover;" alt=""></a>
                        </div>
                    </div><!-- /.swiper-slide -->
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<!--Brand Two End-->
 @if ($videos)
                  
<section class="video-gallery">
    <div class="container">
        <div class="row">
            @foreach($videos as $video)
            <div class="col-md-4 mb-4">
                <div class="card">
                    
                    <img src="{{ $video->image_url }}" class="card-img-top" style="width: 400px; height: 300px; object-fit: cover;" alt="{{ $video->titre }}">

                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $video->titre }}</h5>

                      
                        @if($video->is_file_upload && $video->video)
                     



                        <a href="{{ $video->is_file_upload ? $video->video : $video->path }}" class="video-popup btn btn-primary" data-id="{{ $video->id }}">
                            {{ \App\Helpers\TranslationHelper::TranslateText('Regardez la vidéo') }}
                        </a>



                        <p class="text-muted views-count" id="views-count-{{ $video->id }}">{{ $video->views }}
                            {{ \App\Helpers\TranslationHelper::TranslateText('Vues') }}
                        </p>

                        @elseif(!$video->is_file_upload && $video->path)
                      
                        <a href="{{ $video->path }}" class="video-popup btn btn-primary">

                            {{ \App\Helpers\TranslationHelper::TranslateText('Regarder sur youtube') }}
                        </a>
                        @else
                        <p class="text-muted"> {{ \App\Helpers\TranslationHelper::TranslateText('Aucune vidéo disponible') }}</p>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif





<!--Gallery Two Start-->
<section class="gallery-two">
    <div class="gallery-two__top">
        <div class="container">
            <div class="gallery-two__top-inner">
                <div class="section-title text-left">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline"> {{ \App\Helpers\TranslationHelper::TranslateText('Formations') }}</span>
                    </div>
                    <h2 class="section-title__title section-title__title--two">
                        {{ \App\Helpers\TranslationHelper::TranslateText('Acquérez des compétences durables') }}
                        <br>

                        {{ \App\Helpers\TranslationHelper::TranslateText('pour bâtir votre avenir dès aujourd\'hui') }}
                </div>
                <div class="gallery-two__nav">
                    <div class="swiper-button-next1">
                        <i class="icon-angle-left"></i>
                    </div>
                    <div class="swiper-button-prev1">
                        <i class="icon-angle-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery-two__bottom">
        <div class="container">
            <div class="gallery-two__carousel-box">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{
                        "slidesPerView": 1, 
                        "spaceBetween": 0,
                        "speed": 2000,
                        "loop": true,
                        "pagination": {
                            "el": ".swiper-dot-style1",
                            "type": "bullets",
                            "clickable": true
                        },

                        

                        "navigation": {
                            "nextEl": ".swiper-button-prev1",
                            "prevEl": ".swiper-button-next1"
                        },
                        "autoplay": { "delay": 9000 },
                        "breakpoints": {
                                "0": {
                                    "spaceBetween": 0,
                                    "slidesPerView": 1
                                },
                                "375": {
                                    "spaceBetween": 0,
                                    "slidesPerView": 1
                                },
                                "575": {
                                    "spaceBetween": 0,
                                    "slidesPerView": 1
                                },
                                "768": {
                                    "spaceBetween": 30,
                                    "slidesPerView": 2
                                },
                                "992": {
                                    "spaceBetween": 30,
                                    "slidesPerView": 2
                                },
                                "1200": {
                                    "spaceBetween": 30,
                                    "slidesPerView":3
                                },
                                "1320": {
                                    "spaceBetween": 30,
                                    "slidesPerView":4
                                }
                            }
                    }'>
                    <div class="swiper-wrapper">
                        <!--Gallery Two Single Start-->
                        @foreach ($formations as $formation )
                        <div class="swiper-slide">
                            <div class="gallery-two__single">
                                <div class="gallery-two__img">
                                    <img src="{{ Storage::url($formation->image) }}" style="width: 400px; height: 300px; object-fit: cover;" alt="">
                                    <div class="gallery-two__content">
                                        <div class="gallery-two__sub-title-box">
                                            {{-- <div class="gallery-two__sub-title-shape"></div> --}}
                                            {{-- <p class="gallery-two__sub-title">Dream Event</p> --}}
                                        </div>
                                        <h4 class="gallery-two__title"><a href="{{ route('details-formations', ['id' => $formation->id, 'slug'=>Str::slug(Str::limit($formation->titre, 10))]) , }}"> {{ \App\Helpers\TranslationHelper::TranslateText($formation->titre) }}</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!--Gallery Two Single End-->


                    </div>
                    <!-- If we need navigation buttons -->

                </div>
            </div>
        </div>
    </div>
</section>
<!--Gallery Two End-->

<!--Testimonial One Start-->
<section class="testimonial-one">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__tagline-box">
                <span class="section-title__tagline">
                    {{ \App\Helpers\TranslationHelper::TranslateText('Les retours de nos clients') }}
                </span>
            </div>
            <h2 class="section-title__title section-title__title--two">

                {{ \App\Helpers\TranslationHelper::TranslateText('Ce que nos clients disent de leur expérience') }}
                <br>

                {{ \App\Helpers\TranslationHelper::TranslateText('avec nos services') }}
            </h2>
        </div>

        <div class="testimonial-one__carousel-box">
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{
                    "slidesPerView": 1, 
                    "spaceBetween": 0,
                    "speed": 2000,
                    "loop": true,
                    "pagination": {
                        "el": ".swiper-dot-style1",
                        "type": "bullets",
                        "clickable": true
                    },

                    

                    "navigation": {
                        "nextEl": ".swiper-button-prev1",
                        "prevEl": ".swiper-button-next1"
                    },
                    "autoplay": { "delay": 9000 },
                    "breakpoints": {
                            "0": {
                                "spaceBetween": 0,
                                "slidesPerView": 1
                            },
                            "375": {
                                "spaceBetween": 0,
                                "slidesPerView": 1
                            },
                            "575": {
                                "spaceBetween": 0,
                                "slidesPerView": 1
                            },
                            "768": {
                                "spaceBetween": 30,
                                "slidesPerView": 2
                            },
                            "992": {
                                "spaceBetween": 30,
                                "slidesPerView": 2
                            },
                            "1200": {
                                "spaceBetween": 30,
                                "slidesPerView":2
                            },
                            "1320": {
                                "spaceBetween": 30,
                                "slidesPerView":2
                            }
                        }
                }'>
                <div class="swiper-wrapper">
                    <!--Testimonial One Single Start-->
                    @if ($testimonials->isEmpty())
                    <p> {{ \App\Helpers\TranslationHelper::TranslateText('Aucun témoignage disponible') }}.</p>
                    @else
                    @foreach ($testimonials as $testimonial)
                    <div class="swiper-slide">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__client-info-and-review">
                                <div class="testimonial-one__client-info">
                                    <div class="testimonial-one__client-img">
                                        @if ($testimonial->photo)
                                        <img src="{{ asset('uploads/testimonials/' . $testimonial->photo) }}" alt="Photo Témoignage" width="100" height="100">
                                        @else
                                        <img src="./assets/images/testimonial/image-1.png" alt="testimonial image">
                                        @endif
                                        {{-- <img src="/front/assets/images/testimonial/testimonial-one-client-1-1.jpg"
                                                alt=""> --}}
                                    </div>
                                    <div class="testimonial-one__client-content">
                                        <h4 class="testimonial-one__client-name"><a href="#">{{ $testimonial->name }}</a></h4>
                                        {{-- <p class="testimonial-one__sub-title">Officer</p> --}}
                                    </div>
                                </div>
                                <div class="testimonial-one__review">
                                    @for ($i = 1; $i <= 5; $i++) @if ($i <=$testimonial->stars)
                                        <span class="icon-star text-warning"></span>
                                        @else
                                        <span class="icon-star text-muted"></span>
                                        @endif
                                        @endfor
                                </div>
                                <style>
                                    .text-warning {
                                        color: #FFD700;
                                    }

                                    /* Or couleur dorée pour étoiles pleines */
                                    .text-muted {
                                        color: #ccc;
                                    }

                                    /* Gris pour les étoiles vides */

                                </style>
                            </div>
                            <p class="testimonial-one__text"> {!! \App\Helpers\TranslationHelper::TranslateText($testimonial->message) !!}</p>
                            <div class="testimonial-one__quote">
                                <span class="icon-quote"></span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif

                    <!--Testimonial One Single End-->
                    <!--Testimonial One Single Start-->

                </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="testimonial-one__nav">
                <div class="swiper-button-next1">
                    <i class="icon-angle-left"></i>
                </div>
                <div class="swiper-button-prev1">
                    <i class="icon-angle-right"></i>
                </div>
            </div>
        </div>

        <br><br>
        <br>
        <div class="col-12 d-flex justify-content-center">
            <div class="form-group mb--0">
             <button type="submit" class="thm-btn contact-one__btn" data-bs-toggle="modal" data-bs-target="#exampleModal">


                    {{ \App\Helpers\TranslationHelper::TranslateText('Laissez un témoignage') }}
                    <span class="icon-arrow-right"></span></button>
            </div>

        </div>


        <div id="successMessage" class="alert alert-success" style="display:none;"></div>
        <div id="errorMessage" class="alert alert-danger" style="display:none;"></div>

    </div>
</section>




 @if ($latestVideo)
                   
<section class="video-one">
    <div class="container">
        <div class="video-one__inner wow fadeInUp" data-wow-delay="300ms">
            <div class="video-one__img">
                <img src="{{ $latestVideo->image_url }}" style="width: 1500px; height: 500px; object-fit: cover;" a alt="{{ $latestVideo->titre }}">
                <div class="video-one__video-link">
                    <a href="{{ $latestVideo->is_file_upload ? $latestVideo->video : $latestVideo->path }}" class="video-popup">
                        <div class="video-one__video-icon">
                            <span class="icon-awesome-play"></span>
                            <i class="ripple"></i>
                        </div>
                    </a>
                </div>
            </div>
            <h5 class="text-center mt-2">{{ $latestVideo->titre }}</h5>
        </div>
    </div>
</section>

@endif


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> {{ \App\Helpers\TranslationHelper::TranslateText('Témoignage') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>



            <div class="modal-body">
                <form id="testimonialForm" action="{{ route('testimonial.store') }}" method="POST" class="testimonial-form p-4 rounded shadow-sm bg-light">
                    @csrf
                    <div class="form-group mb-4">
                        <label class="form-label text-muted d-block mb-2">
                            {{ \App\Helpers\TranslationHelper::TranslateText('Votre nom') }}
                        </label>
                        <input type="text" class="form-control border-0 rounded-pill shadow-sm" id="name" name="name" required>
                    </div>
                    {{-- Note par étoiles --}}
                    <div class="form-group mb-4">
                        <label class="form-label text-muted d-block mb-2">
                            {{ \App\Helpers\TranslationHelper::TranslateText('Note') }}
                        </label>
                        <div class="star-rating">

                            @for ($i = 5; $i >= 1; $i--)
                            <input type="radio" id="star{{ $i }}" name="stars" value="{{ $i }}" required>
                            <label for="star{{ $i }}" title="{{ $i }} étoiles">&#9733;</label>
                            @endfor
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label for="testimonial" class="form-label text-muted"> {{ \App\Helpers\TranslationHelper::TranslateText('Message') }}</label>
                        <textarea class="form-control border-0 rounded-3 shadow-sm" id="testimonial" name="message" rows="8" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="thm-btn contact-one__btn"> {{ \App\Helpers\TranslationHelper::TranslateText('Envoyer') }}</button>
                    </div>
                </form>


                @if ($errors->any())
                <div class="alert alert-danger mt-4">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if (session('success'))
                <div class="alert alert-success mt-4">
                    {{ session('success') }}
                </div>
                @endif
                <style>
                    .star-rating {
                        direction: rtl;
                        display: inline-flex;
                        gap: 5px;
                    }

                    .star-rating input[type="radio"] {
                        display: none;
                    }

                    .star-rating label {
                        font-size: 2rem;
                        color: #ccc;
                        cursor: pointer;
                    }

                    .star-rating input[type="radio"]:checked~label,
                    .star-rating label:hover,
                    .star-rating label:hover~label {
                        color: #FFD700;
                        /* jaune étoile */
                    }

                    .testimonial-form {
                        max-width: 600px;
                        margin: 0 auto;
                        background-color: #f8f9fa;
                    }

                    .form-group {
                        margin-bottom: 1.5rem;
                    }

                    .form-label {
                        font-weight: 600;
                        font-size: 1rem;
                    }

                    .form-control {
                        padding: 0.75rem 1rem;
                        font-size: 1rem;
                        color: #495057;
                        background-color: #fff;
                        border-radius: 25px;
                    }

                    textarea.form-control {
                        border-radius: 15px;
                    }

                    button.btn {
                        padding: 0.5rem 2rem;
                        font-size: 1.125rem;
                        transition: background-color 0.3s ease;
                    }

                    button.btn-primary {
                        background-color: #EFB121;
                        border-color: #EFB121;
                    }

                    button.btn-primary:hover {
                        background-color: #EFB121;
                        border-color: #EFB121;
                    }

                    .alert {
                        max-width: 600px;
                        margin: 1rem auto;
                    }

                </style>

            </div>



        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#testimonialForm').on('submit', function(e) {
            e.preventDefault(); // Empêcher l'envoi classique du formulaire

            $.ajax({
                url: $(this).attr('action')
                , method: $(this).attr('method')
                , data: $(this).serialize()
                , success: function(response) {
                    // Afficher le message de succès
                    $('#testimonialModal').modal('hide'); // Fermer le modal

                    $('#successMessage').text(
                        'Témoignage créé avec succès! Il sera valide après confirmation des administrateurs'

                    ).show();

                    setTimeout(function() {
                        location.reload();
                    }, 5000);
                }
                , error: function(response) {
                    // Afficher un message d'erreur si nécessaire
                    $('#errorMessage').text('Une erreur est survenue.')
                        .show(); // Afficher le message d'erreur
                }
            });
        });
    });

</script>


<!--Testimonial One End-->





<!--Blog Two Start-->
<br>
<section class="blog-two">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__tagline-box">
                <span class="section-title__tagline">
                    {{ \App\Helpers\TranslationHelper::TranslateText('Les actualités') }}
                </span>
            </div>
            <h2 class="section-title__title section-title__title--two">

                {{ \App\Helpers\TranslationHelper::TranslateText('Resterz informer des derniers') }}
                <br>
                {{ \App\Helpers\TranslationHelper::TranslateText('actualités et évènements') }}
            </h2>
        </div>

        <div class="row">
            <!--Blog Two Single Start-->
            @foreach ($blogs as $blog )
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                <div class="blog-two__single">
                    <div class="blog-two__img">
                        <img src="{{ Storage::url($blog->image) }}" style="width: 400px; height: 300px; object-fit: cover;" alt="">
                        <div class="blog-two__hover">
                            <a href="{{ route('details-blogs', ['id' => $blog->id, 'slug'=>Str::slug(Str::limit($blog->title, 10))]) , }}">
                                <div class="blog-two__hover-icon-1">
                                    <span class="blog-two__hover-icon-2"></span>
                                </div>
                            </a>
                        </div>
                    
                    </div>
                    <div class="blog-two__content">
                        <ul class="blog-two__meta list-unstyled">
                            <li>
                                <a href="#"><span class="icon-user"></span>By admin</a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-comments"></span>Comments ({{ $blog->comments->count() }})</a>
                            </li>
                            <li>
                                <p class="text-muted views-count" id="views-count-{{ $blog->id }}">{{ $blog->views ?? '0' }}
                            {{ \App\Helpers\TranslationHelper::TranslateText('Vues') }}
                        </p>
                            </li>
                        </ul>
                        <h3 class="blog-two__title"><a href="{{ route('details-blogs', ['id' => $blog->id, 'slug'=>Str::slug(Str::limit($blog->title, 10))]) , }}">
                                {{ \App\Helpers\TranslationHelper::TranslateText($blog->title) }} </a></h3>
                        <div class="blog-two__btn-box-two">
                            <a href="{{ route('details-blogs', ['id' => $blog->id, 'slug'=>Str::slug(Str::limit($blog->title, 10))]) , }}" class="blog-two__btn thm-btn">
                                {{ \App\Helpers\TranslationHelper::TranslateText('Voir plus') }}
                                <span class="icon-arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
            <!--Blog Two Single End-->

        </div>
    </div>
</section>
<!--Blog Two End-->
<x-footer2 />
<x-mobileMenu />
<x-searchPopup />
<x-scroll-to-top />
@endsection
