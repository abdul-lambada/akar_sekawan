<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        Testimonial::truncate();

        Testimonial::insert([
            [
                'role' => 'Sekretaris Desa',
                'name' => 'Desa Maju Sejahtera',
                'quote' => 'Layanan administrasi lebih terukur dan cepat. Warga bisa memantau proses tanpa harus berulang kali datang ke kantor desa.',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'role' => 'Kepala Sekolah',
                'name' => 'SMP Negeri Harapan Bangsa',
                'quote' => 'Proses penilaian dan rapor jauh lebih rapi. Guru lebih fokus ke pembelajaran, bukan hanya pengisian laporan.',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'role' => 'Pelaku UMKM',
                'name' => 'Sentra Kerajinan Bambu',
                'quote' => 'Kami punya etalase digital yang rapi. Pembeli dari luar daerah jadi lebih mudah menemukan produk kami.',
                'order' => 3,
                'is_active' => true,
            ],
        ]);
    }
}
