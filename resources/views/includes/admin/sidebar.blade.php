    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
            <div class="sidebar-brand-icon ">
                <i class="fas fa-balance-scale"></i>
              </div>
          <div class="sidebar-brand-text mx-3">KMS Admin</div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>
  
        <!-- Nav Item - calonpendaftar -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('member.index') }}">
                <i class="fas fa-file-alt"></i>
                <span>Calon Pendaftar</span></a>
            </li>
  
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
  
      </ul>
      <!-- End of Sidebar -->