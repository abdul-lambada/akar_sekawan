@extends('admin.layouts.app')

@section('title', 'Pengaturan Umum · Admin')

@section('content')
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Pengaturan Umum</h1>
  </div>

  @if (session('status'))
    <div class="alert alert-success small">{{ session('status') }}</div>
  @endif

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Pengaturan</h6>
    </div>
    <div class="card-body">
      @if ($errors->any())
        <div class="alert alert-danger small">
          <ul class="mb-0">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
          <label for="name">Nama Situs</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $setting->name ?? '') }}" required>
        </div>

        <div class="form-group">
          <label for="logo">Logo (gambar)</label>
          @if (!empty($setting?->logo))
            <div class="mb-2">
              <img src="{{ asset('storage/'.$setting->logo) }}" alt="Logo saat ini" style="max-height:48px;">
            </div>
          @endif
          <input type="file" class="form-control-file" id="logo" name="logo" accept="image/*">
          <small class="form-text text-muted">Upload file logo baru (maks. 2 MB). Jika dikosongkan, logo saat ini tidak berubah.</small>
        </div>

        <div class="form-group">
          <label for="wa">WhatsApp</label>
          <input type="text" class="form-control" id="wa" name="wa" value="{{ old('wa', $setting->wa ?? '') }}">
          <small class="form-text text-muted">Nomor WhatsApp yang dipakai di tombol kontak.</small>
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $setting->email ?? '') }}">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>
@endsection
