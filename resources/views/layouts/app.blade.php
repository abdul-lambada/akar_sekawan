<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', $setting->name ?? 'Akar Sekawan')</title>
    <meta name="description" content="{{ ($setting->name ?? 'Akar Sekawan') . ' - Solusi desa digital' }}" />
    @if (!empty($setting?->logo))
      <link rel="icon" type="image/png" href="{{ asset('storage/'.$setting->logo) }}" />
    @endif

    <script>
      window.tailwind = window.tailwind || {};
      window.tailwind.config = {
        darkMode: 'class',
      };
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  </head>
  <body
    x-data="{
      theme: localStorage.getItem('theme')
        ?? (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'),
      activeSection: window.location.hash?.replace('#', '') || 'hero',
      navOpen: false,
      showTop: false,
      toastVisible: false,
      toastMessage: '',
    }"
    x-init="
      // inisialisasi dark mode
      document.documentElement.classList.toggle('dark', theme === 'dark');
      $watch('theme', value => {
        localStorage.setItem('theme', value);
        document.documentElement.classList.toggle('dark', value === 'dark');
      });

      // scrollspy sederhana: update activeSection saat section masuk viewport
      const sectionIds = ['hero', 'why-akarsekawan', 'services', 'implementation-timeline', 'portfolio', 'testimonials', 'contact'];
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            activeSection = entry.target.id;
          }
        });
      }, {
        root: null,
        rootMargin: '0px 0px -60% 0px',
        threshold: 0.2,
      });

      sectionIds.forEach(id => {
        const el = document.getElementById(id);
        if (el) observer.observe(el);
      });

      // toggle tombol back-to-top
      window.addEventListener('scroll', () => {
        showTop = window.scrollY > 400;
      });
    "
    :class="theme === 'dark' ? 'bg-slate-950 text-slate-100' : 'bg-slate-50 text-slate-900'"
    class="min-h-screen flex flex-col"
  >
    <header
      class="z-20 sticky top-0 border-b bg-white dark:border-slate-800 dark:bg-slate-950"
      :class="theme === 'dark' ? 'border-slate-800 bg-slate-950' : 'border-slate-200 bg-white'"
    >
      <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex items-center justify-between gap-3">
        <div class="flex items-center gap-2">
          <div class="h-9 w-9 rounded-xl bg-emerald-500/10 border border-emerald-400/40 flex items-center justify-center overflow-hidden">
            @if (!empty($setting?->logo))
              <img src="{{ asset('storage/'.$setting->logo) }}" alt="{{ $setting->name }}" class="h-8 w-8 object-contain">
            @else
              <span class="text-lg font-semibold tracking-tight text-emerald-300">AS</span>
            @endif
          </div>
          <div>
            <div class="text-sm font-semibold tracking-tight">{{ $setting->name ?? 'Akar Sekawan' }}</div>
            <div class="text-[11px] text-slate-500 dark:text-slate-300 leading-tight">Desa Digital · SIAKAD · UMKM</div>
          </div>
        </div>
        <nav class="hidden md:flex items-center gap-6 text-xs font-medium text-slate-500 dark:text-slate-300">
          <a
            href="#hero"
            @click="activeSection = 'hero'"
            :class="activeSection === 'hero' ? 'text-emerald-400' : ''"
            class="hover:text-emerald-500 dark:hover:text-emerald-300 transition focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-emerald-500 focus-visible:ring-offset-2 focus-visible:ring-offset-slate-950"
          >
            Beranda
          </a>
          <a
            href="#services"
            @click="activeSection = 'services'"
            :class="activeSection === 'services' ? 'text-emerald-400' : ''"
            class="hover:text-emerald-500 dark:hover:text-emerald-300 transition focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-emerald-500 focus-visible:ring-offset-2 focus-visible:ring-offset-slate-950"
          >
            Layanan
          </a>
          <a
            href="#portfolio"
            @click="activeSection = 'portfolio'"
            :class="activeSection === 'portfolio' ? 'text-emerald-400' : ''"
            class="hover:text-emerald-500 dark:hover:text-emerald-300 transition focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-emerald-500 focus-visible:ring-offset-2 focus-visible:ring-offset-slate-950"
          >
            Portofolio
          </a>
          <a
            href="#testimonials"
            @click="activeSection = 'testimonials'"
            :class="activeSection === 'testimonials' ? 'text-emerald-400' : ''"
            class="hover:text-emerald-500 dark:hover:text-emerald-300 transition focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-emerald-500 focus-visible:ring-offset-2 focus-visible:ring-offset-slate-950"
          >
            Testimoni
          </a>
          <a
            href="#contact"
            @click="activeSection = 'contact'"
            :class="activeSection === 'contact' ? 'text-emerald-400' : ''"
            class="hover:text-emerald-500 dark:hover:text-emerald-300 transition focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-emerald-500 focus-visible:ring-offset-2 focus-visible:ring-offset-slate-950"
          >
            Kontak
          </a>
        </nav>
        <div class="flex items-center gap-2">
          <button
            type="button"
            class="inline-flex items-center justify-center h-8 w-8 rounded-full border border-slate-300/70 bg-white/80 text-slate-700 text-[11px] shadow-sm hover:border-emerald-400 hover:text-emerald-500 transition dark:border-slate-600 dark:bg-slate-900/80 dark:text-slate-200 dark:hover:border-emerald-400 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-emerald-500 focus-visible:ring-offset-2 focus-visible:ring-offset-slate-950"
            @click="theme = theme === 'dark' ? 'light' : 'dark'"
            :aria-label="theme === 'dark' ? 'Aktifkan mode terang' : 'Aktifkan mode gelap'"
          >
            <svg x-show="theme === 'dark'" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z" />
            </svg>
            <svg x-show="theme === 'light'" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="4" />
              <path d="M12 2v2" />
              <path d="M12 20v2" />
              <path d="m4.93 4.93 1.41 1.41" />
              <path d="m17.66 17.66 1.41 1.41" />
              <path d="M2 12h2" />
              <path d="M20 12h2" />
              <path d="m6.34 17.66-1.41 1.41" />
              <path d="m19.07 4.93-1.41 1.41" />
            </svg>
          </button>
          <a
            href="#contact"
            @click.prevent="
              const el = document.getElementById('contact');
              if (el) el.scrollIntoView({ behavior: 'smooth' });
              toastMessage = 'Kami akan menghubungi Anda setelah form ini dikirim.';
              toastVisible = true;
              setTimeout(() => { toastVisible = false; }, 3200);
            "
            class="hidden sm:inline-flex items-center gap-2 rounded-full border border-emerald-500/60 bg-emerald-500/10 px-3 py-1.5 text-xs font-semibold text-emerald-700 shadow-sm hover:bg-emerald-500/20 transition dark:border-emerald-500/80 dark:bg-emerald-600 dark:text-slate-950 dark:hover:bg-emerald-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-emerald-500 focus-visible:ring-offset-2 focus-visible:ring-offset-slate-950"
          >
            <span>Diskusi Kebutuhan</span>
          </a>
          <button
            type="button"
            class="inline-flex h-8 w-8 items-center justify-center rounded-full border border-slate-300 bg-white text-slate-700 text-xs shadow-sm hover:border-emerald-400 hover:text-emerald-500 transition dark:border-slate-600 dark:bg-slate-900 dark:text-slate-200 md:hidden focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-emerald-500 focus-visible:ring-offset-2 focus-visible:ring-offset-slate-950"
            @click="navOpen = !navOpen"
            :aria-expanded="navOpen"
            aria-label="Toggle navigasi"
          >
            <svg x-show="!navOpen" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="navOpen" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
      <!-- Mobile nav -->
      <div
        class="md:hidden border-t border-slate-200 bg-white/95 dark:border-slate-800 dark:bg-slate-950/95"
        x-show="navOpen"
        x-transition.opacity.duration.150ms
      >
        <div class="max-w-6xl mx-auto px-4 py-3 flex flex-col gap-2 text-xs font-medium text-slate-700 dark:text-slate-200">
          <a
            href="#hero"
            @click="activeSection = 'hero'; navOpen = false"
            :class="activeSection === 'hero' ? 'text-emerald-500 dark:text-emerald-300' : ''"
            class="py-1 flex items-center justify-between focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-emerald-500 focus-visible:ring-offset-2 focus-visible:ring-offset-slate-950"
          >
            <span>Beranda</span>
          </a>
          <a
            href="#services"
            @click="activeSection = 'services'; navOpen = false"
            :class="activeSection === 'services' ? 'text-emerald-500 dark:text-emerald-300' : ''"
            class="py-1 flex items-center justify-between focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-emerald-500 focus-visible:ring-offset-2 focus-visible:ring-offset-slate-950"
          >
            <span>Layanan</span>
          </a>
          <a
            href="#portfolio"
            @click="activeSection = 'portfolio'; navOpen = false"
            :class="activeSection === 'portfolio' ? 'text-emerald-500 dark:text-emerald-300' : ''"
            class="py-1 flex items-center justify-between focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-emerald-500 focus-visible:ring-offset-2 focus-visible:ring-offset-slate-950"
          >
            <span>Portofolio</span>
          </a>
          <a
            href="#testimonials"
            @click="activeSection = 'testimonials'; navOpen = false"
            :class="activeSection === 'testimonials' ? 'text-emerald-500 dark:text-emerald-300' : ''"
            class="py-1 flex items-center justify-between focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-emerald-500 focus-visible:ring-offset-2 focus-visible:ring-offset-slate-950"
          >
            <span>Testimoni</span>
          </a>
          <a
            href="#contact"
            @click="activeSection = 'contact'; navOpen = false"
            :class="activeSection === 'contact' ? 'text-emerald-500 dark:text-emerald-300' : ''"
            class="py-1 flex items-center justify-between focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-emerald-500 focus-visible:ring-offset-2 focus-visible:ring-offset-slate-950"
          >
            <span>Kontak</span>
          </a>
        </div>
      </div>
    </header>

    <main class="flex-1">
      @yield('content')
    </main>

    <footer
      class="mt-16 border-t bg-slate-50 dark:border-slate-800 dark:bg-slate-950"
      :class="theme === 'dark' ? 'border-slate-800 bg-slate-950' : 'border-slate-200 bg-slate-50'"
    >
      <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8 text-xs text-slate-500 dark:text-slate-300 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
        <div>
          <div class="font-semibold text-slate-800 dark:text-slate-200">{{ $setting->name ?? 'Akar Sekawan' }}</div>
          <div class="text-[11px]">Mengakar di desa, bertumbuh bersama sekolah dan UMKM.</div>
        </div>
        <div class="flex flex-wrap gap-4">
          <div>© {{ date('Y') }} {{ $setting->name ?? 'Akar Sekawan' }}. All rights reserved.</div>
        </div>
      </div>
    </footer>
    
    <!-- Back to top button -->
    <button
      x-show="showTop"
      x-transition.opacity.duration.200ms
      @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
      type="button"
      class="fixed bottom-6 right-6 z-30 inline-flex h-9 w-9 items-center justify-center rounded-full border border-slate-600/60 bg-slate-900/80 text-slate-200 text-xs shadow-md hover:border-emerald-400 hover:text-emerald-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-emerald-500"
      aria-label="Kembali ke atas"
    >
      2
    </button>

    <!-- Floating CTA (mobile only) -->
    <div class="fixed bottom-5 right-5 z-30 md:hidden">
      @php
        $waNumber = $setting->wa ?? null;
        $waLink = $waNumber
          ? 'https://wa.me/' . preg_replace('/[^0-9]/', '', $waNumber)
          : null;
      @endphp
      @if ($waLink)
        <a
          href="{{ $waLink }}"
          target="_blank"
          rel="noopener noreferrer"
          class="inline-flex items-center gap-2 rounded-full bg-emerald-500 px-3 py-2 text-xs font-semibold text-slate-950 shadow-lg hover:bg-emerald-400 transition focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-emerald-500 focus-visible:ring-offset-2 focus-visible:ring-offset-slate-950"
        >
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
            <path d="M16.72 5.72A7.5 7.5 0 0 1 18 10.5a7.5 7.5 0 0 1-7.5 7.5 7.5 7.5 0 0 1-3.78-1.03L3 21l4.03-3.72" />
            <path d="M9 10.5c.3.6.8 1.1 1.4 1.4" />
            <path d="M11.5 11.9c.4.2.9.3 1.4.3" />
          </svg>
          <span>Chat WhatsApp</span>
        </a>
      @else
        <button
          type="button"
          class="inline-flex items-center gap-2 rounded-full bg-emerald-500 px-3 py-2 text-xs font-semibold text-slate-950 shadow-lg hover:bg-emerald-400 transition focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-emerald-500 focus-visible:ring-offset-2 focus-visible:ring-offset-slate-950"
          @click="const el = document.getElementById('contact'); if (el) el.scrollIntoView({ behavior: 'smooth' });"
        >
          <span>Diskusi Kebutuhan</span>
        </button>
      @endif
    </div>

    <!-- Toast notification -->
    <div
      x-show="toastVisible"
      x-transition.opacity.duration.200ms
      class="fixed bottom-6 left-1/2 z-30 -translate-x-1/2 rounded-full border border-emerald-500/60 bg-slate-900/95 px-4 py-2 text-[11px] text-slate-100 shadow-lg"
      role="status"
    >
      <span x-text="toastMessage"></span>
    </div>
  </body>
</html>
