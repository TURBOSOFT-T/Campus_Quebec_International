@extends('layouts.layout2')
@php
    $title = 'Coming Soon';
    $subtitle = 'Coming Soon';
@endphp
@section('title', ' Coming Soon || eventflow || eventflow Laravel Template')
@section('content')

<x-strickyHeader/>
<x-sidebar/>

        <!--Start Coming Soon page-->
        <section class="coming-soon-page full-height">
            <div class="coming-soon-page__bg"
                style="background-image: url(assets/images/backgrounds/coming-soon-page-bg.jpg);"></div>
            <div class="coming-soon-page__content">
                <div class="inner">
                    <div class="big-title">We're Coming Soon...</div>
                    <div class="timer-box clearfix">
                        <div class="countdown-timer">
                            <div class="default-coundown">
                                <div class="box">
                                    <div class="countdown coming-soon-countdown" data-countdown-time="2025/08/28"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text">
                        <p>
                            Website is under construction. We'll be here soon with new<br>
                            awesome site, Subscribe to be notified.
                        </p>
                    </div>
                    <div class="coming-soon-page__subscribe-box">
                        <form class="subscribe-form" action="#">
                            <input placeholder="Enter your email address" type="email">
                            <button type="submit" class="thm-btn coming-soon-page__btn">send massage<span
                                    class="icon-arrow-right"></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--End Coming Soon page-->

<x-footer/>
<x-mobileMenu/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection