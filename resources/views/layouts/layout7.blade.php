

<!DOCTYPE html>
<html lang="en">

<x-head/>

<body <?php echo (isset($bodyClass) ? 'class="' . $bodyClass . ' body-bg-color-1"' : 'class="body-bg-color-1"'); ?>>

    <div class="page-wrapper">
        <header class="main-header">
            <x-menuList4/>
        </header>

            <!--Page Header Start-->
            <section class="page-header">
               {{--  <div class="page-header__bg" style="background-image: url(/front/assets/images/backgrounds/page-header-bg.jpg);">
                </div> --}}

                <div class="page-header__bg" style="background-image: url('{{ Storage::url($config->imagecontact) }}');"></div>

                <div class="page-header__shape-1 float-bob-y">
                    <img src="/front/assets/images/shapes/page-header-shape-1.png" alt="">
                </div>
                <div class="page-header__shape-2 float-bob-x">
                    <img src="/front/assets/images/shapes/page-header-shape-2.png" alt="">
                </div>
                <div class="container">
                    <div class="page-header__inner">
                        <h2>{{ $title }}</h2>
                        <div class="thm-breadcrumb__box">
                            <ul class="thm-breadcrumb list-unstyled">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><span class="icon-angle-right"></span></li>
                                <li>{{ $subtitle }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--Page Header End-->

            @yield('body')

{{--     <x-loader/> --}}



   <x-scripts/>

</body>

</html>