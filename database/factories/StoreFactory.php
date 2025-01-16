<?php

namespace Database\Factories;

use App\Models\Store;
use App\Services\UnsplashService;
use Illuminate\Database\Eloquent\Factories\Factory;

class StoreFactory extends Factory
{
    protected $model = Store::class;

    public function definition()
    {
        $unsplashService = new UnsplashService();
        $image = $unsplashService->getRandomImage();

        return [
        'name' => $this->faker->company,
        //'address' => $this->faker->address,
        //'phone' => $this->faker->phoneNumber,
        'image' => $this->faker->imageUrl(640, 480, 'business', true, 'Store'),];
    }
}