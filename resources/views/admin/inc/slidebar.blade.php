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
      <li class="nav-item @if(request()->url()==url('users')) {{'active'}} @endif">
        <a class="nav-link" href="{{url('users')}}">
          <i class="fa fa-users fa-cog"></i>
          <span>User</span>
        </a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item @if(request()->url()==url('subjects')) {{'active'}} @endif">
        <a class="nav-link" href="{{url('subjects')}}">
          <i class="fa fa-book"></i>
          <span>Subjects</span>
        </a>
      </li>

      <li class="nav-item @if(request()->url()==url('questions')) {{'active'}} @endif">
        <a class="nav-link" href="{{url('questions')}}">
          <i class="fa fa-question"></i>
          <span>Question</span>
        </a>
      </li>

      <li class="nav-item @if(request()->url()==url('quizrecord')) {{'active'}} @endif">
        <a class="nav-link" href="{{url('quizrecord')}}">
          <i class="fa fa-file-pdf"></i>
          <span>Quiz Records</span>
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