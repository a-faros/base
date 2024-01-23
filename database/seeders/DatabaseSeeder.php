<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::create(['name' => 'admin1', 'email' => 'admin1@amkor.com', 'password' => Hash::make('secret'),]);
        \App\Models\User::create(['name' => 'admin2', 'email' => 'admin2@amkor.com', 'password' => Hash::make('secret'),]);
        \App\Models\User::create(['name' => 'user1', 'email' => 'user1@amkor.com', 'password' => Hash::make('secret'),]);
        \App\Models\User::create(['name' => 'user2', 'email' => 'user2@amkor.com', 'password' => Hash::make('secret'),]);
        \App\Models\User::create(['name' => 'user3', 'email' => 'user3@amkor.com', 'password' => Hash::make('secret'),]);
    }
}
