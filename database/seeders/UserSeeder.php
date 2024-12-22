<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->create([
            'first_name' => 'Ali',
            'last_name' => 'Asaad',
            'phone_number' => '0930032612',
            'password' => bcrypt('12345678'),
            'image' => 'public/uploads/profile.jpg',
            'position' => 'Damascus/Saqba',
        ]);
    }
}
