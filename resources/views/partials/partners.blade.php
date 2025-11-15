<section
  id="partners"
  class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12"
  x-data="{ shown: false }"
  x-init="setTimeout(() => { shown = true }, 80)"
  x-show="shown"
  x-transition.opacity.duration.400ms
>
  <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-6">
    <div>
      <h2 class="text-2xl sm:text-2xl font-semibold tracking-tight text-slate-900 dark:text-slate-100">Partner &amp; integrasi</h2>
      <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-300 max-w-xl mt-2">Akar Sekawan dirancang untuk terhubung dengan ekosistem yang sudah ada: lembaga pendidikan, pemerintah daerah, penyedia payment gateway, dan layanan cloud.</p>
    </div>
    <div class="text-[11px] text-slate-500 dark:text-slate-300">
      <span class="inline-flex items-center gap-1 rounded-full border border-slate-200 bg-slate-50 px-2.5 py-1 dark:border-slate-700 dark:bg-slate-900/70">
        <span class="h-1.5 w-1.5 rounded-full bg-emerald-400"></span>
        <span>Contoh logo (placeholder)</span>
      </span>
    </div>
  </div>

  <div
    x-data="{
      index: 0,
      logos: [
        { name: 'Dinas Pendidikan', label: 'Dinas Pendidikan', type: 'Pemerintah', short: 'Kemitraan sekolah & kabupaten' },
        { name: 'SD/ SMP/ SMA Negeri', label: 'Sekolah Negeri', type: 'Sekolah', short: 'Jejaring sekolah mitra' },
        { name: 'Bank Daerah', label: 'Bank Daerah', type: 'Payment', short: 'Pembayaran iuran & retribusi' },
        { name: 'Payment Gateway', label: 'Payment Gateway', type: 'Payment', short: 'Pembayaran non-tunai', },
        { name: 'Cloud Provider', label: 'Cloud Provider', type: 'Cloud', short: 'Hosting & backup off-site' },
      ],
      intervalId: null,
    }"
    x-init="
      const rotate = () => { index = (index + 1) % logos.length };
      intervalId = setInterval(rotate, 5000);
      $el.addEventListener('mouseenter', () => { if (intervalId) { clearInterval(intervalId); intervalId = null; } });
      $el.addEventListener('mouseleave', () => { if (!intervalId) { intervalId = setInterval(rotate, 5000); } });
    "
    class="space-y-4"
  >
    <!-- Slider untuk desktop -->
    <div class="hidden md:flex items-center justify-between gap-6 rounded-2xl border border-slate-200 bg-white/80 px-4 py-3 dark:border-slate-800 dark:bg-slate-900/70">
      <div class="flex items-center gap-6">
        <template x-for="(logo, i) in logos" :key="i">
          <button
            type="button"
            @click="index = i"
            class="group inline-flex flex-col items-center gap-1 text-[11px] text-slate-500 dark:text-slate-300 opacity-60 hover:opacity-100 transition"
            :class="index === i ? 'opacity-100 text-slate-800 dark:text-slate-100' : ''"
          >
            <div class="flex items-center justify-center h-8">
              <div class="h-8 px-3 rounded-full border border-slate-200 bg-slate-50/80 flex items-center justify-center text-[11px] font-semibold text-slate-700 dark:border-slate-700 dark:bg-slate-900/80 dark:text-slate-100">
                <span x-text="logo.label"></span>
              </div>
            </div>
            <span class="text-[10px]" x-text="logo.type"></span>
          </button>
        </template>
      </div>
      <div class="hidden md:block text-[11px] text-slate-500 dark:text-slate-300 max-w-xs" x-text="logos[index].short"></div>
    </div>

    <!-- Strip logo scrollable untuk mobile -->
    <div class="md:hidden flex items-center gap-4 overflow-x-auto py-2 -mx-4 px-4">
      <template x-for="(logo, i) in logos" :key="'m-' + i">
        <div class="shrink-0">
          <div class="h-8 px-3 rounded-full border border-slate-200 bg-white flex items-center justify-center text-[11px] font-semibold text-slate-700 opacity-60 hover:opacity-100 transition dark:border-slate-700 dark:bg-slate-900/80 dark:text-slate-100">
            <span x-text="logo.label"></span>
          </div>
        </div>
      </template>
    </div>
  </div>
</section>
