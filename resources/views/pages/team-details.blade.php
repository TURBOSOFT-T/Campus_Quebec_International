@extends('layouts.layout7')
@php
    $title = 'Team Details';
    $subtitle = 'Team Details';
@endphp
@section('title', ' Team Details || eventflow || eventflow Laravel Template')
@section('content')

<x-strickyHeader/>
<x-sidebar/>

        <!--Team Details Start-->
        <section class="team-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="team-details__left">
                            <div class="team-details__client-shape-1">
                                <img src="assets/images/shapes/team-details-client-shape-1.png" alt="">
                            </div>
                            <div class="team-details__img-box">
                                <div class="team-details__client-img">
                                    <img src="assets/images/team/team-details-client-img.jpg" alt="">
                                </div>
                                <div class="team-details__img-content">
                                    <h3 class="team-details__client-name">Mike Hussey</h3>
                                    <p class="team-details__sub-title">Lead Speaker</p>
                                    <div class="team-details__social">
                                        <ul class="team-details__social-list list-unstyled">
                                            <li><a class="share-facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li><a class="share-twitter" href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li><a class="share-pinterest" href="#"><i
                                                        class="fab fa-pinterest-p"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="team-details__right">
                            <h3 class="team-details__title-1">Biography</h3>
                            <p class="team-details__text-1">We’re inviting the top creatives in the tech industry from
                                all
                                over the world to come learn, grow, scrape their knees, try new things, to be
                                vulnerable,
                                epic adventures oday most people get on average 4 to 6 hours of exercise every day, and
                                make
                                sure that everything they put in their mouths is not filled with sugars</p>
                            <div class="team-details__speaker-info-box">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="team-details__speaker-info">
                                            <h3 class="team-details__speaker-title">Personal Information</h3>
                                            <p>We’re inviting the top creatives in the tech industry from all over the
                                                world
                                                to come learn, grow, scrape their knees, try new things, to be
                                                vulnerable,
                                                epic adventures oday most people get on average 4 to 6 hours of exercise
                                                every day, and make sure.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="team-details__speaker-info-list">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <p class="title">Date Of Birth:</p>
                                                    <span>May 10,1980</span>
                                                </li>
                                                <li>
                                                    <p class="title">Mobile Number:</p>
                                                    <a href="tel:001232347684">001 2323 47684</a>
                                                </li>
                                                <li>
                                                    <p class="title">Address :</p>
                                                    <span>PO Box 16122 Collins Street West Victoria 8007 Newyork</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Team Details End-->

        <!--Services One Start-->
        <section class="services-one services-three">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">event benefits</span>
                    </div>
                    <h2 class="section-title__title">Why should you joint <br> our event</h2>
                </div>
                <div class="row">
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="services-one__single">
                            <div class="services-one__icon">
                                <span class="icon-camera"></span>
                            </div>
                            <h3 class="services-one__title"><a href="{{ route('team-details') }}">Eventful Ventures</a></h3>
                            <p class="services-one__text">Events bring people together for a shared experience and From
                                weddings</p>
                            <a href="#" class="services-one__read-more">Read More <span
                                    class="icon-arrow-right"></span></a>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="services-one__single">
                            <div class="services-one__icon">
                                <span class="icon-skewer"></span>
                            </div>
                            <h3 class="services-one__title"><a href="{{ route('team-details') }}">Stellar Events Co</a></h3>
                            <p class="services-one__text">Events bring people together for a shared experience and From
                                weddings</p>
                            <a href="#" class="services-one__read-more">Read More <span
                                    class="icon-arrow-right"></span></a>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="services-one__single">
                            <div class="services-one__icon">
                                <span class="icon-dinner-table"></span>
                            </div>
                            <h3 class="services-one__title"><a href="{{ route('team-details') }}">Elite Event Management</a>
                            </h3>
                            <p class="services-one__text">Events bring people together for a shared experience and From
                                weddings</p>
                            <a href="#" class="services-one__read-more">Read More <span
                                    class="icon-arrow-right"></span></a>
                        </div>
                    </div>
                    <!--Services One Single End-->
                </div>
            </div>
        </section>
        <!--Services One End-->

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