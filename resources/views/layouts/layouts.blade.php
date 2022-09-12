<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>BPJN Sulawesi Tenggara</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/Logo.jpg" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Presento - v3.8.1
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">

        <div class="container d-flex align-items-center">
            <a class="navbar-brand" href="{{ ('/') }}">
                <img src="{{ asset('assets') }}/img/Logo.jpg" height="70" />
            </a>
            <h1 class="logo me-auto"><a href="{{ ('/') }}">&emsp;Balai Pelaksana Jalan
                    <p>&emsp;Nasional Sulawesi<br>
                    &emsp;Tenggara</p>
                </a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="{{ ('/') }}">BERANDA</a></li>
                    <li class="dropdown"><a href="#"><span>PROFIL</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ route('lokasi-kantor') }}">LOKASI KANTOR</a></li>
                            <li><a href="{{ route('tugas-fungsi') }}">TUGAS DAN FUNGSINYA</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="{{ route('organisasi') }}">ORGANISASI</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('informasi-publik') }}">INFORMASI PUBLIK</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">PRODUK</a></li>
                    <li><a class="nav-link scrollto" href="#team">DOKUMEN</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('kontak') }}">KONTAK</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Balai Pelaksana Jalan Nasional<span>.</span></h3>
                        <p>
                            Kantor P2JN KENDARI
                            Jl. H. Latama Bunggulawa No.11, Punggolaka, Kec. Puuwatu, Kota Kendari, Sulawesi Tenggara
                            93115
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>Social Media</h4>
                        <div class="social-links text-center text-md-end pt-3 pt-md-0">
                            <a href="https://twitter.com/pupr_binamarga?lang=id" class="twitter"><i
                                    class="bx bxl-twitter"></i></a>
                            <a href="https://id-id.facebook.com/puprbinamarga" class="facebook"><i
                                    class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/pupr_binamarga/" class="instagram"><i
                                    class="bx bxl-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UCANc-9SxyY4muVUyOmThh1Q/videos" class="youtube"><i
                                    class="bx bxl-youtube"></i></a>
                            <a href="https://www.tiktok.com/@pupr_binamarga" class="tiktok"><i
                                    class="bx bxl-tiktok"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start ">
                <div class="copyright ">
                    &copy;Copyright 2022 Balai Pelaksana Jalan Nasional
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <style type="text/css">
    .navbar-inverse {
    background-color: #3b5998;
    font-size:18px;
    }
</style>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>