@extends('admin.layouts.app')

@section('title', 'Dashboard · Akar Sekawan')

@section('content')
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="{{ url('/') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
      <i class="fas fa-external-link-alt fa-sm text-white-50"></i> Lihat Landing Page
    </a>
  </div>

  <div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Testimoni aktif</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Testimonial::count() }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comment fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Partner</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Partner::count() }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-handshake fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Portofolio</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Portfolio::count() }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-briefcase fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">FAQ</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ \App\Models\Faq::count() }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-question-circle fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
