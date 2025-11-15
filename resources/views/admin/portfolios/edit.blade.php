@extends('admin.layouts.app')

@section('title', 'Edit Portofolio · Admin')

@section('content')
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Portofolio</h1>
    <a href="{{ route('admin.portfolios.index') }}" class="btn btn-sm btn-secondary">
      <i class="fas fa-arrow-left"></i> Kembali
    </a>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Portofolio</h6>
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

      <form method="POST" action="{{ route('admin.portfolios.update', $portfolio) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="category">Kategori</label>
          <input type="text" class="form-control" id="category" name="category" value="{{ old('category', $portfolio->category) }}">
        </div>
        <div class="form-group">
          <label for="title">Judul</label>
          <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $portfolio->title) }}" required>
        </div>
        <div class="form-group">
          <label for="summary">Ringkasan</label>
          <textarea class="form-control" id="summary" name="summary" rows="4">{{ old('summary', $portfolio->summary) }}</textarea>
        </div>
        <div class="form-group">
          <label for="order">Urutan</label>
          <input type="number" class="form-control" id="order" name="order" value="{{ old('order', $portfolio->order) }}" min="0">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="is_active" name="is_active" {{ old('is_active', $portfolio->is_active) ? 'checked' : '' }}>
          <label class="form-check-label" for="is_active">Aktif</label>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
  </div>
@endsection
