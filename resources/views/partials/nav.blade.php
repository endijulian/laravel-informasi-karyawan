<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
  <form class="form-inline mr-auto">
    <ul class="navbar-nav mr-3 pt-3">
      <!-- <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li> -->
      {{-- <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li> --}}
    </ul>
    
    <h2 class="text-white p-10 pt-4 ml-5">SISTEM INFORMASI KARYAWAN</h2>

    {{-- <div class="search-element">4
      <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
      <button class="btn" type="submit"><i class="fas fa-search"></i></button>
      <div class="search-backdrop"></div>
     
    </div> --}}
  </form>
  <ul class="navbar-nav navbar-right">
    
    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg nav-link-user">
 
      <div class="d-sm-none d-lg-inline-block pt-5">Hi, {{ Auth::user()->nama_lengkap  }}</div></a>
      {{-- <div class="dropdown-menu dropdown-menu-right">
      </div> --}}
    </li>
  </ul>
</nav>