<!DOCTYPE html>
<html lang="{{ session('locale', 'pl') }}">
  <head>
    <meta charset="utf-8" />
    <title>@yield('title') | Polcab Usługi Transportowe</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
      rel="stylesheet" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"/>

    <link href="{{ url('/assets/lib/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ url('/assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ url('/assets/css/bootstrap.min.css?v=1.0.0') }}" rel="stylesheet" />
    <link href="{{ url('/assets/css/style.css') }}" rel="stylesheet" />
  </head>

  <body>
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-grow text-primary" role="status"></div>
    </div>

    @yield('content')


    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('/assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ url('/assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ url('/assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ url('/assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ url('/assets/js/main.js') }}"></script>
  </body>
</html>
