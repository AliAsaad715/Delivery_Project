<?php

namespace app\Http\Controllers\User;

use App\Http\Resources\ProductDetailsResource;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Models\ProductStore;

class ProductController extends Controller
{
    use ApiResponseTrait;
    public function index($id)
    {

        $products = Product::whereHas('product_stores', function ($query) use ($id) {
            $query->where('store_id', $id);
        })->get();
        // $products = ProductStore::where('store_id', $id)->get();
        $i = 0;
        $response = null;
        foreach ($products as $product) {
            $response[$i] = new ProductResource($product);
            $i++;
        }
        return $this->apiResponse($response, 'Success', 200);
    }

    public function search($id, $name)
    {

        $products = Product::where('name', 'like', '%' . $name . '%')
            ->whereHas('product_stores', function ($query) use ($id) {
                $query->where('store_id', $id);
            })->get();

        $i = 0;
        $response = null;
        foreach ($products as $product) {
            $response[$i] = new ProductResource($product);
            $i++;
        }

        return $this->apiResponse($response, 'Success', 200);
    }

    public function show($idS, $idP)
    {

        $product = ProductStore::where('store_id', $idS)->where('product_id', $idP)->get()->first();
        $response = null;
        if ($product)
            $response = new ProductDetailsResource($product);


        return $this->apiResponse($response, 'Success', 200);
    }
}
