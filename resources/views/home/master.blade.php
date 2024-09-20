<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        {{-- <title>Philippine Society of Anesthesiologists</title> --}}

        <!-- Mobile Specific Metas
        ================================================== -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Construction Html5 Template">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

        <!-- Favicon
        ================================================== -->
        <link rel="icon" type="image/png" href="images/PSA_LOGO.png">

        <!-- CSS
        ================================================== -->
        @include('home.css')

        @livewireStyles
    </head>
    <body>
        <div class="body-inner">
            @include('home.top-info')

            <!--/ Topbar end -->
            <!-- Header start -->
            
            <header id="header" class="header-one">
                <title>@yield('title') | 24th ACA Congress</title>
                @include('home.header')
                {{-- @include('home.navbar') --}}
                @include('home.menu')

                <!--/ Navigation end -->
            </header>
            
            <!--/ Header end -->
            
            {{-- style="background-image:url(images/bg/master.jpg); " --}}

            <div style="overflow: hidden; position: relative;">
                <img class="master-bg" src="images/bg/master.jpg" alt="">
                <div style="position: relative">
                    @yield('content')
                </div>
            </div>

            

            {{-- @yield('content') --}}
            @livewireScripts

            <footer id="footer" class="footer bg-overlay">
                @include('home.footer')
            </footer><!-- Footer end -->

            
            <!-- Javascript Files
            ================================================== -->

            <!-- initialize jQuery Library -->
            @include('home.scripts')
            
        </div><!-- Body inner end -->
    </body>
</html>
