<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <title>One Shop || e-Commerce HTML Template</title>
  <link rel="icon" type="image/png" href="images/favicon.png">
  <link rel="stylesheet" href="{{asset('frontend/css/all.min.css')}}">
<link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/jquery.nice-number.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/jquery.calendar.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/add_row_custon.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/mobile_menu.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/jquery.exzoom.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/multiple-image-video.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/ranger_style.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/jquery.classycountdown.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/venobox.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">

   <!-- Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <!-- <link rel="stylesheet" href="css/rtl.css"> -->
</head>

<body>


  <!--=============================
    DASHBOARD MENU START
  ==============================-->
  <div class="wsus__dashboard_menu">
    <div class="wsusd__dashboard_user">
      <img src="images/dashboard_user.jpg" alt="img" class="img-fluid">
      <p>anik roy</p>
    </div>
  </div>
  <!--=============================
    DASHBOARD MENU END
  ==============================-->


  <!--=============================
    DASHBOARD START
  ==============================-->
    @yield('content');
  <!--=============================
    DASHBOARD START
  ==============================-->


  <!--============================
      SCROLL BUTTON START
    ==============================-->
  <div class="wsus__scroll_btn">
    <i class="fas fa-chevron-up"></i>
  </div>
  <!--============================
    SCROLL BUTTON  END
  ==============================-->

<!-- jQuery library -->
<script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
<!-- Font Awesome -->
<script src="{{ asset('frontend/js/Font-Awesome.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('frontend/js/select2.min.js') }}"></script>
<!-- Slick Slider -->
<script src="{{ asset('frontend/js/slick.min.js') }}"></script>
<!-- SimplyCountdown -->
<script src="{{ asset('frontend/js/simplyCountdown.js') }}"></script>
<!-- Product Zoomer -->
<script src="{{ asset('frontend/js/jquery.exzoom.js') }}"></script>
<!-- Nice Number -->
<script src="{{ asset('frontend/js/jquery.nice-number.min.js') }}"></script>
<!-- Counter -->
<script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.countup.min.js') }}"></script>
<!-- Add Row -->
<script src="{{ asset('frontend/js/add_row_custon.js') }}"></script>
<!-- Multiple Image Video -->
<script src="{{ asset('frontend/js/multiple-image-video.js') }}"></script>
<!-- Sticky Sidebar -->
<script src="{{ asset('frontend/js/sticky_sidebar.js') }}"></script>
<!-- Price Ranger -->
<script src="{{ asset('frontend/js/ranger_jquery-ui.min.js') }}"></script>
<script src="{{ asset('frontend/js/ranger_slider.js') }}"></script>
<!-- Isotope -->
<script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
<!-- Venobox -->
<script src="{{ asset('frontend/js/venobox.min.js') }}"></script>
<!-- Classy Countdown -->
<script src="{{ asset('frontend/js/jquery.classycountdown.js') }}"></script>
<!-- Main Custom -->
<script src="{{ asset('frontend/js/main.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
 <script>
        @if($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error('{{$error}}')
            @endforeach
        @endif 
    </script>

</body>

</html>