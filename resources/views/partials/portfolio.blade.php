<section
  id="portfolio"
  class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16"
  x-data="{ shown: false }"
  x-init="setTimeout(() => { shown = true }, 80)"
  x-show="shown"
  x-transition.opacity.duration.400ms
>
  <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-6">
    <div>
      <h2 class="text-2xl sm:text-2xl font-semibold tracking-tight text-slate-900 dark:text-slate-50">Portofolio Implementasi</h2>
      <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-300 max-w-xl mt-2">Beberapa contoh implementasi Akar Sekawan di desa dan institusi pendidikan.</p>
    </div>
  </div>
  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 text-xs">
    <div class="rounded-xl border border-slate-200 bg-white p-4 flex flex-col gap-2 dark:border-slate-700 dark:bg-slate-900">
      <div class="text-[11px] font-semibold text-emerald-700 dark:text-emerald-300">Desa Digital</div>
      <div class="text-sm font-semibold text-slate-900 dark:text-slate-100">Desa Maju Sejahtera</div>
      <p class="text-slate-600 dark:text-slate-300">Digitalisasi layanan administrasi desa dan pelaporan program bantuan dengan dashboard terpusat.</p>
    </div>
    <div class="rounded-xl border border-slate-200 bg-white p-4 flex flex-col gap-2 dark:border-slate-800 dark:bg-slate-900/70">
      <div class="text-[11px] font-semibold text-emerald-700 dark:text-emerald-300">SIAKAD SMP</div>
      <div class="text-sm font-semibold text-slate-900 dark:text-slate-100">SMP Negeri Harapan Bangsa</div>
      <p class="text-slate-600 dark:text-slate-300">SIAKAD untuk penilaian, rapor digital, dan absensi yang terhubung dengan orang tua siswa.</p>
    </div>
    <div class="rounded-xl border border-slate-200 bg-white p-4 flex flex-col gap-2 dark:border-slate-800 dark:bg-slate-900/70">
      <div class="text-[11px] font-semibold text-emerald-700 dark:text-emerald-300">UMKM Desa</div>
      <div class="text-sm font-semibold text-slate-900 dark:text-slate-100">Sentra Kerajinan Bambu</div>
      <p class="text-slate-600 dark:text-slate-300">Portal katalog online untuk produk kerajinan bambu yang meningkatkan jangkauan pasar.</p>
    </div>
  </div>
</section>
