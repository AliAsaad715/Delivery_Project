<?php

namespace app\Http\Controllers\User;

use App\Http\Resources\StoreResource;
use App\Models\Store;

class StoreController extends Controller
{
    use ApiResponseTrait;
    public function index()
    {
        $stores = Store::get()->all();

        $i = 0;
        foreach ($stores as $store) {
            $response[$i] = new StoreResource($store);
            $i++;
        }

        return $this->apiResponse($response, 'Success', 200);
    }


    public function search($name)
    {
        $stores = Store::where('name', 'like', '%' . $name . '%')->get();
        return  $this->apiResponse($stores, 'Success', 200);
    }
}
