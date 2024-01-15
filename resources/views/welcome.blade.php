<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pengaduan Masyarakat</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="front/assets/img/favicon.png" rel="icon">
    <link href="front/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="front/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="front/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="front/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="front/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="front/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="front/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="front/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.php" class="logo d-flex align-items-center">
                <img src="front/assets/img/logo.png" alt="">
                <span>PengaduanMasyarakat</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    @if(Route::has('login'))
                    @Auth
                    <li><a class="nav-link scrollto active" href="{{url('/home')}}">Home</a></li>
                    @else
                    <li><a class="nav-link scrollto" href="{{route('login')}}">Login</a></li>
   @if(Route::has('register'))
                    <li><a class="getstarted scrollto" href="{{route('register')}}">Register</a></li>
                    @endif
            @endAuth
            @endif
            </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Pengaduan Masyarakat</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Membantu masyarakat dan pemerintah dalam meningkatkan Pelayanan Publik.</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="/login"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Login</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="front/assets/img/hero-img.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
       

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
        
            <div class="footer-top">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-5 col-md-12 footer-info">
                            <a href="index.html" class="logo d-flex align-items-center">
                                <img src="assets/img/logo.png" alt="">
                                <span>Pengaduan Masyarakat</span>
                            </a>
                            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                                valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
        
                        <div class="col-lg-2 col-6 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                            </ul>
                        </div>
        
                        <div class="col-lg-2 col-6 footer-links">
                            <h4>Our Services</h4>
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
                                <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
                            </ul>
                        </div>
        
                        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                            <h4>Contact Us</h4>
                            <p>
                                A108 Adam Street <br>
                                New York, NY 535022<br>
                                United States <br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
        
                        </div>
        
                    </div>
                </div>
            </div>
        
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </footer><!-- End Footer -->
        
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>
        
        <!-- Vendor JS Files -->
        <script src="front/assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="front/assets/vendor/aos/aos.js"></script>
        <script src="front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="front/assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="front/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="front/assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="front/assets/vendor/php-email-form/validate.js"></script>
        
        <!-- Template Main JS File -->
        <script src="front/assets/js/main.js"></script>
        
        </body>
        
        </html>