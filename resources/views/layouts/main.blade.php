
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Document Title -->
    <title>Personal Portfolio</title>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}" />
    <!-- Links -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&subset=latin,latin-ext" rel="stylesheet" type="text/css" />
    <link rel='stylesheet' id='bootstrap-css'  href='{{ asset('/lib/bootstrap/css/bootstrap.min.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css'  href='{{ asset('/css/icons/font-awesome.min.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='swiper-css' href='{{ asset('/lib/swiper/css/swiper.min.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='cubeportfolio-css'  href='{{ asset('/lib/cubeportfolio/css/cubeportfolio.min.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='main-css'  href='{{ asset('style.css') }}' type='text/css' media='all' />
</head>
<body>
<!-- Page Wrapper -->
<div id="page" class="site">
    <div class="page-click-capture"></div>
    <header id="masthead" class="site-header standard sticky" role="banner">
        <div class="container">
            <div id="site-branding">
                <a class="logo-brand" href="{{ url('/') }}">
                    <img class="logo" src="{{ asset('images/logo/logo.png') }}" alt="Logo">
                    <img class="retina-logo" src="{{ asset('images/logo/logo2x.png') }}" alt="Retina Logo">
                </a>
            </div><!-- .site-branding -->
            <span id="ham-trigger-wrap">
                        <span class="ham-trigger">
                            <span></span>
                        </span>
                    </span>
            <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Top Menu">
                <ul id="top-menu" class="menu">
                    <li class="{{ (request()->is('/')) ? 'current-menu-parent' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                    <li class="{{ (request()->is('contact')) ? 'current-menu-parent' : '' }}"><a href={{ url('/contact') }}>Contact</a></li>
                    <li class="{{ (request()->is('about')) ? 'current-menu-parent' : '' }}"><a href={{ url('/about') }}>About</a></li>
                    @auth
                        <li><a href={{ route('dashboard.index') }}>Dashboard</a></li>
                    @endauth
                </ul>
            </nav>
        </div><!-- .wrap -->
    </header><!-- #masthead -->

    <div class="site-content-contain">

        @yield('content')

        <footer id="footer" class="site-footer standard" role="contentinfo">
            <div class="container">
                <div class="site-info">
                    <p class="copyright">
                        © {{ date("Y") }} Bezhan Rashidov
                    </p>
                </div>
                <nav class="footer-socials" role="navigation" aria-label="Footer Social Links Menu">
                    <ul id="social-media-footer" class="social-links-menu">
                        @foreach($socials = \App\Models\Social::all() as $social)
                            <li><a target="_blank" href="{{ $social->link }}"><i class="{{ $social->icon }}"></i></a></li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </footer>
    </div> <!-- .site-content-contain -->

</div>
<!-- Page Wrapper Ends -->

<!--  Scripts -->
<script type='text/javascript' src='{{ asset('/js/vendor/jquery-1.12.4.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('/js/vendor/TweenMax.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('/js/vendor/headsup.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('/js/vendor/jquery.easing.min.1.3.js') }}'></script>
<script type='text/javascript' src='{{ asset('/lib/cubeportfolio/js/jquery.cubeportfolio.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('/lib/swiper/js/swiper.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('/js/main.js') }}'></script>
<!--  Scripts Ends -->
</body>
</html>
