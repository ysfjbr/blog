<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="images/favicon.ico">
        <meta name="description" content="{{ $user->profile->desc }}" />
        <meta name="keywords" content="{{ $user->profile->url }}" />
        <meta name="author" content="Yousef" />

        <title>{{ $user->profile->title }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.min.js"></script>
        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
        <!-- Materialdesign icons Css -->
        <link href="css/materialdesignicons.min.css" rel="stylesheet">

        <!-- Mobirise icons Css -->
        <link href="css/mobiriseicons.css" rel="stylesheet"> 

        <!-- Magnific-popup -->
        <link rel="stylesheet" href="css/magnific-popup.css">

        <!-- Animate Css -->
        <link rel="stylesheet" href="css/animate.min.css">

        <!-- OWL SLIDER -->
        <link rel="stylesheet" href="css/owl.carousel.css" />
        <link rel="stylesheet" href="css/owl.theme.css" />
        <link rel="stylesheet" href="css/owl.transitions.css" />

        <!-- Custom style Css -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/color/default.css" rel="stylesheet" id="option-color">

    </head>
    <body>
        <div id="app">

        <!-- Start Navbar -->
        <!-- <nav class="navbar navbar-expand-lg fixed-top custom-nav sticky">
                <div class="container">

                    <a class="navbar-brand pt-0 logo" href="#">
                        <img src="images/logo.png" alt="" class="img-fluid logo-light">
                        <img src="images/logo-dark.png" alt="" class="img-fluid logo-dark">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="mdi mdi-menu"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#services">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#client">Client</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#work">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#blog">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> -->
        <!-- End Navbar -->

        <!-- START HOME -->
            <!-- <section class="section jarallax h-100vh" data-jarallax='{"speed": 0.2}' style="background-image: url('images/header-bg.jpg');"  id="home">
                <div class="bg-overlay"></div>
                <div class="header-table">
                    <div class="header-table-center">
                        <div class="container position-relative z-index">
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="text-center header-content mx-auto">
                                        <h4 class="text-white first-title mb-4">Welcome</h4>
                                        <h1 class="header-name text-white text-capitalize mb-0">I'M <span class="simple-text-rotate font-weight-bold">Kerri Deo.,A Graphic Designer.,A Photographer.</span></h1>
                                        <p class="text-white mx-auto header-desc mt-4">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>
                                        <div class="mt-4 pt-2">
                                            <a href="#" class="btn btn-outline-custom btn-round">Download Cv</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
                <div class="scroll_down">
                    <a href="#about" class="scroll">
                        <i class="text-white"></i>
                    </a>
                </div>
            </section> -->
        <!-- END HOME -->
        
        
            <main>
                @yield('content')
            </main>
        </div>

        <!-- JAVASCRIPTS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!--EASING JS-->
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/scrollspy.min.js"></script>
        <!--PORTFOLIO FILTER JS-->
        <script src="js/isotope.js"></script>
        <!-- Magnific Popup Js -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!-- TYPED -->
        <script src="js/typed.js"></script>
        <!-- OWL CAROUSEL -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- CONTACT JS -->
        <script src="js/contact.js"></script>
        <!--CUSTOM JS-->
        <script src="js/custom.js"></script>
    </body>
</html>
