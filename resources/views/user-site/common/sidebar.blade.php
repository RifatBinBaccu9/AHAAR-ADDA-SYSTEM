<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{url('/user/profiles')}}">
          <i class="bi bi-grid"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-heading">Booking List</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/user/bookingList')}}">
          <i class="bi bi-layout-text-window-reverse"></i><span>Booking Data</span>
        </a>
      </li><!-- End Tables Nav -->
      <li class="nav-heading">Pages Setting</li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('logout') }}">
          <i class="bi bi-box-arrow-right"></i>
          <span>Log Out</span>
      </a>
  </li><!-- End Booking Setting Nav -->
    </ul>

  </aside>