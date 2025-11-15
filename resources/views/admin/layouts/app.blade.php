<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Admin Akar Sekawan">
  <title>@yield('title', 'Dashboard · Akar Sekawan')</title>
  @if (!empty($setting?->logo))
    <link rel="icon" type="image/png" href="{{ asset('storage/'.$setting->logo) }}" />
  @endif

  <link href="{{ asset('sb_admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="{{ asset('sb_admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon">
          @if (!empty($setting?->logo))
            <img src="{{ asset('storage/'.$setting->logo) }}" alt="{{ $setting->name }}" style="height:32px;" class="img-fluid">
          @else
            <span class="font-weight-bold">AS</span>
          @endif
        </div>
        <div class="sidebar-brand-text mx-3">{{ $setting->name ?? 'Akar Sekawan' }}</div>
      </a>

      <hr class="sidebar-divider my-0">

      <li class="nav-item @if(Route::is('admin.dashboard')) active @endif">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <hr class="sidebar-divider">
      <div class="sidebar-heading">Konten Landing</div>
      <li class="nav-item @if(Route::is('admin.testimonials.*')) active @endif">
        <a class="nav-link" href="{{ route('admin.testimonials.index') }}">
          <i class="fas fa-fw fa-comment"></i>
          <span>Testimoni</span>
        </a>
      </li>
      <li class="nav-item @if(Route::is('admin.partners.*')) active @endif">
        <a class="nav-link" href="{{ route('admin.partners.index') }}">
          <i class="fas fa-fw fa-handshake"></i>
          <span>Partner</span>
        </a>
      </li>
      <li class="nav-item @if(Route::is('admin.portfolios.*')) active @endif">
        <a class="nav-link" href="{{ route('admin.portfolios.index') }}">
          <i class="fas fa-fw fa-briefcase"></i>
          <span>Portofolio</span>
        </a>
      </li>
      <li class="nav-item @if(Route::is('admin.faqs.*')) active @endif">
        <a class="nav-link" href="{{ route('admin.faqs.index') }}">
          <i class="fas fa-fw fa-question-circle"></i>
          <span>FAQ</span>
        </a>
      </li>

      <hr class="sidebar-divider">
      <div class="sidebar-heading">Pengaturan</div>
      <li class="nav-item @if(Route::is('admin.settings.*')) active @endif">
        <a class="nav-link" href="{{ route('admin.settings.edit') }}">
          <i class="fas fa-fw fa-cog"></i>
          <span>Setting Umum</span>
        </a>
      </li>

      <hr class="sidebar-divider d-none d-md-block">
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name ?? 'Admin' }}</span>
                <img class="img-profile rounded-circle" src="{{ auth()->user()->foto ? asset(auth()->user()->foto) : asset('sb_admin/img/undraw_profile.svg') }}">
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('admin.settings.edit') }}">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <div class="dropdown-divider"></div>
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="dropdown-item">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </button>
                </form>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->

        <div class="container-fluid">
          @yield('content')
        </div>
      </div>

      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>© {{ date('Y') }} {{ $setting->name ?? 'Akar Sekawan' }} · Admin Panel</span>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <script src="{{ asset('sb_admin/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('sb_admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('sb_admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('sb_admin/js/sb-admin-2.min.js') }}"></script>

  @stack('scripts')
</body>

</html>
