<!DOCTYPE html>
<html lang="en">

<x-head/>

<body <?php echo (isset($bodyClass) ? 'class="' . $bodyClass . ' body-bg-color-1"' : 'class="body-bg-color-1"'); ?>>

    <div class="page-wrapper">
        <header class="main-header">
            <x-menuList-one-page/>
        </header>

    @yield('content')
    

    <x-loader/>

   <x-scripts/>

</body>

</html>