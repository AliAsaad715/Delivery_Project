<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Stichoza\GoogleTranslate\GoogleTranslate;
class UserResource extends JsonResource
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
            'first_name' => $translator->translate($this->first_name),
            'last_name' => $translator->translate($this->last_name),
            'phone_number' => $this->phone_number,
            'password' => $this->password,
            'image' => $this->image,
            'position' => $translator->translate($this->position)
        ];
    }
}