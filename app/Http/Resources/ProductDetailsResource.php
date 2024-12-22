<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductDetailsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            // 'id' => $this->product->id,
            'id' => $this->id,
            'name' => $this->product->name,
            'price' => $this->product->price,
            'description' => $this->product->description,
            'brand' => $this->product->brand,
            'quantity' => $this->quantity,
            'image' => $this->product->image
        ];
    }
}