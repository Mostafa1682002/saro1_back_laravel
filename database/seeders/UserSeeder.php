<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::truncate();
        User::create([
            'name' => 'user',
            'phone' => '01064564850',
            'email' => "user@gmail.com",
            'password' => Hash::make('123456'),
        ]);
    }
}
