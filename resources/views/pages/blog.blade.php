@extends('layouts.layout7')
@php
    $title = 'Blog';
    $subtitle = 'Blog';
@endphp
@section('title', ' Blog || eventflow || eventflow Laravel Template')
@section('content')

<x-strickyHeader/>
<x-sidebar/>

        <!--Blog Page Start-->
        <section class="blog-page">
            <div class="container">
                <div class="row">
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/blog-1-1.jpg" alt="">
                                <div class="blog-one__hover">
                                    <a href="{{ route('blog-details') }}">
                                        <div class="blog-one__hover-icon-1">
                                            <span class="blog-one__hover-icon-2"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="#"><span class="icon-user"></span>By admin</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="icon-calendar"></span>October 19, 2022</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Join the Festivi Celebrate
                                        <br> Special Moments</a></h3>
                                <div class="blog-one__btn-box-two">
                                    <a href="#" class="blog-one__btn-2 thm-btn">Read More<span
                                            class="icon-arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/blog-1-2.jpg" alt="">
                                <div class="blog-one__hover">
                                    <a href="{{ route('blog-details') }}">
                                        <div class="blog-one__hover-icon-1">
                                            <span class="blog-one__hover-icon-2"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="#"><span class="icon-user"></span>By admin</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="icon-calendar"></span>October 19, 2022</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Embrace the Joyful Spirit
                                        Discover a World</a></h3>
                                <div class="blog-one__btn-box-two">
                                    <a href="#" class="blog-one__btn-2 thm-btn">Read More<span
                                            class="icon-arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="300ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/blog-1-3.jpg" alt="">
                                <div class="blog-one__hover">
                                    <a href="{{ route('blog-details') }}">
                                        <div class="blog-one__hover-icon-1">
                                            <span class="blog-one__hover-icon-2"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="#"><span class="icon-user"></span>By admin</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="icon-calendar"></span>October 19, 2022</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Where Moments Come Alive an
                                        Celebrate</a></h3>
                                <div class="blog-one__btn-box-two">
                                    <a href="#" class="blog-one__btn-2 thm-btn">Read More<span
                                            class="icon-arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="400ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/blog-1-4.jpg" alt="">
                                <div class="blog-one__hover">
                                    <a href="{{ route('blog-details') }}">
                                        <div class="blog-one__hover-icon-1">
                                            <span class="blog-one__hover-icon-2"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="#"><span class="icon-user"></span>By admin</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="icon-calendar"></span>October 19, 2022</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Events That Leave a
                                        Impression</a></h3>
                                <div class="blog-one__btn-box-two">
                                    <a href="#" class="blog-one__btn-2 thm-btn">Read More<span
                                            class="icon-arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/blog-1-5.jpg" alt="">
                                <div class="blog-one__hover">
                                    <a href="{{ route('blog-details') }}">
                                        <div class="blog-one__hover-icon-1">
                                            <span class="blog-one__hover-icon-2"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="#"><span class="icon-user"></span>By admin</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="icon-calendar"></span>October 19, 2022</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Sparkle & Shine on
                                        Celebrations</a></h3>
                                <div class="blog-one__btn-box-two">
                                    <a href="#" class="blog-one__btn-2 thm-btn">Read More<span
                                            class="icon-arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="600ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/blog-1-6.jpg" alt="">
                                <div class="blog-one__hover">
                                    <a href="{{ route('blog-details') }}">
                                        <div class="blog-one__hover-icon-1">
                                            <span class="blog-one__hover-icon-2"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="#"><span class="icon-user"></span>By admin</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="icon-calendar"></span>October 19, 2022</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">A personal portfolio is a
                                        curated collection</a></h3>
                                <div class="blog-one__btn-box-two">
                                    <a href="#" class="blog-one__btn-2 thm-btn">Read More<span
                                            class="icon-arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                </div>
            </div>
        </section>
        <!--Blog Page End-->



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