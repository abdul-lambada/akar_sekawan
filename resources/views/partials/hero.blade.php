<section id="hero" class="relative overflow-hidden border-b border-slate-200/80 dark:border-slate-800/80">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16 grid lg:grid-cols-2 gap-10 lg:gap-16 items-center relative">
    <div class="space-y-6" x-data="{
      persona: 'desa',
      copy: {
        desa: 'Akar Sekawan membantu pemerintah desa mengelola data warga, layanan administrasi, dan transparansi pembangunan secara modern.',
        sekolah: 'Akar Sekawan membantu sekolah dasar hingga SMA/SMK mengelola akademik, penilaian, dan komunikasi orang tua dalam satu sistem.',
        umkm: 'Akar Sekawan membantu pelaku UMKM desa mengelola katalog produk, stok, dan pesanan secara online dalam satu portal.',
      }
    }">
      <div class="inline-flex items-center gap-2 rounded-full border border-emerald-400/40 bg-emerald-500/5 px-3 py-1 text-[11px] font-medium text-emerald-700 dark:text-emerald-200">
        <span class="h-1.5 w-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
        <span>Platform digital untuk desa, sekolah, dan UMKM</span>
      </div>
      <h1 class="text-4xl sm:text-5xl lg:text-5xl font-semibold tracking-tight text-slate-900 dark:text-slate-100">
        Menghubungkan <span class="text-emerald-300">Desa Digital</span>,
        <span class="text-emerald-300">SIAKAD</span>, dan
        <span class="text-emerald-300">UMKM</span> dalam satu ekosistem.
      </h1>

      <div class="inline-flex rounded-full border border-slate-200 bg-white/80 p-1 text-[11px] font-medium text-slate-600 shadow-sm dark:border-slate-700 dark:bg-slate-900">
        <button
          type="button"
          class="px-3 py-1 rounded-full transition"
          :class="persona === 'desa' ? 'bg-emerald-500 text-slate-950' : 'hover:text-slate-900 dark:hover:text-slate-100'"
          @click="persona = 'desa'"
        >
          Desa
        </button>
        <button
          type="button"
          class="px-3 py-1 rounded-full transition"
          :class="persona === 'sekolah' ? 'bg-emerald-500 text-slate-950' : 'hover:text-slate-900 dark:hover:text-slate-100'"
          @click="persona = 'sekolah'"
        >
          Sekolah
        </button>
        <button
          type="button"
          class="px-3 py-1 rounded-full transition"
          :class="persona === 'umkm' ? 'bg-emerald-500 text-slate-950' : 'hover:text-slate-900 dark:hover:text-slate-100'"
          @click="persona = 'umkm'"
        >
          UMKM
        </button>
      </div>

      <p class="text-sm sm:text-base leading-relaxed text-slate-700 dark:text-slate-200 max-w-xl" x-text="copy[persona]"></p>
      <div class="flex flex-wrap gap-3">
        <a href="#services" class="inline-flex items-center gap-2 rounded-full bg-emerald-500 px-4 py-2 text-xs sm:text-sm font-semibold text-slate-950 shadow-sm hover:bg-emerald-400 transition">
          Jelajahi Layanan
        </a>
        <a href="#contact" class="inline-flex items-center gap-2 rounded-full border border-slate-300 px-4 py-2 text-xs sm:text-sm font-semibold text-slate-800 hover:border-emerald-400 hover:text-emerald-600 transition dark:border-slate-500 dark:text-slate-100 dark:hover:text-emerald-200">
          Jadwalkan Demo
        </a>
      </div>
      <dl class="grid grid-cols-3 gap-4 max-w-md pt-4 border-t border-slate-200 mt-4 dark:border-slate-800">
        <div>
          <dt class="text-[11px] text-slate-500 dark:text-slate-300">Implementasi</dt>
          <dd
            class="text-sm font-semibold text-slate-900 dark:text-slate-100"
            x-data="{ value: 0, target: 10 }"
            x-init="let i = 0; const end = target; const step = () => { if (i <= end) { value = i; i++; setTimeout(step, 70); } }; step();"
          >
            <span x-text="value"></span>+ Desa
          </dd>
        </div>
        <div>
          <dt class="text-[11px] text-slate-500 dark:text-slate-300">Unit Pendidikan</dt>
          <dd
            class="text-sm font-semibold text-slate-900 dark:text-slate-100"
            x-data="{ value: 0, target: 4 }"
            x-init="let i = 0; const end = target; const step = () => { if (i <= end) { value = i; i++; setTimeout(step, 90); } }; step();"
          >
            <span x-text="value"></span> Jenjang
          </dd>
        </div>
        <div>
          <dt class="text-[11px] text-slate-500 dark:text-slate-300">UMKM Terbantu</dt>
          <dd
            class="text-sm font-semibold text-slate-900 dark:text-slate-100"
            x-data="{ value: 0, target: 50 }"
            x-init="let i = 0; const end = target; const step = () => { if (i <= end) { value = i; i++; setTimeout(step, 35); } }; step();"
          >
            <span x-text="value"></span>+ Pelaku
          </dd>
        </div>
      </dl>
    </div>

    <div class="relative">
      <div class="absolute -inset-24 bg-[radial-gradient(circle_at_top,_rgba(16,185,129,0.12),_transparent_60%)] opacity-80"></div>
      <div
        class="relative border border-slate-200 bg-white/80 dark:border-slate-800 dark:bg-slate-950 backdrop-blur rounded-2xl p-4 sm:p-5 shadow-xl transition duration-200 hover:-translate-y-1 hover:shadow-2xl hover:ring-1 hover:ring-emerald-500/40 flex flex-col gap-3 text-xs text-slate-700 dark:text-slate-100"
        x-data="{
          lines: [
            'Panel Desa Digital · Dashboard layanan online · Administrasi surat & penduduk · Inventaris & aset desa · Integrasi website desa',
            'SIAKAD SD–SMA/SMK · Akademik terpusat · Data siswa & guru · Penilaian & rapor · Absensi & kehadiran',
            'UMKM & Marketplace Lokal · Katalog produk desa · Kelola produk, stok, dan pesanan UMKM dalam satu portal · Terhubung dengan sistem desa & sekolah',
          ],
          current: '',
          index: 0,
          charIndex: 0,
          deleting: false,
          pause: 0,
          type() {
            if (this.pause > 0) {
              this.pause--;
            } else {
              const full = this.lines[this.index];
              if (!this.deleting && this.charIndex < full.length) {
                this.current += full[this.charIndex];
                this.charIndex++;
              } else if (this.deleting && this.charIndex > 0) {
                this.current = this.current.slice(0, -1);
                this.charIndex--;
              } else {
                this.deleting = !this.deleting;
                if (!this.deleting) {
                  this.index = (this.index + 1) % this.lines.length;
                }
                this.pause = this.deleting ? 20 : 10;
              }
            }
            const delay = this.deleting ? 35 : 65;
            setTimeout(() => this.type(), delay);
          }
        }"
        x-init="type()"
      >
        <div class="flex items-center justify-between mb-2">
          <div class="text-[11px] uppercase tracking-[0.16em] text-slate-500 dark:text-slate-300">Snapshot Ekosistem</div>
          <span class="rounded-full bg-emerald-500/10 px-2 py-0.5 text-[10px] text-emerald-200 border border-emerald-500/30">Real-time</span>
        </div>
        <div class="rounded-xl border border-slate-900/40 bg-slate-950 text-emerald-100 px-3 py-3 font-mono text-[11px] leading-relaxed shadow-inner dark:border-emerald-500/40">
          <div class="flex items-center gap-2 mb-2 text-[10px] text-emerald-300">
            <span class="h-2 w-2 rounded-full bg-emerald-400 animate-pulse"></span>
            <span>Mesin ketik ekosistem desa · sekolah · UMKM</span>
          </div>
          <div class="whitespace-pre-wrap break-words">
            <span class="text-emerald-300">&gt;</span>
            <span x-text="current"></span><span class="inline-block w-1.5 h-3 bg-emerald-400 ml-1 animate-pulse"></span>
          </div>
        </div>
        <div class="flex items-center justify-between text-[11px] text-slate-500 dark:text-slate-300">
          <span>Fitur akan ditulis bergantian secara otomatis.</span>
          <span class="text-emerald-300 font-semibold">Terhubung</span>
        </div>
      </div>
    </div>
    <button
      type="button"
      class="hidden sm:inline-flex items-center gap-2 absolute -bottom-5 left-1/2 -translate-x-1/2 text-[11px] text-slate-500 dark:text-slate-300 animate-bounce focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-emerald-500 focus-visible:ring-offset-2 focus-visible:ring-offset-slate-950"
      @click="const el = document.getElementById('services'); if (el) el.scrollIntoView({ behavior: 'smooth' });"
    >
      <span>Lihat ringkasan fitur</span>
      <span class="inline-flex h-5 w-5 items-center justify-center rounded-full border border-slate-300 dark:border-slate-600">
        ↓
      </span>
    </button>
  </div>
</section>
