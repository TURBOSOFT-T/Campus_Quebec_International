@include('sweetalert::alert')
@php
$config = DB::table('configs')->first();

@endphp
<!doctype html>


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> @yield('titre') - Campus Québec International</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ Storage::url($config->icon) }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ Storage::url($config->icon) }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ Storage::url($config->icon) }}">
    <link rel="manifest" href="{{ Storage::url($config->icon) }}">
    <meta name="description" content="Campus Québec International" />


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="/css/slicknav.min.css" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="/css/swiper-bundle.min.css">
    <!-- Font Awesome Icon Css-->
    <link href="/css/all.css" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="/css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="/css/mousecursor.css">
    <!-- Main Custom Css -->
    <link href="/css/custom.css" rel="stylesheet" media="screen">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    @yield('blogs')

    @livewireStyles
</head>




<body>

    <!-- Topbar Section Start -->
    <div class="topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-12">
                    <!-- Topbar Contact Information Start -->
                    <div class="topbar-contact-info">
                        <ul>
                            <li class="contact-item">
                                <a href="https://wa.me/{{ preg_replace('/\D/', '', $config->telephone) }}" target="_blank">
                                    <img src="images/icon-phone.svg" alt="">
                                    <span>{{ $config->telephone }}</span>
                                </a>
                            </li>
                            <li class="contact-item">
                                <a href="mailto:{{ $config->email }}">
                                    <img src="images/icon-mail.svg" alt="">
                                    <span>{{ $config->email }}</span>
                                </a>
                            </li>
                            <li class="hide-mobile"><a href="#"><img src="images/icon-location.svg" alt=""> {{ $config->addresse }}</a></li>
                        </ul>
                    </div>
                    <!-- Topbar Contact Information End -->
                </div>

                <div class="col-lg-3 col-md-0">
                    <!-- Topbar Social Links Start -->
                    <div class="topbar-social-links">
                        {{-- <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul> --}}
                        {{-- <ul style="list-style: none; display: flex; gap: 10px; padding: 0;">
                            @if ($config->facebook)
                                <li><a href="{{ $config->facebook }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        @endif

                        @if ($config->instagram)
                        <li><a href="{{ $config->instagram }}" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        @endif

                        @if ($config->tiktok)
                        <li><a href="{{ $config->tiktok }}" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                        @endif
                        @if ($config->youtube)
                        <li><a href="{{ $config->youtube }}" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                        @endif

                        </ul> --}}
                    </div>
                    <!-- Topbar Social Links End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar Section End -->


    <!-- Header Start -->
    <header class="main-header">
        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <div class="container">

                    <style>
                        .logo-small {
                            width: 100px;
                            height: 100px;
                        }

                        .logo-footer {
                            width: 100px;
                            height: 100px;
                        }

                    </style>
                    <!-- Logo Start -->
                    <a class="navbar-brand" href="./">
                        <img src="{{ Storage::url($config->logo) }}" class="logo-small" alt="Logo">
                    </a>
                    <!-- Logo End -->

                    <!-- Main Menu Start -->
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item "><a class="nav-link" href="{{ url('/') }}">
                                        {{ \App\Helpers\TranslationHelper::TranslateText('Accueil') }}
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about') }}">
                                         {{ ucfirst(\App\Helpers\TranslationHelper::TranslateText('A propos de nous')) }} 

                                       
                                    </a>
                                </li>

                               

                                <li class="nav-item submenu"><a class="nav-link" href="#">{{ \App\Helpers\TranslationHelper::TranslateText('Services') }}</a>
                                    <ul> @foreach ($formations as $formation )
                                        <li class="nav-item"><a class="nav-link" href="{{ route('details-formations', ['id' => $formation->id, 'slug'=>Str::slug(Str::limit($formation->titre, 10))]) , }}">{{ \App\Helpers\TranslationHelper::TranslateText($formation->titre) }}</a></li>

                                        @endforeach


                                    </ul>
                                </li>
                                {{-- <li class="nav-item"><a class="nav-link" href="#">
                                        {{ \App\Helpers\TranslationHelper::TranslateText('Test offiels') }}
                                </a></li> --}}


                                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">
                                        {{ \App\Helpers\TranslationHelper::TranslateText('Contact') }}
                                    </a></li>

                                @guest


                                <li class="nav-item">
                                    <a href="{{ url('login') }}">Connexion</a>
                                </li>
                                @else


                                <li class="nav-item submenu"><a class="nav-link" href="#">
                                        @if (auth()->user()->role != 'client')
                                        Dashboard
                                        @else
                                        {{ \App\Helpers\TranslationHelper::TranslateText('Mon compte') }}
                                        @endif
                                    </a>
                                    <ul>
                                        @if (auth()->user()->role != 'client')
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('dashboard') }}">Dashboard</a>
                                        </li>
                                        @endif

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('account') }}">
                                                {{ \App\Helpers\TranslationHelper::TranslateText('Mon compte') }}
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                                                {{ \App\Helpers\TranslationHelper::TranslateText('Déconnexion') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>

                                    </ul>
                                </li>



                                @endguest

                                <li>

                                    <div class="custom-dropdown">
                                        <form action="{{ route('locale.change') }}" method="POST">
                                            @csrf
                                            <div class="dropdown">
                                                <button class="dropbtn">
                                                    @if (app()->getLocale() == 'fr')
                                                    <img src="https://img.icons8.com/color/20/france-circular.png" alt="fr">
                                                    @elseif(app()->getLocale() == 'en')
                                                    <img src="https://img.icons8.com/color/20/great-britain-circular.png" alt="en">
                                                    @elseif(app()->getLocale() == 'de')
                                                    <img src="https://img.icons8.com/color/20/germany-circular.png" alt="de">
                                                    @else
                                                    <img src="https://img.icons8.com/color/20/france-circular.png" alt="fr">
                                                    @endif

                                                </button>
                                                <div class="dropdown-content">
                                                    <button type="submit" name="locale" value="fr" class="dropdown-item">
                                                        <img src="https://img.icons8.com/color/20/france-circular.png" alt="fr">
                                                        Français
                                                    </button>
                                                    <button type="submit" name="locale" value="en" class="dropdown-item">
                                                        <img src="https://img.icons8.com/color/20/great-britain-circular.png" alt="en">
                                                        English
                                                    </button>
                                                    <button type="submit" name="locale" value="de" class="dropdown-item">
                                                        <img src="https://img.icons8.com/color/20/germany-circular.png" alt="de">
                                                        Deutsch
                                                    </button>

                                                </div>
                                            </div>
                                        </form>
                                    </div>



                                    <style>
                                        .custom-dropdown {
                                            position: relative;
                                            display: inline-block;


                                        }

                                        .dropbtn {
                                            background-color: #f7fef7;
                                            color: white;
                                            padding: 10px;
                                            font-size: 16px;
                                            border: none;
                                            cursor: pointer;
                                        }

                                        .dropdown-content {
                                            display: none;
                                            position: absolute;
                                            background-color: #f9f9f9;
                                            min-width: 160px;
                                            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                                            z-index: 1;
                                        }

                                        .dropdown-content .dropdown-item {
                                            background-color: white;
                                            border: none;
                                            width: 100%;
                                            text-align: left;
                                            padding: 8px 16px;
                                            cursor: pointer;
                                            display: flex;
                                            align-items: center;
                                        }

                                        .dropdown-content .dropdown-item img {
                                            margin-right: 8px;
                                        }

                                        .dropdown-content .dropdown-item:hover {
                                            background-color: #f8f3f3;
                                        }

                                        .dropdown:hover .dropdown-content {
                                            display: block;
                                        }

                                        .dropdown:hover .dropbtn {
                                            background-color: #eef4ee;
                                        }

                                        /* Responsive adjustments */
                                        @media (max-width: 600px) {
                                            .dropbtn {
                                                font-size: 10px;
                                                padding: 8px;
                                            }

                                            .dropdown-content .dropdown-item {
                                                font-size: 14px;
                                                padding: 5px 10px;
                                            }
                                        }

                                    </style>

                                </li>
                            </ul>
                        </div>
                        <!-- Let’s Start Button Start -->
                        <div class="header-btn d-inline-flex">
                            <a href="#" class="btn-default">{{ $config->telephone }}</a>
                        </div>


                        <!-- Let’s Start Button End -->
                    </div>
                    <!-- Main Menu End -->
                    <div class="navbar-toggle"></div>
                </div>
            </nav>
            <div class="responsive-menu"></div>
        </div>
    </header>
    <!-- Header End -->


    <main>

        @yield('body')

    </main>


    <!-- Footer Start -->
    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <!-- About Footer Start -->
                    <div class="about-footer">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                            <img src="{{ Storage::url($config->logo) }}" class="logo-footer" alt="">
                        </div>
                        <!-- Footer Logo End -->

                        <!-- About Footer Content Start -->
                        <div class="about-footer-content">
                            <p> {!! \App\Helpers\TranslationHelper::TranslateText($config->description) !!} </p>
                        </div>
                        <!-- Footer Social Links Start -->
                        <div class="footer-social-links">
                            {{-- <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>                                                                
                            </ul> --}}
                            <ul style="list-style: none; display: flex; gap: 10px; padding: 0;">
                                @if ($config->facebook)
                                <li><a href="{{ $config->facebook }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                @endif

                                @if ($config->instagram)
                                <li><a href="{{ $config->instagram }}" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                @endif

                                @if ($config->tiktok)
                                <li><a href="{{ $config->tiktok }}" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                                @endif
                                @if ($config->youtube)
                                <li><a href="{{ $config->youtube }}" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                                @endif


                                @if ($config->linkedin)
                                <li>
                                    <a href="{{ $config->linkedin }}" target="_blank">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                </li>
                                @endif


                            </ul>

                        </div>
                        <!-- Footer Social Links End -->

                    </div>
                    <!-- About Footer End -->
                </div>

                <div class="col-lg-3 col-md-4">
                    <!-- About Links Start -->
                    <div class="about-working-hour">
                        <h3>{{ \App\Helpers\TranslationHelper::TranslateText('Horaires') }}</h3>
                        <ul>
                            <li>mon to fri : 10:00 to 6:00</li>
                            <li>sat : 10:00AM to 3:00PM</li>
                            <li>sun : closed</li>
                        </ul>
                    </div>
                    <!-- About Links End -->
                </div>

                <div class="col-lg-3 col-md-4">
                    <!-- About Links Start -->
                    <div class="about-service-list">
                        <h3>{{ \App\Helpers\TranslationHelper::TranslateText('Pages') }}</h3>
                        <ul>
                            <li class="nav-item"><a href="{{ route('about') }}">{{ \App\Helpers\TranslationHelper::TranslateText('A propos de nous') }}</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#">
                                    {{ \App\Helpers\TranslationHelper::TranslateText('Actualités') }}
                                </a></li>


                            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">
                                    {{ \App\Helpers\TranslationHelper::TranslateText('Contact') }}
                                </a></li>
                        </ul>
                    </div>
                    <!-- About Links End -->
                </div>

                <div class="col-lg-3 col-md-4">
                    <!-- About Links Start -->
                    <div class="footer-contact">
                        <h3>contact</h3>
                        <!-- Footer Contact Details Start -->
                        <div class="footer-contact-details">
                            <!-- Footer Info Box Start -->
                            <div class="footer-info-box">
                                <div class="icon-box">
                                    <img src="images/icon-phone.svg" alt="">
                                </div>
                                <div class="footer-info-box-content">
                                    <p><a href="https://wa.me/{{ preg_replace('/\D/', '', $config->telephone) }}" target="_blank">
                                            {{ $config->telephone }}
                                            <i class="fab fa-whatsapp"></i>

                                        </a></p>
                                </div>
                            </div>
                            <!-- Footer Info Box End -->

                            <!-- Footer Info Box Start -->
                            <div class="footer-info-box">
                                <div class="icon-box">
                                    <img src="images/icon-mail.svg" alt="">
                                </div>
                                <div class="footer-info-box-content">
                                    <p><a href="mailto:nafiz125@gmail.com">{{ $config->email }}</p>
                                </div>
                            </div>
                            <!-- Footer Info Box End -->

                            <!-- Footer Info Box Start -->
                            <div class="footer-info-box">
                                <div class="icon-box">
                                    <img src="images/icon-location.svg" alt="">
                                </div>
                                <div class="footer-info-box-content">
                                    <p>{{ $config->addresse }}</p>
                                </div>
                            </div>
                            <!-- Footer Info Box End -->
                        </div>
                        <!-- Footer Contact Details End -->
                    </div>
                    <!-- About Links End -->
                </div>
            </div>

            <!-- Footer Copyright Section Start -->
            <div class="footer-copyright">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <!-- Footer Copyright Start -->
                        <div class="footer-copyright-text">
                            <p> (C){{ date('Y') }} Campus Québec International. All Rights Reserved.</p>
                        </div>
                        <!-- Footer Copyright End -->
                    </div>

                    <div class="col-lg-6 col-md-6">

                        {{-- <div class="footer-links">
                            <ul>
                                <li><a href="#">about us</a></li>
                                <li><a href="#">services</a></li>
                                <li><a href="#">contact us</a></li>
                            </ul>
                        </div> --}}

                    </div>
                </div>
            </div>
            <!-- Footer Copyright Section End -->
        </div>
    </footer>
    <!-- Footer End -->


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

    <!-- Jquery Library File -->
    <script src="/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js file -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- Validator js file -->
    <script src="/js/validator.min.js"></script>
    <!-- SlickNav js file -->
    <script src="/js/jquery.slicknav.js"></script>
    <!-- Swiper js file -->
    <script src="/js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script src="/js/jquery.waypoints.min.js"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <!-- Magnific js file -->
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="/js/SmoothScroll.js"></script>
    <!-- Parallax js -->
    <script src="/js/parallaxie.js"></script>
    <!-- MagicCursor js file -->
    <script src="/js/gsap.min.js"></script>
    <script src="/js/magiccursor.js"></script>
    <!-- Text Effect js file -->
    <script src="/js/SplitText.js"></script>
    <script src="/js/ScrollTrigger.min.js"></script>
    <!-- YTPlayer js File -->
    <script src="/js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Wow js file -->
    <script src="/js/wow.js"></script>
    <!-- Main Custom js file -->
    <script src="/js/function.js"></script>

    @livewireScripts

</body>

</html>
