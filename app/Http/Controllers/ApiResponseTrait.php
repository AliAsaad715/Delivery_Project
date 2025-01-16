<?php

namespace App\Http\Controllers;
use Stichoza\GoogleTranslate\GoogleTranslate;
trait ApiResponseTrait
{

    public function apiResponse($data, $message, $status) {
        $translator = new GoogleTranslate(app()->getLocale());
        $response = [
            'data' => $data,
            'message' => $translator->translate($message),
            'status' => $status,
        ];

        return response($response, $status);
    }

}