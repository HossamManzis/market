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
        User::factory(20)->create();
        User::create([
            'name' =>'Hossam Manzis',
            'email' =>'hossammanziz@gmail.com',
            'email_verified_at' => now(),
            'role' => 'admin',
            'phone' => '6281325613670',
            'bio' => 'Example',
            'password' => Hash::make('247'),
        ]);

        User::create([
            'name' =>'Yami Tsubame',
            'email' =>'yamiyami@gmail.com',
            'email_verified_at' => now(),
            'role' => 'superadmin',
            'phone' => '6283869495744',
            'bio' => 'Example 2',
            'password' => Hash::make('1014'),
        ]);
    }
}
