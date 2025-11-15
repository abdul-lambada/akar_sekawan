<section
  id="contact"
  class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12"
  x-data="{ shown: false }"
  x-init="setTimeout(() => { shown = true }, 80)"
  x-show="shown"
  x-transition.opacity.duration.400ms
>
  <div class="rounded-2xl border border-emerald-500/60 bg-emerald-50 p-6 sm:p-8 flex flex-col sm:flex-row gap-6 sm:items-center justify-between shadow-sm transition duration-200 hover:-translate-y-1 hover:shadow-xl hover:ring-1 hover:ring-emerald-500/40 dark:border-emerald-500/60 dark:bg-slate-900">
    <div>
      <h2 class="text-2xl sm:text-2xl font-semibold tracking-tight text-slate-900 dark:text-slate-50">Siap memulai transformasi digital?</h2>
      <p class="text-sm leading-relaxed text-slate-700 dark:text-slate-100 mt-2 max-w-xl">Kami membantu dari tahap perencanaan, implementasi, sampai pendampingan penggunaan di lapangan.</p>
    </div>
    <div class="space-y-2 text-xs text-slate-800 dark:text-slate-100">
      <div class="font-semibold">Hubungi kami</div>
      <div>Email: <span class="font-mono">{{ $setting->email ?? 'info@akarsekawan.id' }}</span></div>
      <div>Telepon/WhatsApp: <span class="font-mono">{{ $setting->wa ?? '+62-8xx-xxxx-xxxx' }}</span></div>
    </div>
  </div>
</section>
