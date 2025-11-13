  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2  bg-white my-2" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand px-4 py-3 m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="{{ asset('assets/img/logo-ct-dark.png') }}" class="navbar-brand-img" width="26" height="26" alt="main_logo">
        <span class="ms-1 text-sm text-dark">Fox Squad</span>
      </a>
    </div>  
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
    <li class="nav-item">
  <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active bg-gradient-dark text-white' : 'text-dark' }}"
     href="{{ route('admin.dashboard') }}">
    <i class="material-symbols-rounded opacity-5">dashboard</i>
    <span class="nav-link-text ms-1">Dashboard</span>
  </a>
</li>



<li class="nav-item">
  <a class="nav-link text-dark d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#foxServicesMenu" role="button" aria-expanded="false" aria-controls="foxServicesMenu">
    <span>
      <i class="material-symbols-rounded opacity-5">build</i>
      <span class="nav-link-text ms-1">Fox Services</span>
    </span>
    <i class="material-symbols-rounded">expand_more</i>
  </a>

  <div class="collapse" id="foxServicesMenu">
    <ul class="nav flex-column ms-4">
      <li class="nav-item">
        <a class="nav-link text-dark" href="{{ route('admin.property_management.index')}}">Property Management</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="{{ route('admin.lease.index')}}">Lease</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="{{ route('admin.buying_selling.index')}}">Buying and Selling</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="{{ route('admin.off_plan.index')}}">Off Plan</a>
      </li>
    </ul>
  </div>
</li>

<li class="nav-item">
  <a class="nav-link {{ request()->routeIs('admin.about.index') ? 'active bg-gradient-dark text-white' : 'text-dark' }}"
     href="{{ route('admin.about.index') }}">
    <i class="material-symbols-rounded opacity-5">table_view</i>
    <span class="nav-link-text ms-1">About</span>
  </a>
</li>

        <li class="nav-item">
  <a class="nav-link text-dark" href="{{ route('admin.contact.index')}}">
    <i class="material-symbols-rounded opacity-5">contact_page</i>
    <span class="nav-link-text ms-1">Fox Contact</span>
  </a>
</li>

<li class="nav-item">
  <a class="nav-link text-dark" href="{{ route('admin.partnership.index')}}">
    <i class="material-symbols-rounded opacity-5">handshake</i>
    <span class="nav-link-text ms-1">Fox Partnership</span>
  </a>
</li>

<li class="nav-item">
  <a class="nav-link text-dark" href="{{ route('admin.squad.index')}}">
    <i class="material-symbols-rounded opacity-5">groups</i>
    <span class="nav-link-text ms-1">Fox Squad</span>
  </a>
</li>

<li class="nav-item">
  <a class="nav-link text-dark" href="{{ route('admin.ourvision.index')}}">
    <i class="material-symbols-rounded opacity-5">visibility</i>
    <span class="nav-link-text ms-1">Our Vision</span>
  </a>
</li>

<li class="nav-item">
  <a class="nav-link text-dark" href="{{ route('admin.ourmission.index')}}">
    <i class="material-symbols-rounded opacity-5">rocket_launch</i>
    <span class="nav-link-text ms-1">Our Mission</span>
  </a>
</li>

<li class="nav-item">
  <a class="nav-link text-dark" href="{{ route('admin.ourservices.index')}}">
    <i class="material-symbols-rounded opacity-5">engineering</i>
    <span class="nav-link-text ms-1">Our Services</span>
  </a>
</li>

<li class="nav-item">
  <a class="nav-link text-dark" href="{{ route('admin.whychooseus.index')}}">
    <i class="material-symbols-rounded opacity-5">thumb_up</i>
    <span class="nav-link-text ms-1">Why Choose Us</span>
  </a>
</li>

<li class="nav-item">
  <a class="nav-link text-dark" href="{{ route('admin.investdubai.index')}}">
    <i class="material-symbols-rounded opacity-5">paid</i>
    <span class="nav-link-text ms-1">Why Invest in Dubai</span>
  </a>
</li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-5">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{ route('profile.edit')}}">
            <i class="material-symbols-rounded opacity-5">person</i>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/sign-in.html">
            <i class="material-symbols-rounded opacity-5">login</i>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="../pages/sign-up.html">
            <i class="material-symbols-rounded opacity-5">assignment</i>
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li> --}}
        <li class="nav-item">
  <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="nav-link text-dark border-0 bg-transparent">
      <i class="material-symbols-rounded opacity-5">logout</i>
      <span class="nav-link-text ms-1">Logout</span>
    </button>
  </form>
</li>
      </ul>
    </div>  

  </aside>