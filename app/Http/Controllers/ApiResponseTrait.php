<?php

namespace App\Http\Controllers;

trait ApiResponseTrait
{

    public function apiResponse($data, $message, $status) {
        $response = [
            'data' => $data,
            'message' => $message,
            'status' => $status,
        ];

        return response($response, $status);
    }

}
