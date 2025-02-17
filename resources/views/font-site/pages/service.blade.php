@extends('font-site')
@section('font-site')
<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            @foreach ($navbarView as $item)
            <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>
                {{$item->NavbarName}}
            </h1>
            @endforeach
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="{{url('/')}}" class="nav-item nav-link ">Home</a>
                <a href="{{url('/about')}}" class="nav-item nav-link">About</a>
                <a href="{{url('/service')}}" class="nav-item nav-link active">Service</a>
                <a href="{{url('/menu')}}" class="nav-item nav-link">Menu</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{url('/booking')}}" class="dropdown-item">Booking</a>
                        <a href="{{url('/team')}}" class="dropdown-item">Our Team</a>
                        <a href="{{url('/testimonial')}}" class="dropdown-item">Testimonial</a>
                    </div>
                </div>
                <a href="{{url('/contact')}}" class="nav-item nav-link">Contact</a>
               <!-- Common section start-->
               @include('font-site.pages.signup-login.common')
               <!-- Common section end-->
            </div>
        </div>
    </nav>

    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Service</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->
 
  
  <!-- Best Offer Section -->
    <div class="text-center">
      <h1 class="section-title">Best Offers for You</h1>
    </div>
    <div class="row g-4 justify-content-center mt-4">
      <!-- Offer Card 1 -->
      <div class="col-md-5 col-lg-5">
        <div class="offer-card card" style="background-color: #FFBF0F;">
          <div class="row g-0 align-items-center">
            <div class="col-8 p-4">
              <h2 class="offer-discount">15% OFF</h2>
              <p class="offer-text">on your next purchase</p>
              <p class="offer-date">Use by January 2024</p>
            </div>
            <div class="col-4 text-center">
              <div class="pt-3">
                <h3 class="coupon-code">NEW15</h3>
                <p class="code-label">Coupon Code</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Offer Card 2 -->
      <div class="col-md-5 col-lg-5">
        <div class="offer-card card" style="background-color: #0a5175;">
          <div class="row g-0 align-items-center">
            <div class="col-8 p-4">
              <h2 class="offer-discount">20% OFF</h2>
              <p class="offer-text">on your next purchase</p>
              <p class="offer-date">Use by January 2024</p>
            </div>
            <div class="col-4 text-center">
              
              <div class="pt-3">
                <h3 class="coupon-code">Couple20</h3>
                <p class="code-label">Coupon Code</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Our Services</h5>
            <h1 class="mb-5">Explore Our Services</h1>
        </div>
        <div class="row g-4">
            @foreach ($serviceView as $item)
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <img src="{{asset($item->ServiceImage)}}" alt="" height="50">
                        <h5 style="margin-top: 10px">{{$item->ServiceTitle}}</h5>
                        <p>{{$item->ServiceDetails}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Service End -->
@endsection