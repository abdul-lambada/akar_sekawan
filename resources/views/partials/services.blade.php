<section id="services" class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16" x-data="{ tab: 'desa' }">
  <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-8">
    <div>
      <h2 class="text-2xl sm:text-2xl font-semibold tracking-tight text-slate-900 dark:text-slate-50">Layanan Akar Sekawan</h2>
      <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-300 max-w-xl mt-2">Tiga pilar utama yang saling terhubung: desa digital, sistem akademik terintegrasi, dan penguatan ekonomi melalui UMKM.</p>
    </div>
    <div class="inline-flex rounded-full bg-slate-100/80 border border-slate-300 p-1 text-[11px] font-medium text-slate-600 dark:bg-slate-900/80 dark:border-slate-700 dark:text-slate-300">
      <button @click="tab = 'desa'" :class="tab === 'desa' ? 'bg-emerald-500 text-slate-950' : ''" class="px-3 py-1 rounded-full transition">Desa Digital</button>
      <button @click="tab = 'siakad'" :class="tab === 'siakad' ? 'bg-emerald-500 text-slate-950' : ''" class="px-3 py-1 rounded-full transition">SIAKAD SD–SMA/SMK</button>
      <button @click="tab = 'umkm'" :class="tab === 'umkm' ? 'bg-emerald-500 text-slate-950' : ''" class="px-3 py-1 rounded-full transition">UMKM</button>
    </div>
  </div>

  <div x-show="tab === 'desa'" x-transition.opacity.duration.200ms class="grid md:grid-cols-[1.4fr_1fr] gap-4 md:gap-6">
    <div class="rounded-2xl border border-slate-200 bg-white p-5 dark:border-slate-700 dark:bg-slate-900">
      <h3 class="text-sm font-semibold text-slate-900 dark:text-slate-50 mb-1">Platform Desa Digital</h3>
      <p class="text-sm text-slate-600 dark:text-slate-300 mb-4">Digitalisasi tata kelola desa untuk layanan publik yang lebih cepat, transparan, dan terdokumentasi rapi.</p>
      <div class="grid sm:grid-cols-2 gap-3 text-[11px] text-slate-700 dark:text-slate-100">
        <div class="rounded-xl border border-slate-200 bg-slate-50 p-3 dark:border-slate-700 dark:bg-slate-900">
          <div class="font-semibold mb-1">Layanan Administrasi</div>
          <ul class="list-disc list-inside space-y-1 text-slate-600 dark:text-slate-200">
            <li>Surat keterangan &amp; kependudukan</li>
            <li>Pelacakan status permohonan</li>
            <li>Pengarsipan digital</li>
          </ul>
        </div>
        <div class="rounded-xl border border-slate-200 bg-slate-50 p-3 dark:border-slate-700 dark:bg-slate-900">
          <div class="font-semibold mb-1">Data &amp; Aset Desa</div>
          <ul class="list-disc list-inside space-y-1 text-slate-600 dark:text-slate-200">
            <li>Inventaris aset desa</li>
            <li>Data program &amp; bantuan</li>
            <li>Dashboard pelaporan</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="rounded-2xl border border-emerald-500/40 bg-emerald-50 p-4 text-[11px] text-slate-800 dark:bg-slate-900 dark:text-slate-100">
      <div class="text-xs font-semibold text-emerald-700 dark:text-emerald-300 mb-1">Manfaat untuk Pemerintah Desa</div>
      <ul class="list-disc list-inside space-y-1 text-slate-700 dark:text-slate-200">
        <li>Pengambilan keputusan berbasis data real-time.</li>
        <li>Jejak audit layanan publik yang jelas.</li>
        <li>Kepercayaan warga meningkat melalui transparansi.</li>
      </ul>
    </div>
  </div>

  <div x-show="tab === 'siakad'" x-transition.opacity.duration.200ms class="grid md:grid-cols-[1.4fr_1fr] gap-4 md:gap-6">
    <div class="rounded-2xl border border-slate-200 bg-white p-5 dark:border-slate-800 dark:bg-slate-900/60">
      <h3 class="text-sm font-semibold text-slate-900 dark:text-slate-50 mb-1">Sistem Informasi Akademik</h3>
      <p class="text-sm text-slate-600 dark:text-slate-300 mb-4">SIAKAD terintegrasi untuk SD, SMP, SMA, dan SMK dengan alur kerja yang familiar bagi guru dan tenaga kependidikan.</p>
      <div class="grid sm:grid-cols-2 gap-3 text-[11px] text-slate-700 dark:text-slate-200">
        <div class="rounded-xl border border-slate-200 bg-slate-50 p-3 dark:border-slate-800 dark:bg-slate-950/60">
          <div class="font-semibold mb-1">Manajemen Data</div>
          <ul class="list-disc list-inside space-y-1 text-slate-300">
            <li>Data siswa &amp; orang tua</li>
            <li>Data guru &amp; staff</li>
            <li>Rombel &amp; jadwal pelajaran</li>
          </ul>
        </div>
        <div class="rounded-xl border border-slate-800 bg-slate-950/60 p-3">
          <div class="font-semibold mb-1">Akademik &amp; Rapor</div>
          <ul class="list-disc list-inside space-y-1 text-slate-300">
            <li>Input nilai harian &amp; ujian</li>
            <li>Rapor digital &amp; unduh PDF</li>
            <li>Rekap penilaian per kelas</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="rounded-2xl border border-emerald-500/40 bg-emerald-50 p-4 text-[11px] text-slate-800 dark:bg-emerald-500/5 dark:text-slate-100">
      <div class="text-xs font-semibold text-emerald-700 dark:text-emerald-300 mb-1">Manfaat untuk Sekolah</div>
      <ul class="list-disc list-inside space-y-1 text-slate-700 dark:text-slate-200">
        <li>Pengisian rapor lebih cepat dan konsisten.</li>
        <li>Orang tua dapat memantau perkembangan belajar.</li>
        <li>Data akademik siap untuk akreditasi.</li>
      </ul>
    </div>
  </div>

  <div x-show="tab === 'umkm'" x-transition.opacity.duration.200ms class="grid md:grid-cols-[1.4fr_1fr] gap-4 md:gap-6">
    <div class="rounded-2xl border border-slate-200 bg-white p-5 dark:border-slate-800 dark:bg-slate-900/60">
      <h3 class="text-sm font-semibold text-slate-900 dark:text-slate-50 mb-1">Portal UMKM &amp; Ekonomi Desa</h3>
      <p class="text-sm text-slate-600 dark:text-slate-300 mb-4">Membantu pelaku UMKM desa masuk ke ekosistem digital tanpa mempersulit proses harian.</p>
      <div class="grid sm:grid-cols-2 gap-3 text-[11px] text-slate-700 dark:text-slate-200">
        <div class="rounded-xl border border-slate-200 bg-slate-50 p-3 dark:border-slate-800 dark:bg-slate-950/60">
          <div class="font-semibold mb-1">Manajemen Produk</div>
          <ul class="list-disc list-inside space-y-1 text-slate-300">
            <li>Katalog produk online</li>
            <li>Foto, harga, dan stok</li>
            <li>Label produk unggulan</li>
          </ul>
        </div>
        <div class="rounded-xl border border-slate-800 bg-slate-950/60 p-3">
          <div class="font-semibold mb-1">Pesanan &amp; Distribusi</div>
          <ul class="list-disc list-inside space-y-1 text-slate-300">
            <li>Pencatatan pesanan</li>
            <li>Integrasi dengan kanal penjualan lain</li>
            <li>Laporan penjualan sederhana</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="rounded-2xl border border-emerald-500/40 bg-emerald-50 p-4 text-[11px] text-slate-800 dark:bg-emerald-500/5 dark:text-slate-100">
      <div class="text-xs font-semibold text-emerald-700 dark:text-emerald-300 mb-1">Manfaat untuk UMKM</div>
      <ul class="list-disc list-inside space-y-1 text-slate-700 dark:text-slate-200">
        <li>Branding produk desa lebih kuat.</li>
        <li>Akses pasar lebih luas, tidak hanya lokal.</li>
        <li>Pembukuan penjualan lebih rapi.</li>
      </ul>
    </div>
  </div>
</section>
