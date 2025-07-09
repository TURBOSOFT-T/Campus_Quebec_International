@php
$config = DB::table('configs')->first();

$service = DB::table('services')->get();
$produit = DB::table('produits')->get();
// $categories = DB::table('categories')->first();
@endphp

<style>
    .logo-small {
        width: 60%;
        height: 60px;
    }

.main-menu__list li {
    margin: 0 1px; /* Réduit l'espace horizontal entre les éléments */
}

</style>
<nav class="main-menu main-menu-two">
    <div class="main-menu__wrapper">
        <div class="container">
            <div class="main-menu__wrapper-inner">
                <div class="main-menu__left">
                    <div class="main-menu__logo">
                        <a href="{{ url('/') }}"><img src="{{ Storage::url($config->logo) }}" class="logo-small" alt="Logo"></a>
                    </div>
                </div>
                <div class="main-menu__main-menu-box">
                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                    <ul class="main-menu__list">
                        <li class="dropdown">
                            <a href="{{ url('/') }}">{{ __('home') }}</a>

                        </li>

                        <li class="dropdown">
                            <a href="{{ route('about') }}">{{ __('about') }}</a>

                        </li>

                        <li class="dropdown">
                            <a href="{{ url('/') }}">{{ \App\Helpers\TranslationHelper::TranslateText('Formation') }}</a>
                            <ul>
                                @foreach ($categories as $category)
                                <li><a href="/category_formation/{{ $category->id }}"> {{ \App\Helpers\TranslationHelper::TranslateText($category->nom) }}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#">{{ \App\Helpers\TranslationHelper::TranslateText('Evènement') }}</a>
                            <ul>
                                @foreach ($catevents as $category)
                                <li><a href="/category_event/{{ $category->id }}"> {{ \App\Helpers\TranslationHelper::TranslateText($category->nom) }}</a></li>
                                @endforeach
                            </ul>

                        </li>


                        <li class="dropdown">
                            <a href="#">{{ \App\Helpers\TranslationHelper::TranslateText('Actualités') }}</a>
                            <ul>
                                @foreach ($catblogs as $category)
                                <li><a href="/category_blog/{{ $category->id }}"> {{ \App\Helpers\TranslationHelper::TranslateText($category->nom) }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">{{ \App\Helpers\TranslationHelper::TranslateText('Contact') }}</a>
                        </li>





                    </ul>
                </div>



                <div class="main-menu__right">
                    <div class="main-menu__cart-search-nav-sidebar-icon-and-btn-box">
                        {{--
                        <a href="#" class="main-menu__search search-toggler"><span class="icon-loupe"></span></a>
                      --}}
                        <div class="main-menu__nav-sidebar-icon">
                            <a class="navSidebar-button" href="#">
                                <span class="icon-menu1"></span>
                            </a>
                        </div>
                    </div>
                    <div class="main-menu__btn-box">


                        <ul class="main-menu__list">
                            @guest
                            <li>
                                <a href="{{ url('login') }}">

                                    {{ \App\Helpers\TranslationHelper::TranslateText('Login') }}
                                </a>
                            </li>
                            @else
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown">
                                    @if (auth()->user()->role != 'client')
                                    Dashboard
                                    @else
                                    {{ \App\Helpers\TranslationHelper::TranslateText('Mon compte') }}
                                    @endif
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    @if (auth()->user()->role != 'client')
                                    <li>
                                        <a href="{{ url('dashboard') }}">Dashboard</a>
                                    </li>
                                    @endif

                                    <li>
                                        <a href="{{ route('account') }}">
                                            {{ \App\Helpers\TranslationHelper::TranslateText('Mon compte') }}
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
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
                </div>
            </div>
        </div>
    </div>
</nav>
