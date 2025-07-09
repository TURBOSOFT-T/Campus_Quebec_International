@extends('layouts.layout7')
@php
    $title = 'Blog List';
    $subtitle = 'Blog List';
@endphp
@section('title', ' Blog List || eventflow || eventflow Laravel Template')
@section('content')

<x-strickyHeader/>
<x-sidebar/>

        <!--Blog Page Start-->
        <section class="blog-list">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-list__left">
                            <!--BLog Page Single Start-->
                            <div class="blog-list__single">
                                <div class="blog-list__img-box">
                                    <div class="blog-list__img">
                                        <img src="assets/images/blog/blog-list-1-1.jpg" alt="">
                                    </div>
                                    <div class="blog-list__date">
                                        <p>29 jan</p>
                                    </div>
                                </div>
                                <div class="blog-list__content">
                                    <ul class="blog-list__meta list-unstyled">
                                        <li>
                                            <a href="#"><span class="icon-user"></span>By admin</a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon-calendar"></span>October 19, 2022</a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-list__title"><a href="{{ route('blog-details') }}">Join the Festivi Celebrate
                                            Special Moments
                                            Making Your Event Dreams Come True Events That Leave </a></h3>
                                    <div class="blog-list__btn-box">
                                        <a href="{{ route('blog-details') }}" class="blog-list__btn thm-btn">Read More<span
                                                class="icon-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--BLog Page Single End-->
                            <!--BLog Page Single Start-->
                            <div class="blog-list__single">
                                <div class="blog-list__img-box">
                                    <div class="blog-list__img">
                                        <img src="assets/images/blog/blog-list-1-2.jpg" alt="">
                                    </div>
                                    <div class="blog-list__date">
                                        <p>29 jan</p>
                                    </div>
                                </div>
                                <div class="blog-list__content">
                                    <ul class="blog-list__meta list-unstyled">
                                        <li>
                                            <a href="#"><span class="icon-user"></span>By admin</a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon-calendar"></span>October 19, 2022</a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-list__title"><a href="{{ route('blog-details') }}">factio that a reader will
                                            be distrol acted
                                            the aa laoreet
                                            Aliquam fact that a repli reader</a></h3>
                                    <div class="blog-list__btn-box">
                                        <a href="{{ route('blog-details') }}" class="blog-list__btn thm-btn">Read More<span
                                                class="icon-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--BLog Page Single End-->
                            <!--BLog Page Single Start-->
                            <div class="blog-list__single">
                                <div class="blog-list__img-box">
                                    <div class="blog-list__img">
                                        <img src="assets/images/blog/blog-list-1-3.jpg" alt="">
                                    </div>
                                    <div class="blog-list__date">
                                        <p>29 jan</p>
                                    </div>
                                </div>
                                <div class="blog-list__content">
                                    <ul class="blog-list__meta list-unstyled">
                                        <li>
                                            <a href="#"><span class="icon-user"></span>By admin</a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon-calendar"></span>October 19, 2022</a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-list__title"><a href="{{ route('blog-details') }}">Ished fact that a reader
                                            will be distrol
                                            acted
                                            bioii fact that a repli reader</a></h3>
                                    <div class="blog-list__btn-box">
                                        <a href="{{ route('blog-details') }}" class="blog-list__btn thm-btn">Read More<span
                                                class="icon-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--BLog Page Single End-->
                            <div class="blog-list__pagination">
                                <ul class="pg-pagination list-unstyled">
                                    <li class="count"><a href="{{ route('blog-details') }}">01</a></li>
                                    <li class="count"><a href="{{ route('blog-details') }}">02</a></li>
                                    <li class="count"><a href="{{ route('blog-details') }}">03</a></li>
                                    <li class="next">
                                        <a href="{{ route('blog-details') }}" aria-label="Next"><i
                                                class="icon-double-angle"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__search">
                                <h3 class="sidebar__title">Search</h3>
                                <form action="#" class="sidebar__search-form">
                                    <input type="search" placeholder="Search....">
                                    <button type="submit"><i class="icon-loupe"></i></button>
                                </form>
                            </div>
                            <div class="sidebar__single sidebar__all-category">
                                <h3 class="sidebar__title">Catagory</h3>
                                <ul class="sidebar__all-category-list list-unstyled">
                                    <li>
                                        <a href="{{ route('blog-details') }}"><i class="icon-double-angle"></i>Event Prodigy
                                            <span>(02)</span></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-details') }}"><i class="icon-double-angle"></i>Stellar Events
                                            Co<span>(04)</span></a>
                                    </li>
                                    <li class="active">
                                        <a href="{{ route('blog-details') }}"><i class="icon-double-angle"></i>Elite Event
                                            Management<span>(01)</span></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-details') }}"><i class="icon-double-angle"></i>Infinite
                                            Occasions<span>(06)</span></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-details') }}"><i class="icon-double-angle"></i>Dream Event
                                            Planners<span>(03)</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Recent Post</h3>
                                <ul class="sidebar__post-list list-unstyled">
                                    <li>
                                        <div class="sidebar__post-content">
                                            <p class="sidebar__post-date"><span class="icon-calendar"></span>Jan 10,2024
                                            </p>
                                            <h3>
                                                <a href="{{ route('blog-details') }}">Unforgettable Mome Celebrate Unforgettable
                                                    Events</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-content">
                                            <p class="sidebar__post-date"><span class="icon-calendar"></span>Jun 20,2024
                                            </p>
                                            <h3>
                                                <a href="{{ route('blog-details') }}">Aliquam an eros justo, posuere lobortis,
                                                    viverra laoreet</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-content">
                                            <p class="sidebar__post-date"><span class="icon-calendar"></span>Jan 15,2024
                                            </p>
                                            <h3>
                                                <a href="{{ route('blog-details') }}">Aliquam eros justo, posuere loborti viverra
                                                    laoreet</a>
                                            </h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__tags">
                                <h3 class="sidebar__title">Tags</h3>
                                <div class="sidebar__tags-list">
                                    <a href="#">All Project</a>
                                    <a href="#">Prodigy</a>
                                    <a href="#">Stellar Events</a>
                                    <a href="#">Occasions</a>
                                    <a href="#">Spectacular</a>
                                    <a href="#">Moments</a>
                                </div>
                            </div>
                        </div>
                    </div>
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