<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>RTS Pictures</title>

    @include('frontend.layouts.css')
    @yield('style')

</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    @include('frontend.layouts.navbar')
    <!-- Header Area End -->

    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <!-- <div class="welcome-slides owl-carousel"> -->
            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay jarallax" style="background-image: url({{ asset('frontend') }}/img/BahanFoto/4.png);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text text-right">
                                <h2 data-animation="fadeInUp" data-delay="100ms">
                                    RTS Pictures
                                </h2>
                                <h2 data-animation="fadeInUp" data-delay="100ms">
                                    <small>Visual Design dan Video</small> 
                                </h2>
                                <h6 data-animation="fadeInUp" data-delay="100ms">
                                    Jasa Design Grafis dan Editing Video
                                </h6>
                                <div class="hero-btn-group" data-animation="fadeInUp" data-delay="200ms">
                                    <a href="https://www.instagram.com/rtspictures_/" class="btn confer-btn">
                                        More Information <i class="zmdi zmdi-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scroll Icon -->
        <div class="icon-scroll" id="scrollDown"></div>
    </section>
    <!-- Welcome Area End -->

    <!-- About Us And Countdown Area Start -->
    <section class="about-us-countdown-area section-padding-100-0" id="about">
        <div class="container">
            <div class="row align-items-center">
                <!-- About Content -->
                <div class="col-12 col-md-6">
                    <div class="about-content-text mb-80">
                        <h6 class="wow fadeInUp" data-wow-delay="300ms">About RTS Pictures</h6>
                        <h3 class="wow fadeInUp" data-wow-delay="300ms">Selamat Datang di RTS Pictures</h3>
                        <p class="wow fadeInUp" data-wow-delay="300ms">RTS Pictures menyediakan layanan jasa design grafis dan editing video dimana kalian bisa membuat visual seperti yang kalian inginkan dengan hasil memuaskan. 
                            Mulai dari design logo, Banner, design kaos atau apapun dengan keinginan kalian dan untuk video mau itu untuk youtube vlog/podcast, documenter, film pendek sampai motion grafis yang dikerjakan oleh para profesional di bidangnya. 
                        </p>
                        <a href="https://www.instagram.com/rtspictures_/" class="btn confer-btn mt-50 wow fadeInUp" data-wow-delay="300ms">More Information <i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>

                <!-- About Thumb -->
                <div class="col-12 col-md-6">
                    <div class="about-thumb mb-80 wow fadeInUp" data-wow-delay="300ms">
                        <img src="{{ asset('frontend') }}/img/LogoRTS/RTSwht.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Up Area -->
    </section>
    <!-- About Us And Countdown Area End -->

    <!-- Our Speakings Area Start -->
    <section class="our-speaker-area bg-img bg-gradient-overlay section-padding-100-60" style="background-image: url({{ asset('frontend') }}/img/bg-img/3.jpg);">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <!-- <p>ROOTS</p> -->
                        <h4>Portofolio</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Our Speakings Area Start -->
                <section class="our-speaker-area section-padding-100">
                    <div class="container">
                        <div class="row">
                            <!-- Single Speaker Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-speaker-area wow fadeInUp" data-wow-delay="300ms">
                                    <!-- Thumb -->
                                    <div class="speaker-single-thumb">
                                        <img src="{{ asset('frontend') }}/img/FotoHOME/1_Logo.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- Single Speaker Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-speaker-area wow fadeInUp" data-wow-delay="300ms">
                                    <!-- Thumb -->
                                    <div class="speaker-single-thumb">
                                        <img src="{{ asset('frontend') }}/img/FotoHOME/2_Banner.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- Single Speaker Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-speaker-area wow fadeInUp" data-wow-delay="300ms">
                                    <!-- Thumb -->
                                    <div class="speaker-single-thumb">
                                        <img src="{{ asset('frontend') }}/img/FotoHOME/3_Fashion.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- Single Speaker Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-speaker-area wow fadeInUp" data-wow-delay="300ms">
                                    <!-- Thumb -->
                                    <div class="speaker-single-thumb">
                                        <img src="{{ asset('frontend') }}/img/FotoHOME/4_ Vlog.png" alt="">
                                        <div class="col-12">
                                            <div class="more-speaker-btn text-center mt-20 wow fadeInUp" data-wow-delay="300ms">
                                                <a class="btn confer-btn" href="https://www.youtube.com/watch?v=6FVIaOCT634">watch<i class="#"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Speaker Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-speaker-area wow fadeInUp" data-wow-delay="300ms">
                                    <!-- Thumb -->
                                    <div class="speaker-single-thumb">
                                        <img src="{{ asset('frontend') }}/img/FotoHOME/5_Profile.png" alt="">
                                        <div class="col-12">
                                            <div class="more-speaker-btn text-center mt-20 wow fadeInUp" data-wow-delay="300ms">
                                                <a class="btn confer-btn" href="https://www.youtube.com/watch?v=gDEKgBZnx3g">watch<i class="#"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Speaker Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-speaker-area wow fadeInUp" data-wow-delay="300ms">
                                    <!-- Thumb -->
                                    <div class="speaker-single-thumb">
                                        <img src="{{ asset('frontend') }}/img/FotoHOME/6_Motion.png" alt="">
                                        <div class="col-12">
                                            <div class="more-speaker-btn text-center mt-20 wow fadeInUp" data-wow-delay="300ms">
                                                <a class="btn confer-btn" href="https://www.youtube.com/watch?v=xP8SI6WDJtU">watch<i class="#"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="more-speaker-btn text-center mt-20 mb-40 wow fadeInUp" data-wow-delay="300ms">
                                    <a class="btn confer-btn-white" href="https://www.instagram.com/rtspictures_/">view all Portofolio <i class="zmdi zmdi-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Our Speakings Area End -->

                <!-- Footer Area Start -->
                <footer class="footer-area bg-img bg-overlay-2 section-padding-100-0">
                    <!-- Main Footer Area -->
                    <div class="main-footer-area">
                        <div class="container">
                            <div class="row">
                                <!-- Single Footer Widget Area -->
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="single-footer-widget mb-60">
                                        <!-- Footer Logo -->
                                        <a href="#" class="footer-logo"><img src="{{ asset('frontend') }}/img/LogoRTS/RTSwht.png" alt=""></a>
                                        <p>"a story should have a beginning, a middle and an end but not necessarilly in that orde"</p>

                                        <!-- Social Info -->
                                        <div class="social-info">
                                            <a href="https://web.facebook.com/errysandi18/"><i class="zmdi zmdi-facebook"></i></a>
                                            <a href="https://www.instagram.com/rtspictures_/"><i class="zmdi zmdi-instagram"></i></a>
                                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                            <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Footer Widget Area -->
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="single-footer-widget mb-60">
                                        <!-- Widget Title -->
                                        <h5 class="widget-title">Contact</h5>

                                        <!-- Contact Area -->
                                        <div class="footer-contact-info">
                                            <p><i class="zmdi zmdi-map"></i> RTS PICTURES</p>
                                            <p><i class="zmdi zmdi-phone"></i> (0857 1631 7441) </p>
                                            <p><i class="zmdi zmdi-email"></i> rtspictures@gmail.com</p>
                                            <p><i class="zmdi zmdi-globe"></i> www.rtspictures.com</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Footer Widget Area -->
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="single-footer-widget mb-60">
                                        <!-- Widget Title -->
                                        <h5 class="widget-title">Support</h5>

                                        <!-- Footer Nav -->
                                        <ul class="footer-nav">
                                            <li><a href="#">Ciky Citra Rezky</a></li>
                                            <li><a href="#">AHHA Production</a></li>
                                            <li><a href="#">Bedhans Management</a></li>
                                            <li><a href="#">Roots Music Studio</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Copywrite Area -->
                    <div class="container">
                        <div class="copywrite-content">
                            <div class="row">
                                <!-- Copywrite Text -->
                                <div class="col-12 col-md-6">
                                    <div class="copywrite-text">
                                        <p>
                                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                            RTS Pictures &copy;
                                            <script>
                                                document.write(new Date().getFullYear());
                                            </script> All rights reserved | we work with legitimate parties <a href="https://colorlib.com" target="_blank">RTS Picture</a>
                                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        </p>
                                    </div>
                                </div>
                                <!-- Footer Menu -->
                                <div class="col-12 col-md-6">
                                    <div class="footer-menu">
                                        <ul class="nav">
                                            <li><a href="#"><i class="zmdi zmdi-circle"></i> Terms of Service</a></li>
                                            <li><a href="#"><i class="zmdi zmdi-circle"></i> Privacy Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- Footer Area End -->
            </div>
        </div>
    </section>

<!-- **** All JS Files ***** -->
@include('frontend.layouts.js')
@yield('app')

</body>

</html>