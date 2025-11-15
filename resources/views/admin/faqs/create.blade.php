@extends('admin.layouts.app')

@section('title', 'Tambah FAQ · Admin')

@section('content')
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah FAQ</h1>
    <a href="{{ route('admin.faqs.index') }}" class="btn btn-sm btn-secondary">
      <i class="fas fa-arrow-left"></i> Kembali
    </a>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form FAQ</h6>
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

      <form method="POST" action="{{ route('admin.faqs.store') }}">
        @csrf
        <div class="form-group">
          <label for="category">Kategori</label>
          <input type="text" class="form-control" id="category" name="category" value="{{ old('category') }}">
        </div>
        <div class="form-group">
          <label for="question">Pertanyaan</label>
          <textarea class="form-control" id="question" name="question" rows="2" required>{{ old('question') }}</textarea>
        </div>
        <div class="form-group">
          <label for="answer">Jawaban</label>
          <textarea class="form-control" id="answer" name="answer" rows="4" required>{{ old('answer') }}</textarea>
        </div>
        <div class="form-group">
          <label for="order">Urutan</label>
          <input type="number" class="form-control" id="order" name="order" value="{{ old('order', 0) }}" min="0">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="is_active" name="is_active" {{ old('is_active', true) ? 'checked' : '' }}>
          <label class="form-check-label" for="is_active">Aktif</label>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </div>
@endsection
