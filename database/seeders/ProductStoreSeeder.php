<?php

namespace Database\Seeders;

use App\Models\ProductStore;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductStoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductStore::create([
            'product_id' => '1',
            'store_id' => '1',
            'quantity' => '10',
        ]);

        ProductStore::create([
            'product_id' => '1',
            'store_id' => '2',
            'quantity' => '7',
        ]);

        ProductStore::create([
            'product_id' => '2',
            'store_id' => '1',
            'quantity' => '100',
        ]);
    }
}
