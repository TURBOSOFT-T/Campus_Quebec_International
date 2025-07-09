@extends('layouts.layout7')
@php
    $title = 'Gallery Details';
    $subtitle = 'Gallery Details';
@endphp
@section('title', ' Gallery Details || eventflow || eventflow Laravel Template')
@section('content')

<x-strickyHeader/>
<x-sidebar/>

        <!--Gallery Details Start-->
        <section class="gallery-details">
            <div class="container">
                <div class="gallery-details__top">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7">
                            <div class="gallery-details__top-img">
                                <img src="assets/images/gallery/gallery-details-img-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="gallery-details__top-right">
                                <div class="gallery-details__information">
                                    <div class="gallery-details__information-title">
                                        <h3>Project Information</h3>
                                    </div>
                                    <ul class="gallery-details__information-list list-unstyled">
                                        <li>
                                            <p>Event Mangment</p>
                                        </li>
                                        <li>
                                            <p>Starline Shimlasi</p>
                                        </li>
                                        <li>
                                            <p>1 April 2024</p>
                                        </li>
                                        <li>
                                            <p>28 September 2025</p>
                                        </li>
                                        <li>
                                            <div class="gallery-details__information-ratting">
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star last-icon"></span>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="gallery-details__information-social">
                                        <a href="#"><span class="icon-instagram"></span></a>
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-fi"></span></a>
                                        <a href="#"><span class="icon-linkedin-in"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallery-details__content">
                    <h3 class="gallery-details__title-1">Celebrate in Style Celebrate with Class</h3>
                    <p class="gallery-details__text-1">Web designing in a powerful way of just not an only professions,
                        however, in a passion for our Company. We have to a tendency to believe the idea that smart
                        looking of any websitet in on visitors.Web designing in a powerful way of just not an only
                        profession Web designing in a powerful way of just not an Web designing in a powerful way of
                        just not an only professions, however, in a passion for our Company. We have to a tendency to
                        believe the idea that smart looking of any websitet </p>
                    <div class="gallery-details__points-box">
                        <ul class="gallery-details__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-double-angle"></span>
                                </div>
                                <p>Creating Memories, One Event at a Time</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-double-angle"></span>
                                </div>
                                <p>Celebrate in Style, Celebrate with Class</p>
                            </li>
                        </ul>
                        <ul class="gallery-details__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-double-angle"></span>
                                </div>
                                <p>Where Events Come to Life</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-double-angle"></span>
                                </div>
                                <p>Making Your Event Dreams Come True</p>
                            </li>
                        </ul>
                        <ul class="gallery-details__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-double-angle"></span>
                                </div>
                                <p>Creating Memories, One Event at a Time</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-double-angle"></span>
                                </div>
                                <p>Purpose of an event is to create memorable experiences</p>
                            </li>
                        </ul>
                    </div>
                    <h3 class="gallery-details__title-2">elebrate Life Celebrate with Us</h3>
                    <p class="gallery-details__text-2">Web designing in a powerful way of just not an only professions,
                        however, in a passion for our Company. We have to a tendency to believe the idea that smart
                        looking of any websitet in on visitors.Web designing in a powerful way of just not an only
                        profession Web designing in a powerful way of just not an only </p>
                </div>
                <div class="gallery-details__img-box">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="gallery-details__img-box-img">
                                <img src="assets/images/gallery/gallery-details-img-box-img-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="gallery-details__img-box-img">
                                <img src="assets/images/gallery/gallery-details-img-box-img-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="gallery-details__img-box-img">
                                <img src="assets/images/gallery/gallery-details-img-box-img-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Gallery Details End-->


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