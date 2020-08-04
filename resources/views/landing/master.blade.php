<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Informasi Kepemudaan Kota Malang</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('landing/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('landing/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('landing/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('landing/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('landing/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('landing/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('landing/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('landing/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('landing/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('landing/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('landing/assets/css/style.css')}}" rel="stylesheet">

  <!-- datepicker -->
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

  <!-- Fullcalendar -->
  <link href="{{asset('landing/assets/fullCal/core/main.css')}}" rel='stylesheet' />
  <link href="{{asset('landing/assets/fullCal/daygrid/main.css')}}" rel='stylesheet' />
  <link href="{{asset('landing/assets/fullCal/bootstrap/main.css')}}" rel='stylesheet' />

  <!-- SweetAlert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

  <!-- =======================================================
  * Template Name: Company - v2.0.1
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  


</head>

<body>

  @include('landing.header')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    @yield('content')

  </main><!-- End #main -->

  @include('landing.footer')

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('landing/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('landing/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('landing/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('landing/assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('landing/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('landing/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('landing/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('landing/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('landing/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('landing/assets/js/main.js')}}"></script>

  <!-- datepicker -->
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

  <!-- Full Calendar -->
  <script src="{{asset('landing/assets/fullCal/core/main.js')}}"></script>
  <script src="{{asset('landing/assets/fullCal/daygrid/main.js')}}"></script>
  <script src="{{asset('landing/assets/fullCal/bootstrap/main.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <!-- <script src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script> -->
  <script src="https://unpkg.com/tooltip.js/dist/umd/tooltip.min.js"></script>
  <!-- Custom Js -->
  <script src="{{asset('js/customLanding.js')}}"></script>

  @yield('script')
</body>

</html>
