<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Stichoza\GoogleTranslate\GoogleTranslate;

class ProductDetailsResource extends JsonResource
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
            // 'id' => $this->product->id,
            'id' => $this->id,
            'name' => $translator->translate($this->product->name),
            'price' => $this->product->price,
            'description' => $translator->translate($this->product->description),
            'brand' => $translator->translate($this->product->brand),
            'quantity' => $this->quantity,
            'image' => $this->product->image
        ];
    }
}