@extends('admin.layouts.app')

@section('title', 'Testimoni · Admin')

@section('content')
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Testimoni</h1>
    <a href="{{ route('admin.testimonials.create') }}" class="btn btn-sm btn-primary shadow-sm">
      <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Testimoni
    </a>
  </div>

  @if (session('status'))
    <div class="alert alert-success small">{{ session('status') }}</div>
  @endif

  @include('admin.partials.search')

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar Testimoni</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="40">#</th>
              <th>Nama</th>
              <th>Peran</th>
              <th>Quote</th>
              <th width="80">Urutan</th>
              <th width="80">Status</th>
              <th width="120">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($testimonials as $testimonial)
              <tr>
                <td>{{ $loop->iteration + $testimonials->firstItem() - 1 }}</td>
                <td>{{ $testimonial->name }}</td>
                <td>{{ $testimonial->role }}</td>
                <td>
                  <span title="{{ $testimonial->quote }}">
                    {{ \Illuminate\Support\Str::limit($testimonial->quote, 80) }}
                  </span>
                </td>
                <td>{{ $testimonial->order }}</td>
                <td>
                  @if ($testimonial->is_active)
                    <span class="badge badge-success">Aktif</span>
                  @else
                    <span class="badge badge-secondary">Nonaktif</span>
                  @endif
                </td>
                <td>
                  <button
                    type="button"
                    class="btn btn-sm btn-info mb-1"
                    data-toggle="modal"
                    data-target="#testimonialDetailModal{{ $testimonial->id }}"
                  >
                    <i class="fas fa-eye"></i>
                  </button>
                  <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="btn btn-sm btn-warning mb-1">
                    <i class="fas fa-edit"></i>
                  </a>
                  <button
                    type="button"
                    class="btn btn-sm btn-danger mb-1"
                    data-toggle="modal"
                    data-target="#deleteModal"
                    data-action="{{ route('admin.testimonials.destroy', $testimonial) }}"
                  >
                    <i class="fas fa-trash"></i>
                  </button>
                </td>
              </tr>
              <div class="modal fade" id="testimonialDetailModal{{ $testimonial->id }}" tabindex="-1" role="dialog" aria-labelledby="testimonialDetailModalLabel{{ $testimonial->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="testimonialDetailModalLabel{{ $testimonial->id }}">Detail Testimoni</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <dl class="row mb-0">
                        <dt class="col-sm-3">Nama</dt>
                        <dd class="col-sm-9">{{ $testimonial->name }}</dd>
                        <dt class="col-sm-3">Peran</dt>
                        <dd class="col-sm-9">{{ $testimonial->role }}</dd>
                        <dt class="col-sm-3">Quote</dt>
                        <dd class="col-sm-9">{{ $testimonial->quote }}</dd>
                        <dt class="col-sm-3">Urutan</dt>
                        <dd class="col-sm-9">{{ $testimonial->order }}</dd>
                        <dt class="col-sm-3">Status</dt>
                        <dd class="col-sm-9">
                          @if ($testimonial->is_active)
                            <span class="badge badge-success">Aktif</span>
                          @else
                            <span class="badge badge-secondary">Nonaktif</span>
                          @endif
                        </dd>
                      </dl>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                  </div>
                </div>
              </div>
            @empty
              <tr>
                <td colspan="7" class="text-center small text-muted">Belum ada data testimoni.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>

      @include('admin.partials.pagination', ['paginator' => $testimonials])
    </div>
  </div>

  @include('admin.partials.delete-modal')
@endsection
