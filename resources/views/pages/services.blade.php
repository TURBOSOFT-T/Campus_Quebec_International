@extends('layouts.layout7')
@php
    $title = 'Services';
    $subtitle = 'Services';
@endphp
@section('title', ' Services || eventflow || eventflow Laravel Template')
@section('content')

<x-strickyHeader/>
<x-sidebar/>

        <!--Services Page Start-->
        <section class="services-page">
            <div class="container">
                <div class="row">
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="services-one__single">
                            <div class="services-one__icon">
                                <span class="icon-camera"></span>
                            </div>
                            <h3 class="services-one__title"><a href="{{ route('event-prodigy') }}">Eventful Ventures</a></h3>
                            <p class="services-one__text">Events bring people together for a shared experience and From
                                weddings</p>
                            <a href="{{ route('event-prodigy') }}" class="services-one__read-more">Read More <span
                                    class="icon-arrow-right"></span></a>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="services-one__single">
                            <div class="services-one__icon">
                                <span class="icon-skewer"></span>
                            </div>
                            <h3 class="services-one__title"><a href="{{ route('stellar-events-co') }}">Stellar Events Co</a></h3>
                            <p class="services-one__text">Events bring people together for a shared experience and From
                                weddings</p>
                            <a href="{{ route('stellar-events-co') }}" class="services-one__read-more">Read More <span
                                    class="icon-arrow-right"></span></a>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="300ms">
                        <div class="services-one__single">
                            <div class="services-one__icon">
                                <span class="icon-dinner-table"></span>
                            </div>
                            <h3 class="services-one__title"><a href="{{ route('elite-event-management') }}">Elite Event
                                    Management</a>
                            </h3>
                            <p class="services-one__text">Events bring people together for a shared experience and From
                                weddings</p>
                            <a href="{{ route('elite-event-management') }}" class="services-one__read-more">Read More <span
                                    class="icon-arrow-right"></span></a>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="400ms">
                        <div class="services-one__single">
                            <div class="services-one__icon">
                                <span class="icon-cake"></span>
                            </div>
                            <h3 class="services-one__title"><a href="{{ route('infinite-occasions') }}">Advanced Dental
                                    Solutions</a>
                            </h3>
                            <p class="services-one__text">Events bring people together for a shared experience and From
                                weddings</p>
                            <a href="{{ route('infinite-occasions') }}" class="services-one__read-more">Read More <span
                                    class="icon-arrow-right"></span></a>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="services-one__single">
                            <div class="services-one__icon">
                                <span class="icon-dental-specialists"></span>
                            </div>
                            <h3 class="services-one__title"><a href="{{ route('dream-event-planners') }}">Elite Dental
                                    Specialists</a>
                            </h3>
                            <p class="services-one__text">Events bring people together for a shared experience and From
                                weddings</p>
                            <a href="{{ route('dream-event-planners') }}" class="services-one__read-more">Read More <span
                                    class="icon-arrow-right"></span></a>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="600ms">
                        <div class="services-one__single">
                            <div class="services-one__icon">
                                <span class="icon-modern-cos"></span>
                            </div>
                            <h3 class="services-one__title"><a href="{{ route('event-prodigy') }}">Modern Cos</a>
                            </h3>
                            <p class="services-one__text">Events bring people together for a shared experience and From
                                weddings</p>
                            <a href="{{ route('event-prodigy') }}" class="services-one__read-more">Read More <span
                                    class="icon-arrow-right"></span></a>
                        </div>
                    </div>
                    <!--Services One Single End-->
                </div>
            </div>
        </section>
        <!--Services Page End-->



        <!--CTA One Start-->
        <section class="cta-one">
            <div class="container">
                <div class="cta-one__inner">
                    <h3 class="cta-one__title">Get Latest Updateds Subscribe <br> to Our Newsletter</h3>
                    <form class="cta-one__form mc-form" data-url="MC_FORM_URL" novalidate="novalidate">
                        <div class="cta-one__form-input-box">
                            <input type="email" placeholder="Enter your email" name="EMAIL">
                            <button type="submit" class="cta-one__btn"><span class="icon-paper-plan"></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--CTA One End-->

<x-footer/>
<x-mobileMenu/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection