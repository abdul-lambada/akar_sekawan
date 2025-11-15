<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        if (User::where('email', 'admin@akarsekawan.test')->doesntExist()) {
            User::create([
                'name' => 'Admin Akar Sekawan',
                'email' => 'admin@akarsekawan.test',
                'password' => Hash::make('password'),
                'foto' => null,
            ]);
        }
    }
}
