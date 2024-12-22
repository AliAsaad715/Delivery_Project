<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class UnsplashService
{
    public function getRandomImage()
    {
        $response = Http::get('https://api.unsplash.com/photos/random', [
            'client_id' => env('UNSPLASH_API_KEY'),
            'query' => 'digital shop',
        ]);

        $image = $response->json();
        return $image['urls']['regular'];
    }

    //     public function getRandomImage()
    // {
    //     $response = Http::get('https://api.unsplash.com/photos/random', [
    //         'client_id' => env('UNSPLASH_API_KEY'),
    //         'query' => 'store',
    //     ]);

    //     if ($response->successful()) {
    //         $image = $response->json();
    //         return $image['urls']['regular'] ?? null;
    //     } else {
    //         \Log::error('Unsplash API request failed', [
    //             'status' => $response->status(),
    //             'body' => $response->body(),
    //         ]);
    //         return null;
    //     }
    // }
}
