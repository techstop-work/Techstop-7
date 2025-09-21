<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        Admin::firstOrCreate([
            'email' => 'techstop.work@gmail.com',
        ], [
            'name' => 'Super Admin',
            'email' => 'techstop.work@gmail.com',
            'password' => Hash::make('Strong10!'),
        ]);
    }
}
