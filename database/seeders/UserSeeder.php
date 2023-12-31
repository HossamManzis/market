<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' =>'Hossam Manzis',
            'email' =>'hossammanziz@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('247'),
        ]);
    }
}
