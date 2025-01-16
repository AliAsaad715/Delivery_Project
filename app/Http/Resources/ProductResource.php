<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Stichoza\GoogleTranslate\GoogleTranslate;

class ProductResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $translator = new GoogleTranslate(app()->getLocale());
        return [
            'id' => $this->id,
            'name' => $translator->translate($this->name),
            'price' => $this->price,
            // 'description' => $this->product->description,
            // 'brand' => $this->product->brand,
            // 'quantity' => $this->quantity,
            'image' => $this->image
        ];
    }
}