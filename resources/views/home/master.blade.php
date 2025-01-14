<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="google-site-verification" content="n-UsMvZohsUwN-AhhK7B6xx09epT6mgl9Ipgj33_YTY" />
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        {{-- <title>Philippine Society of Anesthesiologists</title> --}}

        <!-- Mobile Specific Metas
        ================================================== -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        {{-- <meta name="description" content="Construction Html5 Template"> --}}
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

        <meta name="description" content="ASEAN CONGRESS OF ANESTHESIOLOGISTS IN MANILA 2025">
        <meta name="keywords" content="anesthesia, anesthesiologists, ACA, doctors, congress, philippines, manila, anes">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />

        

        <!-- Favicon
        ================================================== -->
        <link rel="icon" type="image/png" href="images/ACA_LOGO.png">

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

                <title>@yield('title') | 24th ASEAN CONGRESS OF ANESTHESIOLOGISTS</title>
                @include('home.header')
                @include('home.menu')

                <!--/ Navigation end -->
            </header>
            
            <!--/ Header end -->
            
            {{-- style="background-image:url(images/bg/master.jpg); " --}}

            <div style="overflow: hidden; position: relative;">
                <img  class="master-bg" src="images/bg/master.jpg" alt="ASEAN CONGRESS OF ANESTHESIOLOGISTS IN MANILA 2025">
                <div >
                    @yield('content')
                    {{-- <div class="container">
                        <h1 class="text-center m-5">THIS SITE IS UNDER DEVELOPMENT...</h1>
                    </div> --}}
                    
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

            <script type="application/ld+json">
                {
                  "@context": "https://aca2025manila.org/",
                  "@type": "WebSite",
                  "name": "The 24th ASEAN Congress of Anesthesiologists",
                  "url": "https://aca2025manila.org/",
                  "potentialAction": {
                    "@type": "SearchAction",
                    "target": "https://www.example.com/search?q={search_term_string}",
                    "query-input": "required name=search_term_string"
                  }
                }
            </script>
        </div><!-- Body inner end -->
    </body>
</html>
