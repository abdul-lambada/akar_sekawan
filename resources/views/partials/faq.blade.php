<section
  id="faq"
  class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12"
  x-data="{ shown: false }"
  x-init="setTimeout(() => { shown = true }, 80)"
  x-show="shown"
  x-transition.opacity.duration.400ms
>
  <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-8">
    <div>
      <h2 class="text-2xl sm:text-2xl font-semibold tracking-tight text-slate-900 dark:text-slate-100">FAQ teknis &amp; implementasi</h2>
      <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-300 max-w-xl mt-2">Beberapa pertanyaan yang sering muncul dari desa, sekolah, dan pelaku UMKM sebelum memulai implementasi Akar Sekawan.</p>
    </div>
  </div>

  <div
    x-data="{
      open: 0,
      faqs: [
        {
          q: 'Apakah Akar Sekawan bisa berjalan di lingkungan dengan internet terbatas?',
          a: 'Bisa. Untuk desa dan sekolah dengan internet terbatas, kami biasanya memasang sistem di server lokal (on-premise) dan menyediakan mekanisme sinkronisasi terjadwal ketika ada koneksi internet. Pengguna tetap bisa mengakses aplikasi melalui jaringan lokal kantor desa/sekolah.'
        },
        {
          q: 'Bagaimana jika listrik atau server mati, apakah data aman?',
          a: 'Data disimpan di basis data terstruktur dan dapat di-backup secara berkala. Kami menyiapkan jadwal backup otomatis dan panduan backup manual sehingga operator lokal dapat menyimpan salinan data ke media eksternal atau server cadangan.'
        },
        {
          q: 'Berapa lama proses implementasi sampai bisa dipakai harian?',
          a: 'Untuk satu desa atau satu sekolah, implementasi dasar biasanya 2–4 minggu: konsultasi & pemetaan alur kerja, instalasi & konfigurasi, input data awal, uji coba terbatas, lalu go-live dengan pendampingan intensif.'
        },
        {
          q: 'Apakah ada pelatihan untuk perangkat desa, guru, dan pelaku UMKM?',
          a: 'Ada. Kami menyediakan sesi pelatihan onsite dan/atau online, modul panduan singkat, serta sesi tanya jawab setelah sistem digunakan beberapa minggu untuk memastikan pengguna benar-benar merasa nyaman.'
        },
        {
          q: 'Apakah Akar Sekawan bisa diintegrasikan dengan sistem yang sudah ada?',
          a: 'Pada banyak kasus, sistem dapat diintegrasikan melalui impor/ekspor data (CSV/Excel) atau API jika sistem lama mendukung. Integrasi biasanya dibahas spesifik pada tahap analisis kebutuhan.'
        },
        {
          q: 'Bagaimana skema lisensi penggunaan Akar Sekawan?',
          a: 'Lisensi biasanya berbasis langganan tahunan dengan jumlah pengguna tak terbatas di dalam satu desa atau satu institusi pendidikan. Detail lisensi (misalnya untuk beberapa sekolah sekaligus atau kerja sama tingkat kabupaten) dibahas khusus pada tahap penawaran.'
        },
        {
          q: 'Apakah hosting disediakan atau harus menggunakan server sendiri?',
          a: 'Kami mendukung dua opsi: hosting dikelola oleh tim Akar Sekawan (cloud) atau dipasang di server milik mitra (on-premise). Banyak desa dan sekolah memilih kombinasi: server lokal untuk akses cepat + replikasi ke server cloud sebagai backup.'
        },
        {
          q: 'Seperti apa gambaran biaya implementasi dan pemeliharaan?',
          a: 'Biaya biasanya terdiri dari tiga komponen: biaya setup awal (analisis, instalasi, migrasi data), biaya pelatihan, dan biaya langganan/pemeliharaan tahunan. Besarannya menyesuaikan skala pengguna dan modul yang dipakai, sehingga akan dihitung secara spesifik pada tahap penawaran resmi.'
        },
      ],
    }"
    class="rounded-2xl border border-slate-200 bg-white/90 p-4 sm:p-6 dark:border-slate-800 dark:bg-slate-900/70 divide-y divide-slate-200 dark:divide-slate-800"
  >
    <template x-for="(item, i) in faqs" :key="i">
      <div class="py-3">
        <button
          type="button"
          class="flex w-full items-center justify-between gap-3 text-left text-sm font-medium text-slate-800 dark:text-slate-100"
          @click="open = open === i ? null : i"
        >
          <span x-text="item.q"></span>
          <span class="shrink-0 h-6 w-6 inline-flex items-center justify-center rounded-full border border-slate-300 text-[11px] text-slate-600 dark:border-slate-600 dark:text-slate-200">
            <span x-show="open !== i">+</span>
            <span x-show="open === i">−</span>
          </span>
        </button>
        <div
          x-show="open === i"
          x-transition.opacity.duration.200ms
          class="mt-2 text-sm leading-relaxed text-slate-600 dark:text-slate-300"
          x-text="item.a"
        ></div>
      </div>
    </template>
  </div>
</section>
