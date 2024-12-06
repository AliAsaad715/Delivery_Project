<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Models\ProductStore;
use App\Models\Store;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use ApiResponseTrait;
    public function index($id)
    {
        if($id <= 0 || $id > Store::get()->count())
            return $this->apiResponse(null, 'Invalid id', 404);

        $product_stores = ProductStore::where('store_id', $id)->get();
        $i = 0;
        $response = [];
        foreach ($product_stores as $product) {
            $response[$i] = new ProductResource($product);
            $i++;
        }
        return $this->apiResponse($response, 'Success', 200);
   }

   public function search($id, $name)
    {
        if($id <= 0 || $id > Store::get()->count())
            return $this->apiResponse(null, 'Invalid id', 404);
        $products_store = ProductStore::where('store_id', $id)->get();
        $products = [];
        if(!$name) {
            $i = 0;
        foreach ($products_store as $product) {
            $products[$i] = new ProductResource($product);
            $i++;
        }
        }
        else {
        foreach($products_store as $product_store)
            $products = $product_store->product->where('name', 'like', '%'.$name.'%')->get();
        }
        return  $this->apiResponse($products, 'Success', 200);
    }
}