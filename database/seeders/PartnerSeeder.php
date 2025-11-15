<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    public function run(): void
    {
        Partner::truncate();

        Partner::insert([
            [
                'name' => 'Dinas Pendidikan',
                'label' => 'Dinas Pendidikan',
                'type' => 'Pemerintah',
                'short_description' => 'Kemitraan sekolah & kabupaten',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Sekolah Negeri',
                'label' => 'Sekolah Negeri',
                'type' => 'Sekolah',
                'short_description' => 'Jejaring sekolah mitra',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Bank Daerah',
                'label' => 'Bank Daerah',
                'type' => 'Payment',
                'short_description' => 'Pembayaran iuran & retribusi',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Payment Gateway',
                'label' => 'Payment Gateway',
                'type' => 'Payment',
                'short_description' => 'Pembayaran non-tunai',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Cloud Provider',
                'label' => 'Cloud Provider',
                'type' => 'Cloud',
                'short_description' => 'Hosting & backup off-site',
                'order' => 5,
                'is_active' => true,
            ],
        ]);
    }
}
