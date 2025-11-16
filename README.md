## Akar Sekawan Landing & Admin

Proyek ini adalah landing page dan panel admin untuk **Akar Sekawan** – platform digital untuk desa, sekolah (SIAKAD), dan UMKM – dibangun dengan **Laravel**, **TailwindCSS**, dan **Alpine.js**, serta **SB Admin 2** untuk area admin.

Landing page menampilkan value proposition, portofolio implementasi, partner, dan testimoni dengan berbagai interaksi front-end. Panel admin digunakan untuk mengelola konten landing secara penuh (CRUD).

---

## Fitur Utama

### 1. Landing Page (Frontend)

- **Hero interaktif**
  - Persona switcher (Desa / Sekolah / UMKM) dengan copy yang berubah dinamis.
  - Counter angka animasi untuk implementasi desa, jenjang pendidikan, dan UMKM terbantu.
  - Scroll hint dengan animasi bounce ke section ringkasan fitur.
- **Snapshot ekosistem**
  - Kartu "mesin ketik" (typewriter) yang menampilkan fitur-fitur utama secara bergantian dengan Alpine.js.
- **Portofolio Implementasi**
  - Daftar portofolio yang diambil dari admin (kategori, judul, ringkasan).
- **Partner & integrasi**
  - Slider satu kartu per partner dengan panah kiri/kanan.
  - Autoplay dengan pause saat hover.
  - Menampilkan logo partner, nama, tipe, dan deskripsi singkat.
- **Testimoni**
  - Slider testimoni otomatis dengan indikator dot dan kontrol prev/next.
- **FAQ teknis & implementasi**
  - Accordion FAQ yang diambil dari admin.
- **Kontak**
  - Informasi email & WhatsApp dari pengaturan umum.
  - Form kontak simulasi dengan validasi real-time + loader submit menggunakan Alpine.js.
- **UX tambahan**
  - Floating CTA WhatsApp (mobile) yang mengarah ke `setting->wa` atau scroll ke form kontak.
  - Tombol back-to-top dan toast notifikasi sederhana.
  - Dark mode berbasis Tailwind + Alpine.

### 2. Panel Admin (SB Admin 2)

- **Autentikasi admin**
  - Halaman login berbasis SB Admin 2, menggunakan logo dan nama dari settings.
- **Dashboard sederhana**
  - Entry point admin di `/admin/dashboard`.
- **CRUD Testimoni**
  - Index dengan pencarian, pagination, badge status, dan modal detail.
  - Create & edit dengan validasi Laravel.
- **CRUD Partner**
  - Upload logo partner (image) dengan penyimpanan di `storage/app/public/partners`.
  - Index menampilkan thumbnail logo, deskripsi singkat, status aktif/nonaktif, dan modal detail.
- **CRUD Portofolio**
  - Konten portofolio implementasi yang muncul di landing.
- **CRUD FAQ**
  - Pertanyaan dan jawaban teknis yang digunakan di section FAQ landing.
- **Pengaturan Umum (Settings)**
  - Nama situs, logo utama, email, dan nomor WhatsApp.
  - Upload logo (image) ke `storage/app/public/settings`.
  - Logo digunakan di:
    - Header landing.
    - Favicon landing, login, dan admin.
    - Sidebar brand admin & header login admin.

### 3. Partials Admin

- `admin/partials/search.blade.php` – form pencarian generik.
- `admin/partials/pagination.blade.php` – komponen pagination.
- `admin/partials/delete-modal.blade.php` – modal konfirmasi hapus dengan action dinamis.

---

## Teknologi

- **Backend**: Laravel 11 (PHP)
- **Frontend**: TailwindCSS, Alpine.js, Vite
- **Admin UI**: SB Admin 2 (Bootstrap 4)
- **Database**: MySQL / MariaDB
- **Storage**: Laravel filesystem (public disk) untuk logo & aset upload

---

## Persiapan & Instalasi

1. **Clone repository**

   ```bash
   git clone &lt;url-repo-ini&gt;
   cd akar_sekawan
   ```

2. **Install dependensi PHP**

   ```bash
   composer install
   ```

3. **Install dependensi front-end**

   ```bash
   npm install
   ```

4. **Konfigurasi environment**

   ```bash
   cp .env.example .env
   # Edit .env sesuai database Anda
   php artisan key:generate
   ```

5. **Migrasi database & seeder**

   ```bash
   php artisan migrate --seed
   ```

   Seeder akan membuat data awal termasuk akun admin dan settings default.

6. **Buat symlink storage**

   ```bash
   php artisan storage:link
   ```

---

## Menjalankan Aplikasi

### Development

Jalankan server Laravel:

```bash
php artisan serve
```

Jalankan Vite dev server (opsional untuk pengembangan front-end):

```bash
npm run dev
```

### Build Production

Untuk build asset front-end dengan Vite:

```bash
npm run build
```

Output akan berada di `public/build` dengan manifest yang digunakan oleh Laravel.

---

## Akun Admin Default

Setelah migrasi & seeder dijalankan, akun admin default (contoh):

- **Email**: `admin@akarsekawan.test`
- **Password**: `password`

Silakan sesuaikan kredensial ini di seeder jika diperlukan, dan **ganti password** di lingkungan produksi.

Area admin dapat diakses melalui:

- `http://localhost:8000/admin/dashboard`

---

## Struktur View Penting

- `resources/views/layouts/app.blade.php` – layout utama landing (Tailwind + Alpine).
- `resources/views/admin/layouts/app.blade.php` – layout admin (SB Admin 2).
- `resources/views/partials/hero.blade.php` – hero, persona switcher, snapshot ekosistem.
- `resources/views/partials/partners.blade.php` – slider partner & integrasi.
- `resources/views/partials/portfolio.blade.php` – portofolio implementasi.
- `resources/views/partials/testimonials.blade.php` – slider testimoni.
- `resources/views/partials/faq.blade.php` – FAQ.
- `resources/views/partials/contact.blade.php` – section kontak + form simulasi.

- `resources/views/admin/testimonials/*.blade.php` – CRUD admin testimoni.
- `resources/views/admin/partners/*.blade.php` – CRUD admin partner (upload logo).
- `resources/views/admin/portfolios/*.blade.php` – CRUD admin portofolio.
- `resources/views/admin/faqs/*.blade.php` – CRUD admin FAQ.
- `resources/views/admin/settings/edit.blade.php` – pengaturan umum.

---

## Lisensi

Proyek ini menggunakan Laravel yang berlisensi [MIT](https://opensource.org/licenses/MIT). Kode tambahan dalam repo ini mengikuti lisensi yang sama kecuali dinyatakan lain.

