@extends('layouts.layout7')
@php
    $title = 'Stellar Events Co';
    $subtitle = 'Stellar Events Co';
@endphp
@section('title', ' Stellar Events Co || eventflow || eventflow Laravel Template')
@section('content')

<x-strickyHeader/>
<x-sidebar/>

        <!--Service Details Start-->
        <section class="service-details">
            <div class="container">
                <div class="service-details__top">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5">
                            <div class="service-details__top-left">
                                <div class="service-details__all-category">
                                    <h3 class="service-details__category-title">Catagory</h3>
                                    <ul class="service-details__all-category-list list-unstyled">
                                        <li>
                                            <a href="{{ route('event-prodigy') }}"><i class="icon-double-angle"></i>Event Prodigy
                                                <span>(02)</span></a>
                                        </li>
                                        <li class="active">
                                            <a href="{{ route('stellar-events-co') }}"><i class="icon-double-angle"></i>Stellar
                                                Events
                                                Co<span>(04)</span></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('elite-event-management') }}"><i class="icon-double-angle"></i>Elite
                                                Event
                                                Management<span>(01)</span></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('infinite-occasions') }}"><i class="icon-double-angle"></i>Infinite
                                                Occasions<span>(06)</span></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('dream-event-planners') }}"><i class="icon-double-angle"></i>Dream
                                                Event
                                                Planners<span>(03)</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="service-details__get-touch">
                                    <div class="service-details__get-touch-bg"
                                        style="background-image: url(assets/images/backgrounds/service-details-get-touch-bg.jpg);">
                                    </div>
                                    <div class="service-details__get-touch-inner">
                                        <h3 class="service-details__get-touch-title">GET TOUCH</h3>
                                        <p class="service-details__get-touch-sub-title">For fast service</p>
                                        <div class="service-details__get-touch-icon">
                                            <span class="icon-call"></span>
                                        </div>
                                        <h4 class="service-details__get-touch-number"><a href="tel:888123456765">(+888)
                                                123
                                                456 765</a></h4>
                                    </div>
                                </div>
                                <div class="service-details__download-box">
                                    <ul class="service-details__download-list list-unstyled">
                                        <li>
                                            <a href="#">Information<span class="icon-download"></span></a>
                                        </li>
                                        <li>
                                            <a href="#">Terms & Conditions<span class="icon-download"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7">
                            <div class="service-details__top-right">
                                <div class="service-details__img-1">
                                    <img src="assets/images/services/service-details-img-1.jpg" alt="">
                                </div>
                                <h3 class="service-details__title-1">Where Every Event Shines Bright</h3>
                                <p class="service-details__text-1">Lorem Ipsum is simply dummy text of the printing
                                    Lorem
                                    Ipsum is simply dummy text of the printing .Lorem Ipsum is simply dummy text of the
                                    printing.Lorem Ipsum is simply dummy text of the printing</p>
                                <div class="service-details__img-box">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="service-details__img-box-img">
                                                <img src="assets/images/services/service-details-img-box-img-1.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="service-details__img-box-img">
                                                <img src="assets/images/services/service-details-img-box-img-2.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="service-details__title-2">Experience the Magic of Events</h3>
                                <p class="service-details__text-2">Lorem Ipsum is simply dummy text of the printing
                                    Lorem
                                    Ipsum is simply dummy text of the printing .Lorem Ipsum is simply dummy text of the
                                    printing.Lorem Ipsum is simply dummy text of the printing</p>
                                <p class="service-details__text-3">Real estate is a lucrative industry that involves the
                                    buying selling and renting properties It encompasses residential commercial and
                                    industrial designsin properties. Real estate agents play a crucial Lorem Ipsum is
                                    simply
                                    dummy text of the printing Lorem Ipsum is simply dummy text of the printing .Lorem
                                    Ipsum
                                    is simply </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-details__bottom">
                    <div class="row">
                        <!-- Services Two Single Start -->
                        <div class="col-xl-4 col-lg-4">
                            <div class="service-details__single">
                                <div class="service-details__icon">
                                    <span class="icon-theater"></span>
                                </div>
                                <h3 class="service-details__title"><a href="#">Elite Event Managment and Dream Event
                                        Planners</a></h3>
                                <p class="service-details__text">Events are special occasions where people gather
                                    together
                                    to
                                    celebrate</p>
                                <a href="#" class="service-details__btn">Read More <span
                                        class="icon-arrow-right"></span></a>
                            </div>
                        </div>
                        <!-- Services Two Single End -->
                        <!-- Services Two Single Start -->
                        <div class="col-xl-4 col-lg-4">
                            <div class="service-details__single">
                                <div class="service-details__icon">
                                    <span class="icon-magic-show"></span>
                                </div>
                                <h3 class="service-details__title"><a href="#">Everlasting Moments the a
                                        Spectacular Events Ltd</a></h3>
                                <p class="service-details__text">Events are special occasions where people gather
                                    together
                                    to
                                    celebrate</p>
                                <a href="#" class="service-details__btn">Read More <span
                                        class="icon-arrow-right"></span></a>
                            </div>
                        </div>
                        <!-- Services Two Single End -->
                        <!-- Services Two Single Start -->
                        <div class="col-xl-4 col-lg-4">
                            <div class="service-details__single">
                                <div class="service-details__icon">
                                    <span class="icon-location"></span>
                                </div>
                                <h3 class="service-details__title"><a href="#">Events That Leave a Event Prodigy
                                        Impression</a>
                                </h3>
                                <p class="service-details__text">Events are special occasions where people gather
                                    together
                                    to
                                    celebrate</p>
                                <a href="#" class="service-details__btn">Read More <span
                                        class="icon-arrow-right"></span></a>
                            </div>
                        </div>
                        <!-- Services Two Single End -->
                    </div>
                    <p class="service-details__text-4">Construction is an essential industry that involves building and
                        designing structures such as buildings roads, bridges, and more. It requires skilled workers,
                        materials, and the a careful planning to ensure successful completion Construction is an
                        essential industry that involves building design by man</p>
                    <div class="service-details__faq-box">
                        <h3 class="service-details__faq-title">Creating Memories One Event at a Time</h3>
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4> What types of events do you specialize in?</h4>
                                    <div class="faq-one-accrodion__count"></div>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable
                                            content of a page looking at its a layout. The point of using Lorem Ipsum is
                                            that it has a more-or-less norIt is a long established fact that a reader
                                            will
                                            be distracted by the readable content of a page looking at its a layout. The
                                            point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                            of
                                            a letter as opposed to a using 'Content here, </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion  active">
                                <div class="accrodion-title">
                                    <h4>How far in advance should I book an event?</h4>
                                    <div class="faq-one-accrodion__count"></div>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable
                                            content of a page looking at its a layout. The point of using Lorem Ipsum is
                                            that it has a more-or-less norIt is a long established fact that a reader
                                            will
                                            be distracted by the readable content of a page looking at its a layout. The
                                            point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                            of
                                            a letter as opposed to a using 'Content here, </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Do you provide event planning services?</h4>
                                    <div class="faq-one-accrodion__count"></div>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable
                                            content of a page looking at its a layout. The point of using Lorem Ipsum is
                                            that it has a more-or-less norIt is a long established fact that a reader
                                            will
                                            be distracted by the readable content of a page looking at its a layout. The
                                            point of using Lorem Ipsum is that it has a more-or-less normal distribution
                                            of
                                            a letter as opposed to a using 'Content here, </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Service Details End-->



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