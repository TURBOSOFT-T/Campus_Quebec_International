@extends('layouts.about')
@php
    $title =  \App\Helpers\TranslationHelper::TranslateText('A propos de nous') ;
    $subtitle = \App\Helpers\TranslationHelper::TranslateText('A propos de nous');
@endphp
@section('titre', \App\Helpers\TranslationHelper::TranslateText('A propos de nous'))

<x-head/>

@php
    $config = DB::table('configs')->first();

           
           
        

@endphp

@section('about')

<x-strickyHeader/>
<x-sidebar/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/magnific-popup/dist/magnific-popup.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/magnific-popup/dist/jquery.magnific-popup.min.js"></script>

<script>
    $(document).ready(function() {
        $('.video-popup').magnificPopup({
            type: 'iframe',
            preloader: true,
            mainClass: 'mfp-fade'
        });
    });
</script>

    <!-- Event One Start -->
    <section class="event-one event-three">
        <div class="container">
            <div class="event-one__inner wow fadeInUp" data-wow-delay="300ms">
                <div class="event-one__top">
                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">
                            <span class="section-title__tagline">
                                  {!! \App\Helpers\TranslationHelper::TranslateText($config->titre_apropos ?? '') !!}
                            </span>
                        </div>
                       <p>
                      
                          {!! \App\Helpers\TranslationHelper::TranslateText($config->des_apropos ?? '') !!}
                       </p>
                    </div>
                    <br>
                    <div class="event-one__btn-box">
                       {{--  <a href="#" class="event-one__btn thm-btn">Join The Event <span
                                class="icon-arrow-right"></span> </a> --}}
                    </div>
                </div>
               {{--  <ul class="list-unstyled event-one__points">
                    <li>
                        <div class="icon">
                            <span class="icon-air-horn"></span>
                        </div>
                        <div class="content">
                            <h4><a href="#">Artists & bands</a></h4>
                            <p>Events bring people together for a shared experien celebration a <br> From weddings
                                and birthdays to conferences </p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="icon-party-blower"></span>
                        </div>
                        <div class="content">
                            <h4><a href="#">Audience Event Planner</a></h4>
                            <p>Events bring people together for a shared experien celebration a <br> From weddings
                                and birthdays to conferences </p>
                        </div>
                    </li>
                </ul> --}}
                <div class="event-one__img-box">
                    <img src="{{ Storage::url($config->image_apropos1) }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Event One End -->
 
    <!-- Sliding Text One Start -->
    <section class="sliding-text-one">
        <div class="sliding-text-one__wrap">
            <ul class="sliding-text__list list-unstyled marquee_mode">
                <li>
                    <h5 data-hover=" {!! \App\Helpers\TranslationHelper::TranslateText( $config->slogan_apropos) !!}" class="sliding-text__title">
                           {!! \App\Helpers\TranslationHelper::TranslateText( $config->slogan_apropos) !!}
                        <img src="/front/assets/images/icon/star-icon.png" alt=""></h5>
                </li>
                <li>
                    <h5 data-hover="  {!! \App\Helpers\TranslationHelper::TranslateText($config->slogan1_apropos) !!}" class="sliding-text__title"> 
                           {!! \App\Helpers\TranslationHelper::TranslateText($config->slogan1_apropos) !!}
                        <img src="/front/assets/images/icon/star-icon.png" alt=""></h5>
                </li>
            </ul>
        </div>
    </section>
    <!-- Sliding Text One End -->

    <!-- Buy Ticket Start -->
    <section class="buy-ticket">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="buy-ticket__left wow fadeInLeft" data-wow-delay="100ms">
                        <ul class="buy-ticket__address list-unstyled">
                           {{--  <li>
                                <div class="icon">
                                    <span class="icon-clock"></span>
                                </div>
                                <div class="text">
                                    <p>Mirpur 01 Road N 12 Dhaka Bangladesh</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <div class="text">
                                    <p>10 Am To 10 Pm 20 April 2024</p>
                                </div>
                            </li> --}}
                        </ul>
                        <h3 class="buy-ticket__title">

                               {!! \App\Helpers\TranslationHelper::TranslateText($config->titre_apropos1) !!}
                        </h3>
                        <p class="buy-ticket__text">
                        
                           {!! \App\Helpers\TranslationHelper::TranslateText($config->des_apropos) !!}
                        </p>
                        <div class="buy-ticket__btn-box">
                            {{-- <a href="#" class="buy-ticket__btn-1 thm-btn">Buy Your Ticket<span
                                    class="icon-arrow-right"></span> </a> --}}
                            <a href="#" class="buy-ticket__btn-2 thm-btn">
                                   {!! \App\Helpers\TranslationHelper::TranslateText('Contact') !!}
                                <span
                                    class="icon-arrow-right"></span> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="buy-ticket__right wow fadeInRight" data-wow-delay="300ms">
                        <div class="buy-ticket__img">
                            <img src="{{ Storage::url($config->image_apropos2) }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Buy Ticket End -->

    

    <!--Brand One Start-->
    <section class="brand-one">
        <div class="container">
            <div class="brand-one__inner">
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
                        @if($config->photos)
                        @foreach (json_decode($config->photos, true) as $photo)
                        <div class="swiper-slide">
                            <div class="swiper-slide__img">
                                <a href="#"><img src="{{ Storage::url($photo) }}"style="width: 150px; height: 150px;" alt=""></a>
                            </div>
                        </div><!-- /.swiper-slide -->
                        @endforeach
                        @endif
                  
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Brand One End-->

 @if ($latestVideo)
                   
<section class="video-background" style="position: relative; overflow: hidden; height: 400px;">

    @if($latestVideo->is_file_upload && $latestVideo->video)
        <video autoplay muted loop playsinline
               style="width: 100%; height: 100%; object-fit: cover; position: absolute; top:0; left:0; z-index: -1;">
            <source src="{{ $latestVideo->video }}" type="video/mp4">
            Votre navigateur ne supporte pas la vidéo HTML5.
              {{ \App\Helpers\TranslationHelper::TranslateText(' Votre navigateur ne supporte pas la vidéo HTML5.') }}
        </video>
    @elseif(!$latestVideo->is_file_upload && $latestVideo->path)
        {{-- Pour YouTube en background, c’est compliqué (pas autoplay vraiment background), ici on affiche une image de fond --}}
        <img src="{{ $latestVideo->image_url }}" alt="{{ $latestVideo->titre }}" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top:0; left:0; z-index: -1;">
    @endif

    <div class="container" style="position: relative; z-index: 2; height: 100%; display: flex; align-items: center; justify-content: center;">
        <a href="{{ $latestVideo->is_file_upload ? $latestVideo->video : $latestVideo->path }}" class="video-popup btn btn-primary" style="font-size: 24px; padding: 10px 20px;">
             {{ \App\Helpers\TranslationHelper::TranslateText('▶️ Regarder la vidéo') }}
        </a>
    </div>
</section>

@endif

    <!-- Event Direction Start -->
    <section class="event-direction event-direction-two">
        <div class="container">
            <div class="event-direction__inner">
                <div class="row">
                    <div class="col-xl-7 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="event-direction__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">
                                        {{ \App\Helpers\TranslationHelper::TranslateText($config->titre_apropos2) }}
                                    </span>
                                </div>
                               {{--  <h2 class="section-title__title">Creating Memories <br> One Event Time</h2> --}}
                            </div>
                            <p class="event-direction__text">


{!! \App\Helpers\TranslationHelper::TranslateText($config->des_apropos2) !!}

                            </p>
                            <div class="event-direction__call">
                                <div class="event-direction__call-icon">
                                    <img src="/front/assets/images/icon/event-direction-chat-icon.png" alt="">
                                </div>
                                <div class="event-direction__call-content">
                                    <p>Call Us</p>
                                    <h4><a href="https://wa.me/{{ preg_replace('/\D/', '', $config->telephone) }}"
                                        target="_blank">
                                        {{ $config->telephone }}
                                        <i class="fab fa-whatsapp"></i>

                                    </a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 wow fadeInRight" data-wow-delay="300ms">
                        <div class="event-direction__right">
                            <ul class="event-direction__counter list-unstyled">
                                <li>
                                    <div class="event-direction__counter-single">
                                        <div class="event-direction__counter-box">
                                            <h3 class="odometer" data-count="100">00</h3>
                                            <span class="event-direction__counter-plus">+</span>
                                        </div>
                                        <p class="event-direction__counter-text">Our Event Artists</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="event-direction__counter-single">
                                        <div class="event-direction__counter-box">
                                            <h3 class="odometer" data-count="101">00</h3>
                                            <span class="event-direction__counter-plus">+</span>
                                        </div>
                                        <p class="event-direction__counter-text">Hours Of Music</p>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="event-direction__counter-single">
                                        <div class="event-direction__counter-box">
                                            <h3 class="odometer" data-count="10">00</h3>
                                            <span class="event-direction__counter-plus">+</span>
                                        </div>
                                        <p class="event-direction__counter-text">Event Stages</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="event-direction__counter-single">
                                        <div class="event-direction__counter-box">
                                            <h3 class="odometer" data-count="20">00</h3>
                                            <span class="event-direction__counter-plus">+</span>
                                        </div>
                                        <p class="event-direction__counter-text">Music Brands</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Event Direction End -->

     <!--Faq Page Start-->
     <section class="faq-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-6">
                    <div class="faq-page__left">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>
                                        {{ \App\Helpers\TranslationHelper::TranslateText('Biographie') }}
                                    </h4>
                                    {{-- <div class="faq-one-accrodion__count"></div> --}}
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            {!! 
                                             \App\Helpers\TranslationHelper::TranslateText($config->biographie) 
                                            !!}
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </section>
    <!--Faq Page End-->

    <!--CTA One Start-->
    <section class="cta-one">
        <div class="container">
            <div class="cta-one__inner">
                <h3 class="cta-one__title">
                    {{ \App\Helpers\TranslationHelper::TranslateText('Vous souhaitez bénéficier d\'offres spéciales') }}
                    <br>
                    
                {{ \App\Helpers\TranslationHelper::TranslateText(' et mises à jour des formations?') }}
                </h3>
                <form  id="newsletter-form" class="cta-one__form mc-form"  action="{{ route('newsletter.subscribe') }}" method="POST" >
                    <div class="cta-one__form-input-box">
                        <input type="email" id="newsletter-email" placeholder="{{ \App\Helpers\TranslationHelper::TranslateText('Entrez votre email') }}" name="email">
                        <button type="submit" id="submit-btn" class="cta-one__btn"><span class="icon-paper-plan"></span></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--CTA One End-->

    <x-footer2 /> 
<x-mobileMenu/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection