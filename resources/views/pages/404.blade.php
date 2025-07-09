@extends('layouts.layout7')
@php
    $title = '404';
    $subtitle = '404';
@endphp
@section('title', '  404 Error || eventflow || Laravel Template')
@section('content')

<x-strickyHeader/>
<x-sidebar/>

        <!--Error Page Start-->
        <section class="error-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="error-page__inner">
                            <div class="error-page__title-box">
                                <h2 class="error-page__title">404</h2>
                            </div>
                            <h3 class="error-page__tagline">Sorry we can't find that page!</h3>
                            <p class="error-page__text">The page you are looking for was never existed.</p>
                            <form class="error-page__form">
                                <div class="error-page__form-input">
                                    <input type="search" placeholder="Search here">
                                    <button type="submit"><i class="icon-loupe"></i></button>
                                </div>
                            </form>
                            <a href="{{ url('/') }}" class="thm-btn error-page__btn">Back to home <span
                                    class="icon-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Error Page End-->

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