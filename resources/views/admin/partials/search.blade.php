<form method="GET" class="mb-3">
  <div class="input-group">
    <input
      type="text"
      name="q"
      class="form-control bg-light border-0 small"
      placeholder="Cari..."
      value="{{ request('q') }}"
      aria-label="Search"
      aria-describedby="button-search"
    >
    <div class="input-group-append">
      <button class="btn btn-primary" type="submit" id="button-search">
        <i class="fas fa-search fa-sm"></i>
      </button>
    </div>
  </div>
</form>
