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
        if (count(\App\Models\User::all()) === 0) {
            User::query()->create([
                'name' => 'Test User',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
            ]);
        }
    }
}
