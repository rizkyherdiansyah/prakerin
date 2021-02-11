<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HELLO</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('FrontEnd/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('FrontEnd/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('FrontEnd/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('FrontEnd/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('FrontEnd/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('FrontEnd/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('FrontEnd/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('FrontEnd/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('FrontEnd/assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('FrontEnd/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio - v2.1.1
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">


      <h1 class="logo mr-auto"><a href="#"><b>COVID-19sites</b></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo mr-auto"><a href="index.html">Medicio</a></h1> -->

      <nav class="nav-menu d-none d-lg-block">
      
      </nav><!-- .nav-menu -->

      <a href="{{ route('login') }}" class="appointment-btn scrollto"><span class="d-none d-md-inline"></span> LOGIN</a>
      <a href="{{ route('register') }}" class="appointment-btn scrollto"><span class="d-none d-md-inline"></span> DAFTAR</a>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(FrontEnd/assets/img/slide/slide-1.jpg)">
          <div class="container">
            <h2>Selamat Datang Di <span>Covid-19sites</span></h2>
            <p></p>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(FrontEnd/assets/img/slide/slide-2.jpg)">
          <div class="container">
            <h2><b>COVID-19</b></h2>
            <p>adalah penyakit menular yang disebabkan oleh virus corona yang baru-baru ini ditemukan.
              Sebagian besar orang yang tertular COVID-19 akan mengalami gejala ringan hingga sedang, dan akan pulih tanpa penanganan khusus.</p>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(FrontEnd/assets/img/slide/slide-3.jpg)">
          <div class="container">
            <h2>TENTANG COVID-19</h2>
            <p>Virus yang menyebabkan COVID-19 terutama ditransmisikan melalui droplet (percikan air liur) yang dihasilkan saat orang yang terinfeksi batuk, bersin, atau mengembuskan nafas. Droplet ini terlalu berat dan tidak bisa bertahan di udara, sehingga dengan cepat jatuh dan menempel pada lantai atau permukaan lainnya.</p>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Covid-19sites 2021</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset ('FrontEnd/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{asset ('FrontEnd/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{asset ('FrontEnd/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{asset ('FrontEnd/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{asset ('FrontEnd/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{asset ('FrontEnd/assets/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{asset ('FrontEnd/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{asset ('FrontEnd/assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{asset ('FrontEnd/assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset ('FrontEnd/assets/js/main.js') }}"></script>

</body>

</html>