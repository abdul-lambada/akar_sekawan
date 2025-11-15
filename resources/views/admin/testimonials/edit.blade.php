@extends('admin.layouts.app')

@section('title', 'Edit Testimoni · Admin')

@section('content')
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Testimoni</h1>
    <a href="{{ route('admin.testimonials.index') }}" class="btn btn-sm btn-secondary">
      <i class="fas fa-arrow-left"></i> Kembali
    </a>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Testimoni</h6>
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

      <form method="POST" action="{{ route('admin.testimonials.update', $testimonial) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="name">Nama</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $testimonial->name) }}" required>
        </div>
        <div class="form-group">
          <label for="role">Peran</label>
          <input type="text" class="form-control" id="role" name="role" value="{{ old('role', $testimonial->role) }}">
        </div>
        <div class="form-group">
          <label for="quote">Quote</label>
          <textarea class="form-control" id="quote" name="quote" rows="4" required>{{ old('quote', $testimonial->quote) }}</textarea>
        </div>
        <div class="form-group">
          <label for="order">Urutan</label>
          <input type="number" class="form-control" id="order" name="order" value="{{ old('order', $testimonial->order) }}" min="0">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="is_active" name="is_active" {{ old('is_active', $testimonial->is_active) ? 'checked' : '' }}>
          <label class="form-check-label" for="is_active">Aktif</label>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
  </div>
@endsection
