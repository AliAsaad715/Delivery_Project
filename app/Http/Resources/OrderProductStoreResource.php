<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderProductStoreResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'order_id' => $this->order_id,
            'product_store_id' => $this->product_store_id,
            'quantity' => $this->quantity,
            'individual price' => $this->product_store->product->price,
            'total price' => $this->product_store->product->price * $this->quantity,
        ];
    }
}