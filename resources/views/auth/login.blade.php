<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Login Admin - Akar Sekawan">
  <title>Login Admin · {{ $setting->name ?? 'Akar Sekawan' }}</title>
  @if (!empty($setting?->logo))
    <link rel="icon" type="image/png" href="{{ asset('storage/'.$setting->logo) }}" />
  @endif

  <!-- SB Admin 2 assets from public/sb_admin -->
  <link href="{{ asset('sb_admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="{{ asset('sb_admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center mb-4">
                    @if (!empty($setting?->logo))
                      <div class="mb-2">
                        <img src="{{ asset('storage/'.$setting->logo) }}" alt="{{ $setting->name }}" style="height:48px;" class="img-fluid">
                      </div>
                    @endif
                    <h1 class="h4 text-gray-900 mb-1">Login Admin</h1>
                    <p class="small text-muted mb-0">{{ $setting->name ?? 'Akar Sekawan' }} · Panel pengelolaan konten landing page</p>
                  </div>

                  @if ($errors->any())
                    <div class="alert alert-danger py-2 small">
                      <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                  @endif

                  <form class="user" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user" id="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="remember">Remember Me</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  </form>

                  <hr>
                  <div class="text-center">
                    <a class="small" href="{{ url('/') }}">&larr; Kembali ke landing page</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('sb_admin/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('sb_admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('sb_admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('sb_admin/js/sb-admin-2.min.js') }}"></script>
</body>

</html>
