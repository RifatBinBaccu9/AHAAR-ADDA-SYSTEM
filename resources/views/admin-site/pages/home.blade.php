@extends('admin-site')
@section('admin-site')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard">
      <div class="row">
        
        <!-- Left side columns -->
        {{-- <div class="col-lg-8"> --}}
          <div class="row">
      
          <!-- Customers Card -->
          <div class="col-xxl-4 col-md-6">
      
            <div class="card info-card customers-card">
      
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>
                </ul>
              </div>
      
              <div class="card-body">
                <h5 class="card-title">Customers <span>| Info</span></h5>
      
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <h6>Total Users: {{ $userCount }}</h6>
              
                    <span class="text-{{ $isIncrease ? 'success' : 'danger' }} small pt-1 fw-bold">
                      {{ $percentageChange }}%
                  </span>
                  <span class="text-muted small pt-2 ps-1">
                      {{ $isIncrease ? 'increase' : 'decrease' }}
                  </span>
      
                  </div>
                </div>
      
              </div>
            </div>
      
          </div><!-- End Customers Card -->

    <!-- costomar Card -->
    <div class="col-xxl-4 col-md-6">
      <div class="card info-card sales-card">

        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Filter</h6>
            </li>
          </ul>
        </div>

        <div class="card-body">
          <h5 class="card-title">Booking <span>| Info</span></h5>

          <div class="d-flex align-items-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-table text-success"></i>
            </div>
            <div class="ps-3">
              <h6>Booking Pepole: {{ $bookingCount }}</h6>
              
              <span class="text-{{ $isIncreases ? 'success' : 'danger' }} small pt-1 fw-bold">
                {{ $bookingChange }}%
            </span>
            <span class="text-muted small pt-2 ps-1">
                {{ $isIncreases ? 'increase' : 'decrease' }}
            </span>
            

            </div>
          </div>
        </div>

      </div>
    </div><!-- End Sales Card -->

    <!-- Booking Card -->
<div class="col-xxl-4 col-md-6">
  <div class="card info-card sales-card">

    <div class="filter">
      <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
        <li class="dropdown-header text-start">
          <h6>Filter</h6>
        </li>
      </ul>
    </div>

    <div class="card-body">
      <h5 class="card-title">Booking Status<span>| Info</span></h5>

      <div class="d-flex align-items-center">
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          <i class="bi bi-three-dots"></i> <!-- Table Icon -->
        </div>
        <div class="ps-3">
          <!-- Booking Rejected Count -->
          <h5 class="text-danger" style="text-size: 20px; font-wwight:800;">
            <i class="fa-solid fa-ban"></i> <!-- Rejected Icon -->
            Booking Rejected: {{ $bookingRejectedCount }}
          </h5>
          <!-- Booking Accepted Count (Fix the variable name if needed) -->
          <h5 class="text-success" style="tab-size: 20px; font-wwight:800;">
            <i class="fa-solid fa-check"></i> <!-- Accepted Icon -->
            Booking Accepted: {{ $bookingAcceptedCount }}
          </h5>
        </div>
      </div>
    </div>
  </div>
</div><!-- End Booking Card -->

<!-- Sales Card -->
<div class="col-xxl-4 col-md-6">
  <div class="card info-card sales-card">

    <div class="filter">
      <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
        <li class="dropdown-header text-start">
          <h6>Filter</h6>
        </li>
      </ul>
    </div>

    <div class="card-body">
      <h5 class="card-title">Contact <span>| Info</span></h5>

      <div class="d-flex align-items-center">
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          <i class="fa-solid fa-address-book text-info"></i>
        </div>
        <div class="ps-3">
          <h6>Contact Pepole: {{ $contact }}</h6>
          
          <span class="text-{{ $iscontact ? 'success' : 'danger' }} small pt-1 fw-bold">
            {{ $contactChange }}%
        </span>
        <span class="text-muted small pt-2 ps-1">
            {{ $iscontact ? 'increase' : 'decrease' }}
        </span>
        

        </div>
      </div>
    </div>

  </div>
</div><!-- End Sales Card -->

    </div>
    </div>
  </div>
</section>
  </main>
@endsection