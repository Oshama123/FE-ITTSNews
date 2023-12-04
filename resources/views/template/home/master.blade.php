<!DOCTYPE html>
<html lang="en">

<head>
    @include('template.home.head')
    @yield('headmeta')
</head>

<body>

    <!-- pre loader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <svg id="loader">
                    <path id="corners" d="m 0 12.5 l 0 -12.5 l 50 0 l 0 50 l -50 0 l 0 -37.5" />
                </svg>
                <img src="assets/img/favicon.png" alt="">
            </div>
        </div>
    </div>
    <!-- pre loader area end -->



    {{-- <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/img/logo/logo-itts.png') }}" alt="">
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#ews">News</a></li>
                    <li><a class="nav-link scrollto" href="#training">Training</a></li>
                    <a class="getstarted scrollto" href="/pendaftaran">Daftar Pelatihan</a>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->


        </div>
    </header><!-- End Header --> --}}


    <!-- header area start -->
    <header>
        <div id="header-sticky" class="header__area header__transparent">
            <div class="header__bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xxl-8 col-xl-9 col-lg-10 col-md-6 col-6">
                            <div class="header__bottom-left d-flex align-items-center">
                                <div class="logo">
                                    <a href="index-2.html">
                                        <img src="assets/img/logo/logo-itts.png" alt="logo">
                                    </a>
                                </div>
                                <div class="main-menu main-menu-2 main-menu-border ml-30 pl-30">
                                    <nav id="mobile-menu">
                                        <ul class="custom-menu">
                                            <li>
                                                <a href="/">Home</a>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="/#about">About</a>
                                            </li>
                                            <li>
                                                <a href="/">News</a>
                                            </li>
                                            <li>
                                                <a href="/">Trainings</a>
                                            </li>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-3 col-lg-2 col-md-6 col-6">
                            <div class="header__bottom-right d-flex justify-content-end align-items-center pl-30">
                                <div class="header__action d-none d-xl-block">
                                    <a href="/pendaftaran" class="btn-daftar">Daftar Pelatihan</a>
                                </div>
                                <div class="header__hamburger ml-50 d-xl-none">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#offcanvasmodal"
                                        class="hamurger-btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->




    <!-- offcanvas area start -->
    <div class="offcanvas__area">
        <div class="modal fade" id="offcanvasmodal" tabindex="-1" aria-labelledby="offcanvasmodal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="offcanvas__wrapper">
                        <div class="offcanvas__content">
                            <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                                <div class="offcanvas__logo logo">
                                    <a href="index-2.html">
                                        <img src="assets/img/logo/logo-itts.png" alt="logo">
                                    </a>
                                </div>
                                <div class="offcanvas__close">
                                    <button class="offcanvas__close-btn" data-bs-toggle="modal"
                                        data-bs-target="#offcanvasmodal">
                                        <i class="fal fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="offcanvas__search mb-25">
                                <form action="#">
                                    <input type="text" placeholder="What are you searching for?">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </form>
                            </div>
                            <div class="mobile-menu fix"></div>
                            <div class="offcanvas__text d-none d-lg-block">
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and
                                    praising pain
                                    was born and will give you a complete account of the system and expound the actual
                                    teachings
                                    of the great explore</p>
                            </div>
                            <div class="offcanvas__map d-none d-lg-block mb-15">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29176.030811137334!2d90.3883827!3d23.924917699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1605272373598!5m2!1sen!2sbd"></iframe>
                            </div>
                            <div class="offcanvas__contact mt-30 mb-20">
                                <h4>Contact Info</h4>
                                <ul>
                                    <li class="d-flex align-items-center">
                                        <div class="offcanvas__contact-icon mr-15">
                                            <i class="fal fa-map-marker-alt"></i>
                                        </div>
                                        <div class="offcanvas__contact-text">
                                            <a target="_blank"
                                                href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">12/A,
                                                Mirnada City Tower, NYC</a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <div class="offcanvas__contact-icon mr-15">
                                            <i class="far fa-phone"></i>
                                        </div>
                                        <div class="offcanvas__contact-text">
                                            <a
                                                href="http://wphix.com/cdn-cgi/l/email-protection#5e2d2b2e2e312c2a1e39333f3732703d3133">088889797697</a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <div class="offcanvas__contact-icon mr-15">
                                            <i class="fal fa-envelope"></i>
                                        </div>
                                        <div class="offcanvas__contact-text">
                                            <a href="tel:+012-345-6789"><span class="__cf_email__"
                                                    data-cfemail="1b686e6b6b74696f5b767a727735787476">[email&#160;protected]</span></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="offcanvas__social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offcanvas area end -->
    <div class="body-overlay"></div>
    <!-- offcanvas area end -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>


    @yield('content')


    < <!-- back to top end -->

        <!-- footer area start -->
        <footer>
            <div class="footer__area">
                <div class="footer__top grey-bg-4 pt-95 pb-45">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-7">
                                <div class="footer__widget footer__widget-2 footer-col-2-1 mb-50">
                                    <div class="footer__logo">
                                        <div class="logo">
                                            <a href="index.html">
                                                <img src="assets/img/logo/logo-itts.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="footer__widget-content">
                                        <div class="footer__widget-info">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit. Nunc maximus,
                                                nulla
                                                utlaoki
                                                comm odo sagittis.</p>
                                            <div class="footer__social">
                                                <h4>Follow Us</h4>

                                                <ul>
                                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-5">
                                <div class="footer__widget footer__widget-2 mb-50 footer-col-2-2">
                                    <h3 class="footer__widget-title">Explore</h3>
                                    <div class="footer__widget-content">
                                        <ul>
                                            <li>
                                                <a href="#">About us</a>
                                            </li>
                                            <li>
                                                <a href="#">Success story</a>
                                            </li>
                                            <li>
                                                <a href="#">Courses</a>
                                            </li>
                                            <li>
                                                <a href="#">About us</a>
                                            </li>
                                            <li>
                                                <a href="#">Instructor</a>
                                            </li>
                                            <li>
                                                <a href="#">Events</a>
                                            </li>
                                            <li>
                                                <a href="#">Contact us</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-5">
                                <div class="footer__widget footer__widget-2 mb-50 footer-col-2-3">
                                    <h3 class="footer__widget-title">Links</h3>
                                    <div class="footer__widget-content">
                                        <ul>
                                            <li>
                                                <a href="#">News & Blogs</a>
                                            </li>
                                            <li>
                                                <a href="#">Library</a>
                                            </li>
                                            <li>
                                                <a href="#">Gallery</a>
                                            </li>
                                            <li>
                                                <a href="#">Terms of service</a>
                                            </li>
                                            <li>
                                                <a href="#">Membership</a>
                                            </li>
                                            <li>
                                                <a href="#">Career</a>
                                            </li>
                                            <li>
                                                <a href="#">Partners</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-7">
                                <div class="footer__widget footer__widget-2 footer-col-2-4 mb-50">
                                    <h3 class="footer__widget-title">Sign up for our newsletter</h3>
                                    <div class="footer__subscribe">
                                        <p>Receive weekly newsletter with educational materials, popular books and much
                                            more!</p>
                                        <form action="#">
                                            <div class="footer__subscribe-input">
                                                <input type="text" placeholder="Email">
                                                <button type="submit" class="tp-btn-subscribe">Subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__bottom grey-bg-4">
                    <div class="container">
                        <div class="footer__bottom-inner">
                            <div class="row">
                                <div class="col-xxl-12">
                                    <div class="footer__copyright text-center">
                                        <p>© 2023 Akbar. All Rights Reserved</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer area end -->



        @include('template.home.plugin')
        <script src="{{ asset('assets/js/custom.js') }}"></script>

        @yield('footjs')

</body>

</html>
