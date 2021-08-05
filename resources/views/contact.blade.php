<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Roots Music Studio</title>

    @include('frontend.layouts.css')

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

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url({{ asset('frontend') }}/img/bg-img/fullcontac.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Contact</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact For Booking</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Contact Us Area Start -->
    <section class="contact--us-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Contact Us Thumb -->
                <div class="col-12 col-lg-6">
                    <div class="contact-us-thumb mb-100">
                        <img src="{{ asset('frontend') }}/img/BahanFoto/3.jpg" alt="">
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-12 col-lg-6">
                    <div class="contact_from_area mb-100 clearfix">
                        <!-- Contact Heading -->
                        <div class="contact-heading">
                            <h4>Pemesanan</h4>
                            <p>untuk melanjutkan pemesanan silahkan berdiskusi dengan admin mengenai range harga dan konsep project yang anda inginkan</p>
                        </div>
                        <!-- Button -->
                        <div class="col-12">
                            <div class="more-speaker-btn text-center mt-20 wow fadeInUp" data-wow-delay="300ms">
                                <a class="btn confer-btn" href="https://api.whatsapp.com/message/EILRYIZ5M5GJG1">Chat dan Nego<i class="#"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Area End -->

   
    <!-- Contact Info Area -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact--info-area bg-boxshadow">
                    <div class="row">
                        <!-- Single Contact Info -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="single-contact--info text-center">
                                <!-- Contact Info Icon -->
                                <div class="contact--info-icon">
                                    <img src="{{ asset('frontend') }}/img/core-img/icon-5.png" alt="">
                                </div>
                                   <h5>RTS Pictures</h5>
                            </div>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="single-contact--info text-center">
                                <!-- Contact Info Icon -->
                                <div class="contact--info-icon">
                                    <img src="{{ asset('frontend') }}/img/core-img/icon-6.png" alt="">
                                </div>
                                <h5>(0857) 1631 7441</h5>
                            </div>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="single-contact--info text-center">
                                <!-- Contact Info Icon -->
                                <div class="contact--info-icon">
                                    <img src="{{ asset('frontend') }}/img/core-img/icon-7.png" alt="">
                                </div>
                                <h5>rtspictures@gmail.com</h5>
                            </div>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="single-contact--info text-center">
                                <!-- Contact Info Icon -->
                                <div class="contact--info-icon">
                                    <img src="{{ asset('frontend') }}/img/core-img/icon-8.png" alt="">
                                </div>
                                <h5>www.rtspictures.com</h5>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <!-- **** All JS Files ***** -->
    
    @include('frontend.layouts.js')

</body>

</html>