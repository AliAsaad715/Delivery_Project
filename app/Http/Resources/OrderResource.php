<?php

namespace App\Http\Resources;

use Database\Seeders\OrderProductStoreSeeder;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'products' => $this->order_product_stores,
            // 'product_id' => $this->product_store->product->id,
            // 'product_name' => $this->product_store->product->name,
            // 'product_price' => $this->product_store->product->price,
            // 'product_image' => $this->product_store->product->image,
            // 'quantity' => $this->quantity,
            'status' => $this->status,
            'total' => $this->total
        ];
    }
}
