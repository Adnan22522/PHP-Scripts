   <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center @if(request()->url()==url('/')) {{'active'}} @endif" href="{{url('/')}}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fa fa-arrows-alt" aria-hidden="true"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Online Quiz</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
              
      <li class="nav-item @if(request()->url()==url('dashboard')) {{'active'}} @endif">
        <a class="nav-link" href="{{url('dashboard')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item @if(request()->url()==url('quiz')) {{'active'}} @endif">
        <a class="nav-link" href="{{url('quiz')}}">
          <i class='fa fa-braille'></i>
          <span>Start Quiz</span>
        </a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item @if(request()->url()==url('result')) {{'active'}} @endif">
        <a class="nav-link @if(request()->url()==url('result')) {{'active'}} @endif" href="{{url('result')}}">
          <i class="fa fa-graduation-cap" aria-hidden="true"></i>
          <span>Your Result</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->