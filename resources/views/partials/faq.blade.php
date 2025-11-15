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
      faqs: {{ $faqs->map(fn($f) => [
        'q' => $f->question,
        'a' => $f->answer,
        'category' => $f->category,
      ])->values()->toJson() }},
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
