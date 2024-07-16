<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         User::factory()->count(50)->create();
         User::create([
            'name' => "Tarun Chauhan",
            'email' => "coding.tarun@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('admin@123'),
            'remember_token' => Str::random(10),
         ]);
    }
}
