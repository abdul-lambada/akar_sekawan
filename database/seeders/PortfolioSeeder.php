<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        Portfolio::truncate();

        Portfolio::insert([
            [
                'category' => 'Desa Digital',
                'title' => 'Desa Maju Sejahtera',
                'summary' => 'Digitalisasi layanan administrasi, laporan bantuan, dan dashboard program desa.',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'category' => 'SIAKAD',
                'title' => 'SMP Negeri Harapan Bangsa',
                'summary' => 'Pengelolaan nilai, rapor, dan absensi terintegrasi.',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'category' => 'UMKM',
                'title' => 'Sentra Kerajinan Bambu',
                'summary' => 'Katalog online produk UMKM dan pencatatan pesanan.',
                'order' => 3,
                'is_active' => true,
            ],
        ]);
    }
}
