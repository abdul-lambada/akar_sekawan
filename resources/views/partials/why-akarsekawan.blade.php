<section
  id="why-akarsekawan"
  class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16"
  x-data="{ shown: false }"
  x-init="setTimeout(() => { shown = true }, 80)"
  x-show="shown"
  x-transition.opacity.duration.400ms
>
  <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-8">
    <div>
      <h2 class="text-2xl sm:text-2xl font-semibold tracking-tight text-slate-900 dark:text-slate-100">Kenapa memilih Akar Sekawan?</h2>
      <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-300 max-w-xl mt-2">Kami tidak hanya menyediakan aplikasi, tetapi juga pendampingan dan penyesuaian dengan konteks desa, sekolah, dan UMKM di lapangan.</p>
    </div>
  </div>

  <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 text-xs">
    <div class="rounded-xl border border-slate-200 bg-white p-4 flex flex-col gap-2 transition transform duration-200 hover:-translate-y-1 hover:shadow-xl hover:shadow-emerald-500/10 hover:border-emerald-400/60 hover:ring-1 hover:ring-emerald-500/30 dark:border-slate-800 dark:bg-slate-900/70">
      <div class="flex items-center gap-2">
        <div class="h-8 w-8 rounded-lg bg-emerald-50 border border-emerald-400/60 flex items-center justify-center dark:bg-emerald-500/10">
          <svg class="h-4 w-4 text-emerald-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M9 11l3 3L22 4" />
            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />
          </svg>
        </div>
        <div class="font-semibold text-slate-900 dark:text-slate-100">Pendampingan on-site</div>
      </div>
      <p class="text-slate-600 dark:text-slate-300 text-[11px]">Tim kami siap mendampingi langsung saat implementasi awal dan pelatihan pengguna di desa atau sekolah.</p>
    </div>

    <div class="rounded-xl border border-slate-200 bg-white p-4 flex flex-col gap-2 transition transform duration-200 hover:-translate-y-1 hover:shadow-xl hover:shadow-emerald-500/10 hover:border-emerald-400/60 dark:border-slate-800 dark:bg-slate-900/70">
      <div class="flex items-center gap-2">
        <div class="h-8 w-8 rounded-lg bg-emerald-50 border border-emerald-400/60 flex items-center justify-center dark:bg-emerald-500/10">
          <svg class="h-4 w-4 text-emerald-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="4" width="18" height="14" rx="2" ry="2" />
            <path d="M3 10h18" />
          </svg>
        </div>
        <div class="font-semibold text-slate-900 dark:text-slate-100">Fleksibel regulasi</div>
      </div>
      <p class="text-slate-600 dark:text-slate-300 text-[11px]">Dapat disesuaikan dengan aturan daerah, kurikulum sekolah, dan kebutuhan laporan yang berbeda-beda.</p>
    </div>

    <div class="rounded-xl border border-slate-200 bg-white p-4 flex flex-col gap-2 transition transform duration-200 hover:-translate-y-1 hover:shadow-xl hover:shadow-emerald-500/10 hover:border-emerald-400/60 dark:border-slate-800 dark:bg-slate-900/70">
      <div class="flex items-center gap-2">
        <div class="h-8 w-8 rounded-lg bg-emerald-500/10 border border-emerald-400/40 flex items-center justify-center">
          <svg class="h-4 w-4 text-emerald-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 12h7l4-8 4 16 3-8" />
          </svg>
        </div>
        <div class="font-semibold text-slate-900 dark:text-slate-100">Online &amp; offline</div>
      </div>
      <p class="text-slate-600 dark:text-slate-300 text-[11px]">Tetap bisa digunakan di lingkungan dengan koneksi internet terbatas melalui mekanisme sinkronisasi terencana.</p>
    </div>

    <div class="rounded-xl border border-slate-200 bg-white p-4 flex flex-col gap-2 transition transform duration-200 hover:-translate-y-1 hover:shadow-xl hover:shadow-emerald-500/10 hover:border-emerald-400/60 hover:ring-1 hover:ring-emerald-500/30 dark:border-slate-800 dark:bg-slate-900/70">
      <div class="flex items-center gap-2">
        <div class="h-8 w-8 rounded-lg bg-emerald-500/10 border border-emerald-400/40 flex items-center justify-center">
          <svg class="h-4 w-4 text-emerald-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="4" />
            <path d="M1.05 12a11 11 0 0 1 21.9 0 11 11 0 0 1-21.9 0z" />
          </svg>
        </div>
        <div class="font-semibold text-slate-900 dark:text-slate-100">Satu ekosistem</div>
      </div>
      <p class="text-slate-600 dark:text-slate-300 text-[11px]">Data desa, sekolah, dan UMKM dapat saling terhubung untuk mendukung kebijakan pembangunan yang lebih tepat.</p>
    </div>
  </div>
</section>
