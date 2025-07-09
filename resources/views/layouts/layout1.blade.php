<!DOCTYPE html>
<html lang="en">

<x-head/>

<body <?php echo (isset($bodyClass) ? 'class="' . $bodyClass . ' body-bg-color-2"' : 'class="body-bg-color-2"'); ?>>

    <div class="page-wrapper">
        <header class="main-header main-header-two">
            <x-menuList2/>
        </header>

    @yield('body')
    

  {{--   <x-loader/> --}}

   <x-scripts/>

</body>

</html>