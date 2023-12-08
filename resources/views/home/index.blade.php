@extends('layouts.home')

@section('title') @lang('Strona główna') @endsection


@section('content')
@include('home.include.topbar')
<!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0" >
    <a href="{{ route('h.index') }}" class="navbar-brand d-flex align-items-center">
       <div class="my-2">
        <h1 class="m-0"> <img src="https://polcab.com/themes/polcab/assets/images/polcab-red.svg" alt="" class="img-fluid" style="height: 48px;"></h1>
       <h6 class="m-0 text-center">@lang('Usługi transportowe')</h6>
       </div>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" > <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
       <div class="navbar-nav ms-auto py-3 py-lg-0">
          <a href="{{ route('h.index') }}" class="nav-item nav-link active">@lang('Strona główna')</a>
          <a href="about.html" class="nav-item nav-link">@lang('O nas')</a>
          <a href="service.html" class="nav-item nav-link">@lang('Nasz tabor')</a>
          <a href="contact.html" class="nav-item nav-link">@lang('Kontakt')</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa-solid fa-language fa-xl"></i></a>
            <div class="dropdown-menu bg-light m-0">
              <a href="#" class="dropdown-item">@lang('Polski')</a>
              <a href="#" class="dropdown-item">@lang('English')</a>
              <a href="#" class="dropdown-item">@lang('Deutsch')</a>
              <a href="#" class="dropdown-item">@lang('Italiano')</a>
            </div>
          </div>
       </div>
    </div>
 </nav>
 <!-- Navbar End --> <!-- Carousel Start -->
 <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
       <div class="carousel-inner">
          <div class="carousel-item active">
             <img class="w-100" src="{{ url('/assets/img/carousel/1.png') }}" alt="Image" />
             <div class="carousel-caption">
                <div class="container">
                   <div class="row justify-content-center">
                      <div class="col-12 col-lg-10">
                         <h5 class="text-light text-uppercase mb-3 animated slideInDown" > @lang('Witamy w Polcab') </h5>
                         <h1 class="display-2 text-light mb-3 animated slideInDown"> @lang('Usługi transportowe') </h1>
                         <ol class="breadcrumb mb-4 pb-2">
                            <li class="breadcrumb-item fs-5 text-light"> @lang('Regionalne') </li>
                            <li class="breadcrumb-item fs-5 text-light"> @lang('Krajowe') </li>
                            <li class="breadcrumb-item fs-5 text-light"> @lang('Międzynarodowe') </li>
                         </ol>
                         <a href="" class="btn btn-primary py-3 px-5" >@lang('O nas')</a >
                      </div>
                   </div>
                </div>
             </div>
          </div>
          {{-- <div class="carousel-item">
             <img class="w-100" src="img/carousel-2.jpg" alt="Image" />
             <div class="carousel-caption">
                <div class="container">
                   <div class="row justify-content-center">
                      <div class="col-12 col-lg-10">
                         <h5 class="text-light text-uppercase mb-3 animated slideInDown" > Welcome to Apex </h5>
                         <h1 class="display-2 text-light mb-3 animated slideInDown"> Professional Tiling & Painting Services </h1>
                         <ol class="breadcrumb mb-4 pb-2">
                            <li class="breadcrumb-item fs-5 text-light"> Commercial </li>
                            <li class="breadcrumb-item fs-5 text-light"> Residential </li>
                            <li class="breadcrumb-item fs-5 text-light"> Industrial </li>
                         </ol>
                         <a href="" class="btn btn-primary py-3 px-5" >More Details</a >
                      </div>
                   </div>
                </div>
             </div>
          </div> --}}
       </div>
       <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev" > <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button> <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next" > <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
    </div>
 </div>
 <!-- Carousel End --> <!-- About Start -->
 <div class="container-xxl py-5">
    <div class="container">
       <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
             <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px" >
                <img class="position-absolute w-100 h-100" src="{{ url('/assets/img/about/1.png') }}" alt="" style="object-fit: cover" />
                <div class="position-absolute top-0 start-0 bg-white pe-3 pb-3" style="width: 200px; height: 200px" >
                   <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3" >
                      <h1 class="text-white">{{ date('Y')-1989 }}</h1>
                      <h2 class="text-white">@lang('Lata')</h2>
                      <h5 class="text-white mb-0">@lang('Doświadczenia')</h5>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
             <div class="h-100">
                <div class="border-start border-5 border-primary ps-4 mb-5">
                   <h6 class="text-body text-uppercase mb-2">@lang('O nas')</h6>
                   <h1 class="display-6 mb-0"> @lang('Usługi transportowe na wyciągnięcie ręki') </h1>
                </div>
                <p> @lang('Polcab to dynamiczna firma ciężarowa, która specjalizuje się w profesjonalnym i niezawodnym transporcie drogowym. Nasza firma zajmuje się transportem i spedycją od 1989 roku. Zdobyła renomę dzięki wysokiej jakości usług oraz zobowiązaniu do satysfakcji klienta.')</p>
                <p class="mb-4"> @lang('Nasze usługi obejmują także przewóz materiałów niebezpiecznych (ADR) i klasy I. Posiadamy sprzęt umożliwiający transport towaru w kontrolowanych temperaturach. Dbamy o jakość i bezpieczeństwo czego dowodem jest nowoczesna flota (spełniająca standard emisji spalin EURO 5) i sprawdzeni kierowcy z wieloletnim doświadczeniem. Część naszych zestawów posiada podwójna obsadę, dzięki temu możemy dla państwa skrócić czas dostawy.')</p>
                <div class="border-top mt-4 pt-4">
                   <div class="row g-4">
                      <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.1s">
                         <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3" ></i>
                         <h6 class="mb-0">@lang('Najwyższa jakość')</h6>
                      </div>
                      <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.3s">
                         <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3" ></i>
                         <h6 class="mb-0">@lang('Szybki transport')</h6>
                      </div>
                      <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.5s">
                         <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3" ></i>
                         <h6 class="mb-0">@lang('Wieloletnie doświadczenie')</h6>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- About End --> <!-- Facts Start -->
 <div class="container-fluid my-5 p-0">
    <div class="row g-0">
       <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.1s">
          <div class="position-relative">
             <img class="img-fluid w-100" src="{{ url('/assets/img/fact-1.jpg') }}" alt="" />
             <div class="facts-overlay">
                <h1 class="display-1">01</h1>
                <h4 class="text-white mb-3">@lang('Profesjonalne doradztwo')</h4>
                <p class="text-white"> @lang('pozwalające minimalizować czas i koszty transportu') </p>
                <a class="text-white small" href="" >@lang('Więcej')<i class="fa fa-arrow-right ms-3"></i ></a>
             </div>
          </div>
       </div>
       <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.3s">
          <div class="position-relative">
             <img class="img-fluid w-100" src="{{ url('/assets/img/fact-2.jpg') }}" alt="" />
             <div class="facts-overlay">
                <h1 class="display-1">02</h1>
                <h4 class="text-white mb-3">@lang('Elastyczność')</h4>
                <p class="text-white"> @lang('Stworzymy indywidualną ofertę dostosowaną do Państwa potrzeb') </p>
                <a class="text-white small" href="" >@lang('Więcej')<i class="fa fa-arrow-right ms-3"></i ></a>
             </div>
          </div>
       </div>
       <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.5s">
          <div class="position-relative">
             <img class="img-fluid w-100" src="{{ url('/assets/img/fact-3.jpg') }}" alt="" />
             <div class="facts-overlay">
                <h1 class="display-1">03</h1>
                <h4 class="text-white mb-3">@lang('Wszechstronność')</h4>
                <p class="text-white"> @lang('Przewozimy wszelkie rodzaje ładunków') </p>
                <a class="text-white small" href="" >@lang('Więcej')<i class="fa fa-arrow-right ms-3"></i ></a>
             </div>
          </div>
       </div>
       <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.7s">
          <div class="position-relative">
             <img class="img-fluid w-100" src="{{ url('/assets/img/fact-4.jpg') }}" alt="" />
             <div class="facts-overlay">
                <h1 class="display-1">04</h1>
                <h4 class="text-white mb-3">@lang('Bezpieczeństwo i spokój')</h4>
                <p class="text-white"> @lang('Posiadamy nowoczesną flotę i doświadczonych kierowców oraz istnieje możliwość sprawdzenia lokalizacji towaru przez całą dobę') </p>
                <a class="text-white small" href="" >@lang('Więcej')<i class="fa fa-arrow-right ms-3"></i ></a>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- Facts End --> <!-- Features Start -->
 <div class="container-xxl py-5">
    <div class="container">
       <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
             <div class="border-start border-5 border-primary ps-4 mb-5">
                <h6 class="text-body text-uppercase mb-2">@lang('Dlaczego my?')</h6>
                <h1 class="display-6 mb-0"> @lang('Jesteśmy ekspertami w dziedzinie transportu') </h1>
             </div>
             <p class="mb-5"> Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet </p>
             <div class="row gy-5 gx-4">
                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                   <div class="d-flex align-items-center mb-3">
                      <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3" ></i>
                      <h6 class="mb-0">Tempor erat elitr rebum at clita.</h6>
                   </div>
                   <span >Magna sea eos sit dolor, ipsum amet ipsum lorem diam</span >
                </div>
                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                   <div class="d-flex align-items-center mb-3">
                      <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3" ></i>
                      <h6 class="mb-0">Tempor erat elitr rebum at clita.</h6>
                   </div>
                   <span >Magna sea eos sit dolor, ipsum amet ipsum lorem diam</span >
                </div>
                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                   <div class="d-flex align-items-center mb-3">
                      <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3" ></i>
                      <h6 class="mb-0">Tempor erat elitr rebum at clita.</h6>
                   </div>
                   <span >Magna sea eos sit dolor, ipsum amet ipsum lorem diam</span >
                </div>
                <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                   <div class="d-flex align-items-center mb-3">
                      <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3" ></i>
                      <h6 class="mb-0">Tempor erat elitr rebum at clita.</h6>
                   </div>
                   <span >Magna sea eos sit dolor, ipsum amet ipsum lorem diam</span >
                </div>
             </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
             <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px" >
                <img class="position-absolute w-100 h-100" src="{{ url('/assets/img/feature.jpg') }}" alt="" style="object-fit: cover" />
                <div class="position-absolute top-0 start-0 bg-white pe-3 pb-3" style="width: 200px; height: 200px" >
                   <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3" >
                    <h1 class="text-white">{{ date('Y')-1989 }}</h1>
                    <h2 class="text-white">@lang('Lata')</h2>
                    <h5 class="text-white mb-0">@lang('Doświadczenia')</h5>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- Features End --> <!-- Service Start -->
 <div class="container-xxl py-5">
    <div class="container">
       <div class="row g-5 align-items-end mb-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
             <div class="border-start border-5 border-primary ps-4">
                <h6 class="text-body text-uppercase mb-2">@lang('Usługi')</h6>
                <h1 class="display-6 mb-0"> @lang('Te usługi oferujemy Wam') </h1>
             </div>
          </div>
       </div>
       <div class="row g-4 justify-content-center">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
             <div class="service-item bg-light overflow-hidden h-100">
                <img class="img-fluid" src="img/service-1.jpg" alt="" />
                <div class="service-text position-relative text-center h-100 p-4">
                   <h5 class="mb-3">Tempor erat elitr rebum</h5>
                   <p> Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos </p>
                   <a class="small" href="" >READ MORE<i class="fa fa-arrow-right ms-3"></i ></a>
                </div>
             </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
             <div class="service-item bg-light overflow-hidden h-100">
                <img class="img-fluid" src="img/service-2.jpg" alt="" />
                <div class="service-text position-relative text-center h-100 p-4">
                   <h5 class="mb-3">Tempor erat elitr rebum</h5>
                   <p> Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos </p>
                   <a class="small" href="" >READ MORE<i class="fa fa-arrow-right ms-3"></i ></a>
                </div>
             </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
             <div class="service-item bg-light overflow-hidden h-100">
                <img class="img-fluid" src="img/service-3.jpg" alt="" />
                <div class="service-text position-relative text-center h-100 p-4">
                   <h5 class="mb-3">Tempor erat elitr rebum</h5>
                   <p> Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos </p>
                   <a class="small" href="" >READ MORE<i class="fa fa-arrow-right ms-3"></i ></a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- Service End --> <!-- Appointment Start -->
 {{-- <div class="container-fluid appointment my-5 py-5 wow fadeIn" data-wow-delay="0.1s" >
    <div class="container py-5">
       <div class="row g-5">
          <div class="col-lg-5 col-md-6 wow fadeIn" data-wow-delay="0.3s">
             <div class="border-start border-5 border-primary ps-4 mb-5">
                <h6 class="text-white text-uppercase mb-2">Appointment</h6>
                <h1 class="display-6 text-white mb-0"> A Company Involved In Service And Maintenance </h1>
             </div>
             <p class="text-white mb-0"> Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet </p>
          </div>
          <div class="col-lg-7 col-md-6 wow fadeIn" data-wow-delay="0.5s">
             <form>
                <div class="row g-3">
                   <div class="col-sm-6">
                      <div class="form-floating"> <input type="text" class="form-control bg-dark border-0" id="gname" placeholder="Gurdian Name" /> <label for="gname">Your Name</label> </div>
                   </div>
                   <div class="col-sm-6">
                      <div class="form-floating"> <input type="email" class="form-control bg-dark border-0" id="gmail" placeholder="Gurdian Email" /> <label for="gmail">Your Email</label> </div>
                   </div>
                   <div class="col-sm-6">
                      <div class="form-floating"> <input type="text" class="form-control bg-dark border-0" id="cname" placeholder="Child Name" /> <label for="cname">Your Mobile</label> </div>
                   </div>
                   <div class="col-sm-6">
                      <div class="form-floating"> <input type="text" class="form-control bg-dark border-0" id="cage" placeholder="Child Age" /> <label for="cage">Service Type</label> </div>
                   </div>
                   <div class="col-12">
                      <div class="form-floating"> <textarea class="form-control bg-dark border-0" placeholder="Leave a message here" id="message" style="height: 100px" ></textarea> <label for="message">Message</label> </div>
                   </div>
                   <div class="col-12"> <button class="btn btn-primary w-100 py-3" type="submit"> Get Appointment </button> </div>
                </div>
             </form>
          </div>
       </div>
    </div>
 </div> --}}
 <!-- Appointment End --> <!-- Team Start -->
 <div class="container-xxl py-5">
    <div class="container">
       <div class="row g-5 align-items-end mb-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
             <div class="border-start border-5 border-primary ps-4">
                <h6 class="text-body text-uppercase mb-2">@lang('Zespół')</h6>
                <h1 class="display-6 mb-0">@lang('Zespół Polcab')</h1>
             </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
             <p class="mb-0"> @lang('Nasz zespół odpowie na wszystkie państwa pytania lub wątpliwości i pomoże w procesie tworzenia Naszej nowej współpracy.') </p>
          </div>
       </div>
       <div class="row g-4">
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
             <div class="team-item position-relative">
                <img class="img-fluid" src="{{ url('/assets/img/team-1.jpg') }}" alt="" />
                <div class="team-text bg-white p-4">
                   <h5>Michał Gamoń</h5>
                   <span><a href="tel:+48324229775">+48 32 422 97 75</a></span><br>
                   <span><a href="tel:+48667666286">+48 667 666 286</a></span><br>
                   <span><a href="mailto:michal@polcab.com">michal@polcab.com</a></span>
                </div>
             </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
             <div class="team-item position-relative">
                <img class="img-fluid" src="{{ url('/assets/img/team-2.jpg') }}" alt="" />
                <div class="team-text bg-white p-4">
                   <h5>Natalia Gamon (Włochy)</h5>
                   <span><a href="tel:+393463328203">+39 3463328203</a></span><br>
                   <span><a href="mailto:natalia@polcab.com">natalia@polcab.com</a></span>
                </div>
             </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
             <div class="team-item position-relative">
                <img class="img-fluid" src="{{ url('/assets/img/team-3.jpg') }}" alt="" />
                <div class="team-text bg-white p-4">
                   <h5>Sławomir Pendziałek</h5>
                   <span><a href="tel:+48324223001">+48 32 422 30 01</a></span><br>
                   <span><a href="tel:+48608340000">+48 608 340 000</a></span><br>
                   <span><a href="mailto:s.pendzialek@polcab.com">s.pendzialek@polcab.com</a></span>
                </div>
             </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="team-item position-relative">
               <img class="img-fluid" src="{{ url('/assets/img/team-2.jpg') }}" alt="" />
               <div class="team-text bg-white p-4">
                  <h5>Marek Teliszewski</h5>
                  <span><a href="tel:+48604091180">+48 604 091 180</a></span><br>
                   <span><a href="mailto:natalia@polcab.com">m.teliszewski@polcab.com</a></span>
               </div>
            </div>
         </div>
       </div>
    </div>
 </div>

 @include('home.include.footer')
@endsection
