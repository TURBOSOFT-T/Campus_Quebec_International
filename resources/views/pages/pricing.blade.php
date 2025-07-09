@extends('layouts.layout7')
@php
    $title = 'Pricing';
    $subtitle = 'Pricing';
@endphp
@section('title', ' Pricing || eventflow || eventflow Laravel Template')
@section('content')

<x-strickyHeader/>
<x-sidebar/>

        <!--Ticket One Start-->
        <section class="ticket-one ticket-two">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">GET TICKET</span>
                    </div>
                    <h2 class="section-title__title">Choose a Ticket</h2>
                </div>
                <div class="row">
                    <!--Ticket One Sinlge Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="ticket-one__single">
                            <div class="ticket-one__title-box">
                                <div class="ticket-one__title-icon">
                                    <i class="fas fa-ticket-alt"></i>
                                </div>
                                <h5 class="ticket-one__title">Day Pass</h5>
                            </div>
                            <div class="ticket-one__price-box">
                                <h3>$35.99</h3>
                            </div>
                            <ul class="list-unstyled ticket-one__points">
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Conference Tickets</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Free Lunch And Coffee</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Certificate</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Easy Access</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Free Contacts</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="ticket-one__btn-box">
                                <a href="{{ route('pricing') }}" class="ticket-one__btn thm-btn">Buy Ticket<span
                                        class="icon-arrow-right"></span> </a>
                            </div>
                        </div>
                    </div>
                    <!--Ticket One Sinlge End-->
                    <!--Ticket One Sinlge Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="ticket-one__single">
                            <div class="ticket-one__title-box">
                                <div class="ticket-one__title-icon">
                                    <i class="fas fa-ticket-alt"></i>
                                </div>
                                <h5 class="ticket-one__title">Full Pass</h5>
                            </div>
                            <div class="ticket-one__price-box">
                                <h3>$99.99</h3>
                            </div>
                            <ul class="list-unstyled ticket-one__points">
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Conference Tickets</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Free Lunch And Coffee</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Certificate</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Easy Access</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Free Contacts</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="ticket-one__btn-box">
                                <a href="{{ route('pricing') }}" class="ticket-one__btn thm-btn">Buy Ticket<span
                                        class="icon-arrow-right"></span> </a>
                            </div>
                        </div>
                    </div>
                    <!--Ticket One Sinlge End-->
                    <!--Ticket One Sinlge Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                        <div class="ticket-one__single">
                            <div class="ticket-one__title-box">
                                <div class="ticket-one__title-icon">
                                    <i class="fas fa-ticket-alt"></i>
                                </div>
                                <h5 class="ticket-one__title">Group Pass</h5>
                            </div>
                            <div class="ticket-one__price-box">
                                <h3>$119.99</h3>
                            </div>
                            <ul class="list-unstyled ticket-one__points">
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Conference Tickets</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Free Lunch And Coffee</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Certificate</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Easy Access</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Free Contacts</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="ticket-one__btn-box">
                                <a href="{{ route('pricing') }}" class="ticket-one__btn thm-btn">Buy Ticket<span
                                        class="icon-arrow-right"></span> </a>
                            </div>
                        </div>
                    </div>
                    <!--Ticket One Sinlge End-->
                </div>
            </div>
        </section>
        <!--Ticket One End-->

        <!--Pricing One Start-->
        <section class="pricing-one pricing-two">
            <div class="container">
                <div class="pricing-one__inner">
                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">
                            <span class="section-title__tagline">Pricing</span>
                        </div>
                        <h2 class="section-title__title section-title__title--two">Building Relationships <br> Driving
                            Results</h2>
                    </div>
                    <div class="pricing-one__main-tab-box tabs-box">
                        <ul class="tab-buttons list-unstyled">
                            <li data-tab="#monthly" class="tab-btn active-btn"><span>Monthly</span></li>
                            <li data-tab="#yearly" class="tab-btn"><span>Yearly</span></li>
                        </ul>
                        <div class="tabs-content">
                            <!--tab-->
                            <div class="tab active-tab" id="monthly">
                                <div class="pricing-one__tab-content-box">
                                    <div class="row">
                                        <!--Pricing One Single Start-->
                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                            <div class="pricing-one__single">
                                                <div class="pricing-one__single-inner">
                                                    <div class="pricing-one__price-box">
                                                        <div class="pricing-one__shape-1"
                                                            style="background-image: url(assets/images/shapes/pricing-one-shape-1.png);">
                                                        </div>
                                                        <h3 class="pricing-one__price">$19 <span>/mo</span></h3>
                                                        <p class="pricing-one__pack-name">Basic Plan</p>
                                                    </div>
                                                    <ul class="list-unstyled pricing-one__points">
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-double-angle"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Mistakes To Avoid</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-double-angle"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Your Startup</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-double-angle"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Knew About Fonts</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-double-angle"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Winning Metric for Your Startup</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="pricing-one__btn-box">
                                                        <a href="{{ route('pricing') }}" class="pricing-one__btn thm-btn">Purchase
                                                            now<span class="icon-arrow-right"></span> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Pricing One Single End-->
                                        <!--Pricing One Single Start-->
                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                            <div class="pricing-one__single">
                                                <div class="pricing-one__single-inner">
                                                    <div class="pricing-one__price-box">
                                                        <div class="pricing-one__shape-1"
                                                            style="background-image: url(assets/images/shapes/pricing-one-shape-1.png);">
                                                        </div>
                                                        <h3 class="pricing-one__price">$29 <span>/mo</span></h3>
                                                        <p class="pricing-one__pack-name">Hard Plan</p>
                                                    </div>
                                                    <ul class="list-unstyled pricing-one__points">
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-double-angle"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Mistakes To Avoid</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-double-angle"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Your Startup</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-double-angle"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Knew About Fonts</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-double-angle"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Winning Metric for Your Startup</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="pricing-one__btn-box">
                                                        <a href="{{ route('pricing') }}" class="pricing-one__btn thm-btn">Purchase
                                                            now<span class="icon-arrow-right"></span> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Pricing One Single End-->
                                        <!--Pricing One Single Start-->
                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                            <div class="pricing-one__single">
                                                <div class="pricing-one__single-inner">
                                                    <div class="pricing-one__price-box">
                                                        <div class="pricing-one__shape-1"
                                                            style="background-image: url(assets/images/shapes/pricing-one-shape-1.png);">
                                                        </div>
                                                        <h3 class="pricing-one__price">$20 <span>/mo</span></h3>
                                                        <p class="pricing-one__pack-name">Easy Plan</p>
                                                    </div>
                                                    <ul class="list-unstyled pricing-one__points">
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-double-angle"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Mistakes To Avoid</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-double-angle"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Your Startup</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-double-angle"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Knew About Fonts</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-double-angle"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Winning Metric for Your Startup</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="pricing-one__btn-box">
                                                        <a href="{{ route('pricing') }}" class="pricing-one__btn thm-btn">Purchase
                                                            now<span class="icon-arrow-right"></span> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Pricing One Single End-->
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                            <div class="tab " id="yearly">
                                <div class="pricing-one__tab-content-box">
                                    <div class="row">
                                        <!--Pricing One Single Start-->
                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                            <div class="pricing-one__single">
                                                <div class="pricing-one__single-inner">
                                                    <div class="pricing-one__price-box">
                                                        <div class="pricing-one__shape-1"
                                                            style="background-image: url(assets/images/shapes/pricing-one-shape-1.png);">
                                                        </div>
                                                        <h3 class="pricing-one__price">$30 <span>/mo</span></h3>
                                                        <p class="pricing-one__pack-name">Basic Plan</p>
                                                    </div>
                                                    <ul class="list-unstyled pricing-one__points">
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-double-angle"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Mistakes To Avoid</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-double-angle"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Your Startup</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-double-angle"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Knew About Fonts</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-double-angle"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Winning Metric for Your Startup</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="pricing-one__btn-box">
                                                        <a href="{{ route('pricing') }}" class="pricing-one__btn thm-btn">Purchase
                                                            now<span class="icon-arrow-right"></span> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Pricing One Single End-->
                                        <!--Pricing One Single Start-->
                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                            <div class="pricing-one__single">
                                                <div class="pricing-one__single-inner">
                                                    <div class="pricing-one__price-box">
                                                        <div class="pricing-one__shape-1"
                                                            style="background-image: url(assets/images/shapes/pricing-one-shape-1.png);">
                                                        </div>
                                                        <h3 class="pricing-one__price">$80 <span>/mo</span></h3>
                                                        <p class="pricing-one__pack-name">Hard Plan</p>
                                                    </div>
                                                    <ul class="list-unstyled pricing-one__points">
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-double-angle"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Mistakes To Avoid</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-double-angle"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Your Startup</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-double-angle"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Knew About Fonts</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-double-angle"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Winning Metric for Your Startup</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="pricing-one__btn-box">
                                                        <a href="{{ route('pricing') }}" class="pricing-one__btn thm-btn">Purchase
                                                            now<span class="icon-arrow-right"></span> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Pricing One Single End-->
                                        <!--Pricing One Single Start-->
                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                            <div class="pricing-one__single">
                                                <div class="pricing-one__single-inner">
                                                    <div class="pricing-one__price-box">
                                                        <div class="pricing-one__shape-1"
                                                            style="background-image: url(assets/images/shapes/pricing-one-shape-1.png);">
                                                        </div>
                                                        <h3 class="pricing-one__price">$50 <span>/mo</span></h3>
                                                        <p class="pricing-one__pack-name">Easy Plan</p>
                                                    </div>
                                                    <ul class="list-unstyled pricing-one__points">
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-double-angle"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Mistakes To Avoid</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-double-angle"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Your Startup</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-double-angle"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Knew About Fonts</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="icon-double-angle"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>Winning Metric for Your Startup</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="pricing-one__btn-box">
                                                        <a href="{{ route('pricing') }}" class="pricing-one__btn thm-btn">Purchase
                                                            now<span class="icon-arrow-right"></span> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Pricing One Single End-->
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Pricing One End-->

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