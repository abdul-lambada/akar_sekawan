<section
  id="contact"
  class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12"
  x-data="{ shown: false }"
  x-init="setTimeout(() => { shown = true }, 80)"
  x-show="shown"
  x-transition.opacity.duration.400ms
>
  <div class="rounded-2xl border border-emerald-500/60 bg-emerald-50 p-6 sm:p-8 flex flex-col gap-6 shadow-sm transition duration-200 hover:-translate-y-1 hover:shadow-xl hover:ring-1 hover:ring-emerald-500/40 dark:border-emerald-500/60 dark:bg-slate-900">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-6">
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

    <div
      class="mt-2 grid sm:grid-cols-2 gap-4 text-xs"
      x-data="{
        name: '',
        email: '',
        message: '',
        errors: {},
        loading: false,
        submitted: false,
        validateEmail(v) { return /.+@.+\..+/.test(v); },
        validate() {
          this.errors = {};
          if (!this.name.trim()) this.errors.name = 'Nama wajib diisi';
          if (!this.email.trim()) this.errors.email = 'Email wajib diisi';
          else if (!this.validateEmail(this.email)) this.errors.email = 'Format email tidak valid';
          if (!this.message.trim()) this.errors.message = 'Pesan wajib diisi';
          return Object.keys(this.errors).length === 0;
        },
        submit() {
          if (!this.validate()) return;
          this.loading = true;
          setTimeout(() => {
            this.loading = false;
            this.submitted = true;
          }, 900);
        }
      }"
    >
      <form
        class="space-y-3 sm:col-span-1"
        @submit.prevent="submit()"
        novalidate
      >
        <div>
          <label class="block mb-1 font-semibold text-slate-800 dark:text-slate-100" for="contact_name">Nama</label>
          <input
            id="contact_name"
            type="text"
            class="w-full rounded-md border px-3 py-2 text-xs bg-white/90 border-slate-300 focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 dark:bg-slate-950 dark:border-slate-700"
            x-model="name"
            @input="validate()"
          >
          <p class="mt-1 text-[11px] text-red-500" x-text="errors.name" x-show="errors.name"></p>
        </div>
        <div>
          <label class="block mb-1 font-semibold text-slate-800 dark:text-slate-100" for="contact_email">Email</label>
          <input
            id="contact_email"
            type="email"
            class="w-full rounded-md border px-3 py-2 text-xs bg-white/90 border-slate-300 focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 dark:bg-slate-950 dark:border-slate-700"
            x-model="email"
            @input="validate()"
          >
          <p class="mt-1 text-[11px] text-red-500" x-text="errors.email" x-show="errors.email"></p>
        </div>
        <div>
          <label class="block mb-1 font-semibold text-slate-800 dark:text-slate-100" for="contact_message">Pesan</label>
          <textarea
            id="contact_message"
            rows="3"
            class="w-full rounded-md border px-3 py-2 text-xs bg-white/90 border-slate-300 focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 dark:bg-slate-950 dark:border-slate-700"
            x-model="message"
            @input="validate()"
          ></textarea>
          <p class="mt-1 text-[11px] text-red-500" x-text="errors.message" x-show="errors.message"></p>
        </div>
        <button
          type="submit"
          class="inline-flex items-center gap-2 rounded-full bg-emerald-600 px-4 py-2 text-xs font-semibold text-slate-950 shadow-sm hover:bg-emerald-500 transition disabled:opacity-60 disabled:cursor-not-allowed"
          :disabled="loading"
        >
          <span x-show="!loading">Kirim Pertanyaan</span>
          <span x-show="loading" class="flex items-center gap-2">
            <span class="h-3 w-3 rounded-full border-2 border-emerald-200 border-t-emerald-800 animate-spin"></span>
            Mengirim...
          </span>
        </button>
        <p class="mt-1 text-[11px] text-emerald-600" x-show="submitted">Terima kasih, kami akan menghubungi Anda kembali.</p>
      </form>

      <div class="sm:col-span-1 text-[11px] text-slate-600 dark:text-slate-200">
        <div class="font-semibold mb-1">Catatan</div>
        <p>Form ini hanya simulasi untuk keperluan landing page. Anda dapat langsung menghubungi kami melalui WhatsApp atau email yang tertera di sebelah kiri.</p>
      </div>
    </div>
  </div>
</section>
