<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Store::create([
            'name' => 'Amazon',
            'image' => 'public/uploads/Amazon.png'
        ]);

        Store::create([
            'name' => 'Best Buy',
            'image' => 'public/uploads/best.jpg'
        ]);

        Store::create([
            'name' => 'AB'
        ]);
    }
}
