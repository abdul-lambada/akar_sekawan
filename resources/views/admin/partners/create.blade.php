@extends('admin.layouts.app')

@section('title', 'Tambah Partner · Admin')

@section('content')
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Partner</h1>
    <a href="{{ route('admin.partners.index') }}" class="btn btn-sm btn-secondary">
      <i class="fas fa-arrow-left"></i> Kembali
    </a>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Partner</h6>
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

      <form method="POST" action="{{ route('admin.partners.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="name">Nama</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        <div class="form-group">
          <label for="label">Label</label>
          <input type="text" class="form-control" id="label" name="label" value="{{ old('label') }}">
        </div>
        <div class="form-group">
          <label for="type">Tipe</label>
          <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}">
        </div>
        <div class="form-group">
          <label for="short_description">Deskripsi Singkat</label>
          <textarea class="form-control" id="short_description" name="short_description" rows="3">{{ old('short_description') }}</textarea>
        </div>
        <div class="form-group">
          <label for="logo">Logo (gambar)</label>
          <input type="file" class="form-control-file" id="logo" name="logo" accept="image/*">
        </div>
        <div class="form-group">
          <label for="order">Urutan</label>
          <input type="number" class="form-control" id="order" name="order" value="{{ old('order', 0) }}" min="0">
        </div>
        <div class="form-group form-check">
          <input type="hidden" name="is_active" value="0">
          <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" {{ old('is_active', 1) ? 'checked' : '' }}>
          <label class="form-check-label" for="is_active">Aktif</label>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>
@endsection
