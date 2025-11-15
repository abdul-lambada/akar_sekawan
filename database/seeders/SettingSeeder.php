<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        if (! Setting::query()->exists()) {
            Setting::create([
                'name' => 'Akar Sekawan',
                'logo' => null,
                'wa' => '+62-8xx-xxxx-xxxx',
                'email' => 'info@akarsekawan.id',
            ]);
        }
    }
}
