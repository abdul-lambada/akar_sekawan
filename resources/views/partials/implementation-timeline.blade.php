<section id="implementation-timeline" class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12" x-data="{ step: 0, steps: [
  { title: 'Konsultasi', subtitle: 'Memahami konteks mitra', detail: 'Sesi konsultasi (online/offline) dengan perangkat desa, kepala sekolah, dan pelaku UMKM untuk memetakan kondisi awal dan prioritas masalah.' },
  { title: 'Analisis kebutuhan', subtitle: 'Menyusun solusi yang pas', detail: 'Workshop kecil di kantor desa atau sekolah untuk menggambar alur kerja harian, jenis data yang dicatat, dan penyesuaian dengan regulasi daerah serta kurikulum.' },
  { title: 'Implementasi', subtitle: 'Konfigurasi & peluncuran', detail: 'Pemasangan sistem di server/lokal, input data awal, dan uji coba terbatas (pilot) di beberapa kelas atau unit layanan desa sebelum digunakan penuh.' },
  { title: 'Pendampingan', subtitle: 'Pelatihan & support', detail: 'Sesi pelatihan pengguna, simulasi penggunaan untuk layanan nyata, serta pendampingan on-site dan kanal support daring selama periode awal pemakaian.' },
] }">
  <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-8">
    <div>
      <h2 class="text-2xl sm:text-2xl font-semibold tracking-tight text-slate-900 dark:text-slate-50">Alur implementasi</h2>
      <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-300 max-w-xl mt-2">Proses terstruktur dari konsultasi hingga pendampingan, sehingga tim desa, sekolah, dan UMKM merasa ditemani di setiap langkah.</p>
    </div>
  </div>

  <div class="space-y-6">
    <div class="flex flex-col gap-4">
      <div class="grid grid-cols-2 md:grid-cols-4 gap-3 text-xs">
        <template x-for="(item, index) in steps" :key="index">
          <button
            class="group rounded-xl border p-3 flex flex-col items-start gap-1 text-left transition duration-200"
            :class="step === index
              ? 'border-emerald-500 bg-emerald-50 shadow-lg shadow-emerald-500/10 dark:border-emerald-400/80 dark:bg-slate-900'
              : 'border-slate-200 bg-white hover:border-emerald-400/60 hover:-translate-y-0.5 hover:shadow-md hover:shadow-emerald-500/10 dark:border-slate-700 dark:bg-slate-900'"
            @click="step = index"
            @mouseenter="step = index"
          >
            <div class="inline-flex items-center gap-2">
              <div class="h-6 w-6 rounded-lg flex items-center justify-center text-[11px] font-semibold"
                   :class="step === index ? 'bg-emerald-500 text-slate-950' : 'bg-slate-100 text-slate-700 dark:bg-slate-800 dark:text-slate-200'">
                <span x-text="index + 1"></span>
              </div>
              <span class="font-semibold text-slate-900 dark:text-slate-100" x-text="item.title"></span>
            </div>
            <span class="text-[11px] text-slate-500 dark:text-slate-300" x-text="item.subtitle"></span>
          </button>
        </template>
      </div>

      <div class="relative mt-2 rounded-2xl border border-slate-200 bg-white p-4 sm:p-5 text-xs text-slate-800 dark:border-slate-700 dark:bg-slate-900 dark:text-slate-100">
        <div class="text-[11px] uppercase tracking-[0.16em] text-slate-500 dark:text-slate-300 mb-1.5">Langkah <span x-text="step + 1"></span> dari <span x-text="steps.length"></span></div>
        <h3 class="text-sm font-semibold mb-1" x-text="steps[step].title"></h3>
        <p class="text-slate-600 dark:text-slate-300" x-text="steps[step].detail"></p>
      </div>
    </div>
  </div>
</section>
