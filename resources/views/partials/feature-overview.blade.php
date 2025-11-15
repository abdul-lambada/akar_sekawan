<section
  id="feature-overview"
  class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12"
  x-data="{ shown: false }"
  x-init="setTimeout(() => { shown = true }, 80)"
  x-show="shown"
  x-transition.opacity.duration.400ms
>
  <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-8">
    <div>
      <h2 class="text-2xl sm:text-2xl font-semibold tracking-tight text-slate-900 dark:text-slate-100">Ringkasan fitur utama</h2>
      <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-300 max-w-xl mt-2">Sekilas gambaran tiga pilar solusi dan dukungan teknis Akar Sekawan untuk desa, sekolah, dan pelaku UMKM.</p>
    </div>
  </div>

  <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 text-xs">
    <!-- Desa Digital -->
    <div x-data="{ hovered: false }" @mouseenter="hovered = true" @mouseleave="hovered = false" class="rounded-xl border border-slate-200 bg-white/90 dark:border-slate-800 dark:bg-slate-900/70 p-4 flex flex-col gap-2 transition duration-200 hover:-translate-y-1 hover:shadow-xl hover:ring-1 hover:ring-emerald-500/30">
      <div class="flex items-center gap-2">
        <div class="h-8 w-8 rounded-lg bg-emerald-500/10 border border-emerald-400/50 flex items-center justify-center">
          <svg class="h-4 w-4 text-emerald-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 11l9-7 9 7" />
            <path d="M5 10v10h14V10" />
          </svg>
        </div>
        <div class="font-semibold text-slate-900 dark:text-slate-100">Desa Digital</div>
      </div>
      <ul class="mt-1 space-y-1 text-[11px] text-slate-600 dark:text-slate-300 list-disc list-inside">
        <li>Dashboard layanan administrasi &amp; kependudukan.</li>
        <li>Inventaris aset desa &amp; program bantuan.</li>
        <li>Integrasi dengan website resmi desa.</li>
      </ul>
    </div>

    <!-- SIAKAD -->
    <div x-data="{ hovered: false }" @mouseenter="hovered = true" @mouseleave="hovered = false" class="rounded-xl border border-slate-200 bg-white/90 dark:border-slate-800 dark:bg-slate-900/70 p-4 flex flex-col gap-2 transition duration-200 hover:-translate-y-1 hover:shadow-xl hover:ring-1 hover:ring-emerald-500/30">
      <div class="flex items-center gap-2">
        <div class="h-8 w-8 rounded-lg bg-emerald-500/10 border border-emerald-400/50 flex items-center justify-center">
          <svg class="h-4 w-4 text-emerald-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="4" width="18" height="14" rx="2" ry="2" />
            <path d="M3 10h18" />
          </svg>
        </div>
        <div class="font-semibold text-slate-900 dark:text-slate-100">SIAKAD SDSMA/SMK</div>
      </div>
      <ul class="mt-1 space-y-1 text-[11px] text-slate-600 dark:text-slate-300 list-disc list-inside">
        <li>Data siswa, guru, dan rombel terpusat.</li>
        <li>Input nilai &amp; rapor digital siap unduh.</li>
        <li>Rekap absensi dan analitik sederhana.</li>
      </ul>
    </div>

    <!-- UMKM -->
    <div x-data="{ hovered: false }" @mouseenter="hovered = true" @mouseleave="hovered = false" class="rounded-xl border border-slate-200 bg-white/90 dark:border-slate-800 dark:bg-slate-900/70 p-4 flex flex-col gap-2 transition duration-200 hover:-translate-y-1 hover:shadow-xl hover:ring-1 hover:ring-emerald-500/30">
      <div class="flex items-center gap-2">
        <div class="h-8 w-8 rounded-lg bg-emerald-500/10 border border-emerald-400/50 flex items-center justify-center">
          <svg class="h-4 w-4 text-emerald-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 7h16v13H4z" />
            <path d="M9 7V4h6v3" />
          </svg>
        </div>
        <div class="font-semibold text-slate-900 dark:text-slate-100">Portal UMKM</div>
      </div>
      <ul class="mt-1 space-y-1 text-[11px] text-slate-600 dark:text-slate-300 list-disc list-inside">
        <li>Katalog produk desa dengan foto &amp; harga.</li>
        <li>Pencatatan pesanan &amp; status pengiriman.</li>
        <li>Laporan penjualan sederhana per pelaku.</li>
      </ul>
    </div>

    <!-- Integrasi & Support -->
    <div x-data="{ hovered: false }" @mouseenter="hovered = true" @mouseleave="hovered = false" class="rounded-xl border border-slate-200 bg-white/90 dark:border-slate-800 dark:bg-slate-900/70 p-4 flex flex-col gap-2 transition duration-200 hover:-translate-y-1 hover:shadow-xl hover:ring-1 hover:ring-emerald-500/30">
      <div class="flex items-center gap-2">
        <div class="h-8 w-8 rounded-lg bg-emerald-500/10 border border-emerald-400/50 flex items-center justify-center">
          <svg class="h-4 w-4 text-emerald-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="3" />
            <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 1 1-4 0v-.09A1.65 1.65 0 0 0 8 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06A1.65 1.65 0 0 0 3.6 15a1.65 1.65 0 0 0-1.51-1H2a2 2 0 1 1 0-4h.09A1.65 1.65 0 0 0 3.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06A1.65 1.65 0 0 0 8 3.6 1.65 1.65 0 0 0 9.51 2.09V2a2 2 0 1 1 4 0v.09A1.65 1.65 0 0 0 16 3.6a1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06A1.65 1.65 0 0 0 20.4 9a1.65 1.65 0 0 0 1.51 1H22a2 2 0 1 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z" />
          </svg>
        </div>
        <div class="font-semibold text-slate-900 dark:text-slate-100">Integrasi &amp; support</div>
      </div>
      <ul class="mt-1 space-y-1 text-[11px] text-slate-600 dark:text-slate-300 list-disc list-inside">
        <li>Integrasi dengan sistem &amp; domain yang sudah ada.</li>
        <li>Backup berkala dan monitoring kesehatan sistem.</li>
        <li>Support jarak jauh dan pendampingan on-site.</li>
      </ul>
    </div>
  </div>
</section>
