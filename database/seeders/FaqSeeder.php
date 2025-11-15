<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        Faq::truncate();

        Faq::insert([
            [
                'category' => 'Lisensi',
                'question' => 'Bagaimana model lisensi Akar Sekawan?',
                'answer' => 'Lisensi berbasis langganan tahunan dengan dukungan pembaruan fitur dan pendampingan teknis.',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'category' => 'Hosting',
                'question' => 'Apakah perlu server sendiri?',
                'answer' => 'Bisa menggunakan server desa/sekolah sendiri atau paket hosting cloud yang kami rekomendasikan.',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'category' => 'Biaya',
                'question' => 'Bagaimana skema biaya implementasi?',
                'answer' => 'Biaya disesuaikan dengan modul yang dipilih (Desa Digital, SIAKAD, UMKM) dan skala pengguna.',
                'order' => 3,
                'is_active' => true,
            ],
        ]);
    }
}
