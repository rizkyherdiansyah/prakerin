<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>COVID-19 by IKOY</title>
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
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#about">About</a></li>
        
        </ul>
      </nav><!-- .nav-menu -->

      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>

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
            <p>Live Data Kasus COVID-19 di Indonesia dan Dunia</p>
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

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <!-- End Featured Services Section -->

    <!-- ======= Cta Section ======= -->
    <!-- End Cta Section -->

    <!-- ======= About Us Section ======= -->
    <!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-doctor-alt"></i>
                    <span>{{$positif}}</span>
              <p><strong>POSITIF</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-heart-beat"></i>
                    <span>{{$sembuh}}</span>
              <p><strong>SEMBUH</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-patient-bed"></i>
                     <span>{{$meninggal}}</span>
              <p><strong>MENINGGAL</strong></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-globe"></i>
                   <span><?php echo $posglobal['value'] ?></span>  
              <p><strong>DUNIA</strong></p>
            </div>
          </div>
        </div>

      </div><br><br>
         <div class="col text-center">
        <h6><p>Update Terakhir : {{ $tanggal }}</p></h6>
    </div> 
  </div>
    </section><!-- End Counts Section -->

    <!-- ======== Table Section ======== -->
    <section id="provinsi" class="provinsi">
        <div class="container">
  
          <div class="section-title" data-aos="zoom-out">
            <h2>Data Kasus Indonesia</h2>
          </div>
  
          <div class="row content" data-aos="fade-up">
                
              <div class="table-wrapper-scroll-y my-custom-scrollbar col-lg-12">
  
                <table class="table table-bordered table-striped mb-0 " width="100%">
                  <thead>
                    <tr>
                      <th scope="col"><center>No</center></th>
                      <th scope="col"><center>Provinsi</center></th>
                      <th scope="col"><center>Jumlah Positif</center></th>
                      <th scope="col"><center>Jumlah Sembuh</center></th>
                      <th scope="col"><center>Jumlah Meninggal</center></th>
                    </tr>
                  </thead>
                <tbody>
                @php
                  $no = 1;
                @endphp
  
                @foreach($tampil as $tmp)
                    <tr>
                      <th scope="row"><center>{{$no++}}</center></th>
                        <td><center>{{$tmp->nama_provinsi}}</center></td>
                        <td><center>{{number_format($tmp->jumlah_positif)}}</center></td>
                        <td><center>{{number_format($tmp->jumlah_sembuh)}}</center></td>
                        <td><center>{{number_format($tmp->jumlah_meninggal)}}</center></td>
                    </tr>
                    
                  </tbody>
                  @endforeach
                </table>
              </div>
            </div>
          </div>
  
        </div>
        </section>
      <!-- ======== End Table Section ======== -->
      
      <!-- ========  Table Section Dunia ======== -->
      <section id="global" class="global">
        <div class="container">
  
          <div class="section-title" data-aos="zoom-out">
            <h2>Data Kasus Global</h2>
          </div>
  
          <div class="row content" data-aos="fade-up">
                
              <div class="table-wrapper-scroll-y my-custom-scrollbar col-lg-12">
  
                <table class="table table-bordered table-striped mb-0 " width="100%">
                  <thead>
                    <tr>
                      <th scope="col"><center>No</center></th>
                      <th scope="col"><center>Negara</center></th>
                      <th scope="col"><center>Jumlah Positif</center></th>
                      <th scope="col"><center>Jumlah Sembuh</center></th>
                      <th scope="col"><center>Jumlah Meninggal</center></th>
                    </tr>
                  </thead>
                <tbody>
                @php
                  $no = 1;
                @endphp
                  @foreach($dunia as $data)
                      <tr>
                        <td> <?php echo $no++ ?></td>
                        <td> <?php echo $data['attributes']['Country_Region'] ?></td>
                        <td> <?php echo number_format($data['attributes']['Confirmed']) ?></td>
                        <td><?php echo number_format($data['attributes']['Recovered'])?></td>
                        <td><?php echo number_format($data['attributes']['Deaths'])?></td>
                      </tr>
                    @endforeach
                  </tbody>
                  
                </table>
              </div>
            </div>
          </div>
  
        </div>
        </section>
      <!-- ======== End Table Section Dunia ======= -->


    <!-- ======= Features Section ======= -->
    <!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    <!-- End Appointment Section -->

    <!-- ======= Departments Section ======= -->
    <!-- End Departments Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- End Testimonials Section -->

    <!-- ======= Doctors Section ======= -->
    <!-- End Doctors Section -->

    <!-- ======= Gallery Section ======= -->
    <!-- End Gallery Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questioins Section ======= -->
   <!-- End Frequently Asked Questioins Section -->

    <!-- ======= Contact Section ======= -->
    <!-- End #main -->

   <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>COVID-19sites</h3>
              <p>
                Jl.BarurayaVII,NO.13 <br>
                Bandung,Jawa Barat,Indonesia
                40239<br><br>
                <strong>Phone:</strong>0881023083075<br>
                <strong>Email:</strong>covid-19sites@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

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