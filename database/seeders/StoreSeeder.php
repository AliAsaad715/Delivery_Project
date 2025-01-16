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
            'name' => 'Tech World',
            'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=400',
        ]);
        Store::create([
            'name' => 'Fashion Hub',
            'image' => 'https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=400',
        ]);
        Store::create([
            'name' => 'Book Haven',
            'image' => 'https://images.unsplash.com/photo-1512820790803-83ca734da794?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=400',
        ]);
        Store::create([
            'name' => 'Gadget Zone',
            'image' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=400',
        ]);
        Store::create([
            'name' => 'Art Studio',
            'image' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=400',
        ]);
        Store::create([
            'name' => 'Home Essentials',
            'image' => 'https://images.unsplash.com/photo-1505691723518-41c6a78317cf?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=400',
        ]);
        Store::create([
            'name' => 'Sports Paradise',
            'image' => 'https://images.unsplash.com/photo-1517649763962-0c623066013b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=400',
        ]);
        Store::create([
            'name' => 'Pet Store',
            'image' => 'https://images.unsplash.com/photo-1592194996303-c87000b576cc?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=400',
        ]);
        Store::create([
            'name' => 'Music World',
            'image' => 'https://images.unsplash.com/photo-1511376777868-611b54f68947?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=400',
        ]);
    }
}
/*



Name: Maxi Skirt
Price: $49.99
Description: Flowing maxi skirt with an elegant design for casual or formal wear.
Brand: Mango

Name: Workout Leggings
Price: $39.99
Description: Stretchy and durable leggings, perfect for yoga or fitness activities.
Brand: Lululemon

Name: Evening Gown
Price: $249.99
Description: Sophisticated evening gown designed for formal events.
Brand: Vera Wang

Unisex Clothing
Name: Oversized Hoodie
Price: $59.99
Description: Comfortable oversized hoodie for a cozy and casual look.
Brand: Adidas

Name: Jogger Pants
Price: $49.99
Description: Relaxed-fit jogger pants made from soft material for lounging or exercise.
Brand: Nike

Name: Graphic T-Shirt
Price: $29.99
Description: A trendy t-shirt featuring unique graphic designs.
Brand: H&M

Name: Puffer Jacket
Price: $129.99
Description: Warm puffer jacket suitable for chilly weather.
Brand: North Face

Name: Waterproof Raincoat
Price: $89.99
Description: Lightweight raincoat with a stylish design and full protection from rain.
Brand: Columbia

Children's Clothing
Name: Cotton Onesie
Price: $19.99
Description: Soft and breathable onesie for babies, available in cute prints.
Brand: Carter's

Name: Boys' Cargo Pants
Price: $34.99
Description: Durable cargo pants with multiple pockets for boys.
Brand: Old Navy

Name: Girls' Party Dress
Price: $49.99
Description: Elegant dress with sparkly details, perfect for special occasions.
Brand: Gap Kids

Name: Kids' Hoodie
Price: $29.99
Description: Cozy hoodie for children with a playful design.
Brand: Puma

Name: Fleece Jacket
Price: $39.99
Description: Warm fleece jacket for kids, suitable for colder days.
Brand: Patagonia

*/
