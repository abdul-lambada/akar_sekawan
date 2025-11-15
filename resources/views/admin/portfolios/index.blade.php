@extends('admin.layouts.app')

@section('title', 'Portofolio · Admin')

@section('content')
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Portofolio</h1>
    <a href="{{ route('admin.portfolios.create') }}" class="btn btn-sm btn-primary shadow-sm">
      <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Portofolio
    </a>
  </div>

  @if (session('status'))
    <div class="alert alert-success small">{{ session('status') }}</div>
  @endif

  @include('admin.partials.search')

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar Portofolio</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="40">#</th>
              <th>Kategori</th>
              <th>Judul</th>
              <th>Ringkasan</th>
              <th width="80">Urutan</th>
              <th width="80">Status</th>
              <th width="120">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($portfolios as $portfolio)
              <tr>
                <td>{{ $loop->iteration + $portfolios->firstItem() - 1 }}</td>
                <td>{{ $portfolio->category }}</td>
                <td>{{ $portfolio->title }}</td>
                <td>
                  <span title="{{ $portfolio->summary }}">
                    {{ \Illuminate\Support\Str::limit($portfolio->summary, 80) }}
                  </span>
                </td>
                <td>{{ $portfolio->order }}</td>
                <td>
                  @if ($portfolio->is_active)
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
                    data-target="#portfolioDetailModal{{ $portfolio->id }}"
                  >
                    <i class="fas fa-eye"></i>
                  </button>
                  <a href="{{ route('admin.portfolios.edit', $portfolio) }}" class="btn btn-sm btn-warning mb-1">
                    <i class="fas fa-edit"></i>
                  </a>
                  <button
                    type="button"
                    class="btn btn-sm btn-danger mb-1"
                    data-toggle="modal"
                    data-target="#deleteModal"
                    data-action="{{ route('admin.portfolios.destroy', $portfolio) }}"
                  >
                    <i class="fas fa-trash"></i>
                  </button>
                </td>
              </tr>
              <div class="modal fade" id="portfolioDetailModal{{ $portfolio->id }}" tabindex="-1" role="dialog" aria-labelledby="portfolioDetailModalLabel{{ $portfolio->id }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="portfolioDetailModalLabel{{ $portfolio->id }}">Detail Portofolio</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <dl class="row mb-0">
                        <dt class="col-sm-3">Kategori</dt>
                        <dd class="col-sm-9">{{ $portfolio->category }}</dd>
                        <dt class="col-sm-3">Judul</dt>
                        <dd class="col-sm-9">{{ $portfolio->title }}</dd>
                        <dt class="col-sm-3">Ringkasan</dt>
                        <dd class="col-sm-9">{{ $portfolio->summary }}</dd>
                        <dt class="col-sm-3">Urutan</dt>
                        <dd class="col-sm-9">{{ $portfolio->order }}</dd>
                        <dt class="col-sm-3">Status</dt>
                        <dd class="col-sm-9">
                          @if ($portfolio->is_active)
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
                <td colspan="7" class="text-center small text-muted">Belum ada data portofolio.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>

      @include('admin.partials.pagination', ['paginator' => $portfolios])
    </div>
  </div>

  @include('admin.partials.delete-modal')
@endsection
