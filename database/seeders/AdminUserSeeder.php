<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        user::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('085722-Dika'),
        ]);
    }
}
