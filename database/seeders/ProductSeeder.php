<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'ASUS ROG Strix G17',
            'price' => '1200.17',
            'description' => 'The ASUS ROG Strix G17 G713PV-HX054W is a powerful
                                17.3-inch gaming laptop equipped with an AMD Ryzen 9 processor and an NVIDIA GeForce RTX 4060 graphics card. With 16GB of RAM and a 1TB SSD storage capacity, this laptop provides ample power and storage space for intensive gaming and multitasking applications. Its 1920 x 108
                                0-pixel Full HD display with a 144Hz refresh rate ensures smooth and vivid image reproduction.',
            'brand' => 'ASUS'
        ]);

        Product::create([
            'name' => 'The Culture Map Book',
            'price' => '5.7',
            'description' => 'An international business expert helps you understand and navigate cultural differences in
        this insightful and practical guide, perfect for both work and personal life.',
            'brand' => 'Kelkoo'
        ]);
    }
}
