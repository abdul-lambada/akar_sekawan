<section id="testimonials" class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16"
  x-data="{
    index: 0,
    items: [
      { role: 'Sekretaris Desa', name: 'Desa Maju Sejahtera', quote: 'Layanan administrasi lebih terukur dan cepat. Warga bisa memantau proses tanpa harus berulang kali datang ke kantor desa.' },
      { role: 'Kepala Sekolah', name: 'SMP Negeri Harapan Bangsa', quote: 'Proses penilaian dan rapor jauh lebih rapi. Guru lebih fokus ke pembelajaran, bukan hanya pengisian laporan.' },
      { role: 'Pelaku UMKM', name: 'Sentra Kerajinan Bambu', quote: 'Kami punya etalase digital yang rapi. Pembeli dari luar daerah jadi lebih mudah menemukan produk kami.' }
    ],
    intervalId: null,
  }"
  x-init="
    const rotate = () => { index = (index + 1) % items.length };
    intervalId = setInterval(rotate, 6000);
    $el.addEventListener('mouseenter', () => { if (intervalId) { clearInterval(intervalId); intervalId = null; } });
    $el.addEventListener('mouseleave', () => { if (!intervalId) { intervalId = setInterval(rotate, 6000); } });
  "
>
  <div class="flex items-end justify-between gap-4 mb-6">
    <div>
      <h2 class="text-2xl sm:text-2xl font-semibold tracking-tight text-slate-900 dark:text-slate-50">Apa kata mitra kami</h2>
      <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-300 mt-2">Testimoni singkat dari desa, sekolah, dan UMKM yang menggunakan Akar Sekawan.</p>
    </div>
    <div class="flex gap-2">
      <button @click="index = (index - 1 + items.length) % items.length" class="h-8 w-8 rounded-full border border-slate-300 text-slate-600 flex items-center justify-center text-xs hover:border-emerald-400 hover:text-emerald-500 transition dark:border-slate-600 dark:text-slate-200 dark:hover:text-emerald-200">←</button>
      <button @click="index = (index + 1) % items.length" class="h-8 w-8 rounded-full border border-slate-300 text-slate-600 flex items-center justify-center text-xs hover:border-emerald-400 hover:text-emerald-500 transition dark:border-slate-600 dark:text-slate-200 dark:hover:text-emerald-200">→</button>
    </div>
  </div>

  <div class="rounded-2xl border border-slate-200 bg-white p-6 text-sm text-slate-800 dark:border-slate-700 dark:bg-slate-900 dark:text-slate-100" x-text="items[index].quote"></div>
  <div class="flex items-center justify-between mt-4 text-[11px] text-slate-600 dark:text-slate-300">
    <div>
      <div class="font-semibold text-slate-900 dark:text-slate-100" x-text="items[index].name"></div>
      <div x-text="items[index].role"></div>
    </div>
    <div class="flex gap-1">
      <template x-for="(item, i) in items" :key="i">
        <span class="h-1.5 w-4 rounded-full" :class="i === index ? 'bg-emerald-500' : 'bg-slate-300 dark:bg-slate-700'"></span>
      </template>
    </div>
  </div>
</section>
