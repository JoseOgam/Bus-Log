<!doctype html>
<html lang="en">

<head>
    <title>Bus Log &mdash; Bus Ticketing</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!--app.js-->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<div class="site-wrap" id="app">
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <section>
        <header class="site-navbar site-navbar-target" role="banner">
            <div class="container">
                <div class="row align-items-center position-relative">

                    <div class="col-3 ">
                        <div class="site-logo">
                            <a href="#"></a>
                        </div>
                    </div>

                    <div class="col-9  text-right">
                        <span class="d-inline-block d-lg-none">
                            <a href="#" class="text-white site-menu-toggle
                                                               js-menu-toggle py-5 text-white">
                                <span class="icon-menu h3 text-white"></span>
                            </a>
                        </span>
                        <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav ml-auto ">
                                <li><a href="#" class="nav-link">Home</a></li>
                                <li><a href="#Book" class="nav-link">Book Now</a></li>
                                <li><a href="#Contact" class="nav-link">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    </section>
    <section id="Home">
        <div class="site-section bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <h3>The XYZ Bus</h3>
                        <p class="mb-4">Welcome to XYZ Online Booking!

                            The XYZ Coach Bus Service provides travelers with genuine comfort they deserve - from
                            the time you book your ticket to the time you board the bus.!</p>
                        <p>
                            <a href="#" class="btn btn-primary custom-prev">Previous</a>
                            <span class="mx-2">/</span>
                            <a href="#" class="btn btn-primary custom-next">Next</a>
                        </p>
                    </div>
                    <div class="col-lg-9">
                        <div class="nonloop-block-13 owl-carousel">
                            <div class="item-1">
                                <a href="#"><img src="{{('images/img_1.jpg')}}" alt="Image" class="img-fluid"></a>
                            </div>


                            <div class="item-1">
                                <a href="#"><img src="{{('images/img_2.jpg')}}" alt="Image" class="img-fluid"></a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="Book">
        <div class="site-section pt-0 pb-0 bg-light">
            <search-bus></search-bus>
        </div>
    </section>
    <section id="Contact">
        <div class="container site-section mb-5">
            <div class="row justify-content-center text-center">
                <contact-form></contact-form>
            </div>
        </div>

    </section>
    <footer class="site-footer">
        <main-footer></main-footer>
    </footer>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/main.js"></script>

</body>

</html>

