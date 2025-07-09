@include('sweetalert::alert')
@php
    $config = DB::table('configs')->first();

           
           
        

@endphp
<!doctype html>


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> @yield('titre') - COACH BELLE</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180"href="{{ Storage::url($config->icon) }}">
    <link rel="icon" type="image/png" sizes="32x32"
    href="{{ Storage::url($config->icon) }}">
    <link rel="icon" type="image/png" sizes="16x16"
    href="{{ Storage::url($config->icon) }}">
    <link rel="manifest" href="{{ Storage::url($config->icon) }}">
    <meta name="description" content="COACH BELLE" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('/front/assets/vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/assets/vendors/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/assets/vendors/animate/custom-animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/assets/vendors/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/assets/vendors/jarallax/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/assets/vendors/odometer/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/assets/vendors/swiper/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/assets/vendors/eventflow-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/assets/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/assets/vendors/owl-carousel/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/assets/vendors/bootstrap-select/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/assets/vendors/nice-select/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/assets/vendors/jquery-ui/jquery-ui.css') }}">

    <!-- Template Styles -->
    <link rel="stylesheet" href="{{ asset('/front/assets/css/eventflow.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/assets/css/eventflow-responsive.css') }}">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>

<style>
    .logo-small {
    width: 40px;
    height: 40px;
}

</style>


<body <?php echo isset($bodyClass) ? 'class="' . $bodyClass . ' body-bg-color-2"' : 'class="body-bg-color-2"'; ?>>

    <div class="page-wrapper">
        <header class="main-header main-header-two">
            <nav class="main-menu main-menu-two">
                <div class="main-menu__wrapper">
                    <div class="container">
                        <div class="main-menu__wrapper-inner">
                            <div class="main-menu__left">
                                <div class="main-menu__logo">
                                    <a href="{{ url('/') }}"><img
                                        src="{{ Storage::url($config->logo) }}" class="logo-small" alt="Logo"></a>
                                </div>
                            </div>
                            <div class="main-menu__main-menu-box">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li class="dropdown">
                                        <a href="{{ url('/') }}">Home</a>
                                        <ul>
                                            <li><a href="{{ url('/') }}">Home One</a></li>
                                            <li class="dropdown">
                                                <a href="#">Header Styles</a>
                                                <ul>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>
                                 
                                    <li><a href="{{ route('about') }}">A propos de nous</a></li>
                                  
                                    <li class="dropdown">
                                        <a href="#">Programmes</a>
                                        <ul>
                                            <li><a href="#">Event</a></li>
                                            <li><a href="#">Event Details</a></li>
                                        </ul>
                                    </li>

                                   
                                    <li>
                                        <a href="{{ route('contact') }}">Contact</a>
                                    </li>

                                    @guest

                                   
                                    <li>
                                        <a href="{{ url('login') }}">Connexion</a>
                                    </li> 
                                @else
                                    @if (auth()->user()->role != 'client')
                                        <li><a href="{{ url('dashboard') }}"
                                                class="nav-item nav-link">Dashboard</a>
                                        </li>
                                    @endif

                                @endguest
                                </ul>
                            </div>
                            <div class="main-menu__right">
                                <div class="main-menu__cart-search-nav-sidebar-icon-and-btn-box">
                                    <a href="#" class="main-menu__cart icon-cart"></a>
                                    <a href="#" class="main-menu__search search-toggler"><span
                                            class="icon-loupe"></span></a>
                                    <div class="main-menu__nav-sidebar-icon">
                                        <a class="navSidebar-button" href="#">
                                            <span class="icon-menu1"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="main-menu__btn-box">
                                    <a href="#" class="main-menu__btn thm-btn">Buy Ticket <span
                                            class="icon-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

        </header>

     
    </div>


    <main>

        @yield('body')

    </main>



    <div class="whatsapp-dark">
        <a href="https://wa.me/{{ preg_replace('/\D/', '', $config->telephone) }}" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <style>
        .whatsapp-dark {
            position: fixed;
            bottom: 90px;
            right: 20px;
            width: 60px;
            height: 60px;
            background-color: #202c33;
            border: 2px solid #25D366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .whatsapp-dark a {
            color: #25D366;
            font-size: 30px;
            text-decoration: none;
        }

        .whatsapp-dark:hover {
            background-color: #25D366;
        }

        .whatsapp-dark:hover a {
            color: white;
        }

        .whatsapp-float {
            position: fixed;
            bottom: 90px;
            right: 20px;
            background-color: #25D366;
            color: white;
            padding: 10px 15px;
            border-radius: 30px 30px 30px 0;
            display: flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
            font-weight: bold;
            z-index: 1000;
        }

        .whatsapp-float i {
            font-size: 24px;
        }
    </style>
    <x-footer2 /> 
    <x-mobileMenu />
    <x-searchPopup />
    <x-scroll-to-top />




    <script src="{{ asset('/front/assets/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/front/assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/front/assets/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('/front/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('/front/assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('/front/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('/front/assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/front/assets/vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('/front/assets/vendors/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('/front/assets/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('/front/assets/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('/front/assets/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('/front/assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/front/assets/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('/front/assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('/front/assets/vendors/nice-select/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('/front/assets/vendors/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('/front/assets/vendors/marque/marquee.min.js') }}"></script>
    <script src="{{ asset('/front/assets/vendors/sidebar-content/jquery-sidebar-content.js') }}"></script>
    <!-- Template JS -->
    <script src="{{ asset('/front/assets/js/eventflow.js') }}"></script>



</body>

</html>
