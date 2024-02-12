<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {        
        \App\Models\User::factory(5)->create();
        
        \App\Models\User::factory()->create([
            'name' => 'Hikmat Hidayat',
            'email' => 'superuser@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
        ]);
    }
}
