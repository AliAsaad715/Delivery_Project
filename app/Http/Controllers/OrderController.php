<?php

namespace App\Http\Controllers;

use App\Events\OrderStatusUpdated;
use App\Http\Resources\OrderProductStoreResource;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use App\Models\OrderProductStore;
use App\Models\Product;
use App\Models\ProductStore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    use ApiResponseTrait;

    public function index()
    {
        $orders = Order::where('user_id', Auth::user()->id)->get();

        $response = [];
        foreach ($orders as $order) {
            $response[] = new OrderResource($order);
        }
        return $this->apiResponse($response, 'Success', 200);
    }


    public function store(Request $request)
    {
        $order_products = [];
        $products = $request->all();
        if (!$products)
            return $this->apiResponse($order_products, 'Your shopping cart is empty!', 404);
        $total = 0;
        foreach ($products as $product) {
            $p = ProductStore::find($product['id']);
            if ($p->quantity - $product['quantity'] < 0)
                return $this->apiResponse(null, ['Not enough quantity from ' . $p->product->name], 404);
            else {
                $total += $p->product->price * $product['quantity'];
                if (!$order_products) {
                    $order = Order::create([
                        'user_id' => Auth::user()->id,
                        'status' => 'Under preparation'
                    ]);
                }
                $p->update([
                    'quantity' => $p->quantity - $product['quantity']
                ]);
                $order_products[] = new OrderProductStoreResource(OrderProductStore::create([
                    'order_id' => $order->id,
                    'product_store_id' => $product['id'],
                    'quantity' => $product['quantity']
                ]));
            }
        }
        $order->update([
            'total' => $total
        ]);
        $order->order_product_stores = $order_products;
        $response = new OrderResource($order);
        return $this->apiResponse($response, 'Success', 201);
    }


    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        if (!$order)
            return $this->apiResponse(null, 'The Order Was Not Found', 404);
        $products = $order->order_product_stores;
        foreach ($products as $product) {
            $p = ProductStore::find($product->product_store_id);
            $p->update([
                'quantity' => $p->quantity + $product->quantity
            ]);
            OrderProductStore::destroy($product->id);
        }
        $productsUpdate = $request->all();
        $ps = [];
        if (!$productsUpdate)
            return $this->apiResponse($ps, 'Your shopping cart is empty!', 404);
        $total = 0;
        foreach ($productsUpdate as $product) {
            $p = ProductStore::find($product['id']);
            $total += $p->product->price * $product['quantity'];
            if ($p->quantity - $product['quantity'] < 0)
                return $this->apiResponse(null, 'Not enough quantity from ' . $p->product->name, 404);
            else {
                $p->update([
                    'quantity' => $p->quantity - $product['quantity']
                ]);
                $ps[] = new OrderProductStoreResource(OrderProductStore::create([
                    'order_id' => $id,
                    'product_store_id' => $product['id'],
                    'quantity' => $product['quantity']
                ]));
            }
        }
        $order->update([
            'total' => $total,
        ]);
        $order->order_product_stores = $ps;
        $response = new OrderResource($order);
        return $this->apiResponse($response, 'Success', 201);
    }


    public function destroy($id)
    {
        if (!Order::find($id))
            return $this->apiResponse(null, 'The Order Was Not Found', 404);
        $products = OrderProductStore::where('order_id', $id)->get();

        foreach ($products as $product) {
            $p = ProductStore::find($product['product_store_id']);
            $p->update([
                'quantity' => $p->quantity + $product['quantity']
            ]);
        }
        Order::destroy($id);

        return $this->apiResponse(null, 'Success', 201);
    }

    public function updateStatus(Request $request)
    {
        $order = Order::find($request['order_id']);
        $request->validate([
            'status' => 'required|string',
        ]);

        $order->update([
            'status' => $request->status,
        ]);
        event(new OrderStatusUpdated($order));

        return response()->json([
            'message' => 'Order status updated successfully!',
            'order' => $order,
        ]);
    }
}