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
        <span>Berputar otomatis · pause saat diarahkan</span>
      </span>
    </div>
  </div>

  <div
    x-data="{
      index: 0,
      logos: {{ $partners->map(fn($p) => [
        'name' => $p->name,
        'label' => $p->label,
        'type' => $p->type,
        'short' => $p->short_description,
        'logo' => $p->logo_path ? asset('storage/'.$p->logo_path) : null,
      ])->values()->toJson() }},
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
    <div class="rounded-2xl border border-slate-200 bg-white/80 px-4 py-4 flex flex-col gap-3 dark:border-slate-800 dark:bg-slate-900/70">
      <div class="flex items-center justify-between gap-4">
        <div class="flex items-center gap-3">
          <div class="h-10 w-10 rounded-full border border-slate-200 bg-slate-50 flex items-center justify-center overflow-hidden dark:border-slate-700 dark:bg-slate-950">
            <template x-if="logos.length && logos[index].logo">
              <img :src="logos[index].logo" :alt="logos[index].name" class="h-8 w-8 object-contain" />
            </template>
            <template x-if="!(logos.length && logos[index].logo)">
              <span class="text-[11px] font-semibold text-slate-500">P</span>
            </template>
          </div>
          <div class="text-xs">
            <div class="font-semibold text-slate-900 dark:text-slate-100" x-text="logos[index]?.name || '-' "></div>
            <div class="text-[11px] text-slate-500 dark:text-slate-300" x-text="logos[index]?.type || ''"></div>
          </div>
        </div>
        <div class="flex items-center gap-2">
          <button
            type="button"
            class="h-7 w-7 rounded-full border border-slate-300 text-slate-600 flex items-center justify-center text-[11px] hover:border-emerald-400 hover:text-emerald-500 transition dark:border-slate-600 dark:text-slate-200 dark:hover:text-emerald-200"
            @click="index = (index - 1 + logos.length) % logos.length"
          >
            ←
          </button>
          <button
            type="button"
            class="h-7 w-7 rounded-full border border-slate-300 text-slate-600 flex items-center justify-center text-[11px] hover:border-emerald-400 hover:text-emerald-500 transition dark:border-slate-600 dark:text-slate-200 dark:hover:text-emerald-200"
            @click="index = (index + 1) % logos.length"
          >
            →
          </button>
        </div>
      </div>

      <div class="text-[11px] text-slate-600 dark:text-slate-300 mt-1" x-text="logos[index]?.short || ''"></div>

      <div class="flex items-center justify-end gap-1 mt-1">
        <template x-for="(logo, i) in logos" :key="i">
          <span class="h-1.5 w-4 rounded-full" :class="i === index ? 'bg-emerald-500' : 'bg-slate-300 dark:bg-slate-700'"></span>
        </template>
      </div>
    </div>
  </div>
</section>
