<?php

// app/Http/Controllers/Api/OrderController.php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return response()->json(['orders' => $orders], 200);
    }

    public function show($id)
    {
        $order = Order::find($id);

        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        return response()->json(['order' => $order], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_number' => 'required|unique:orders',
            'city_from' => 'required',
            'city_to' => 'required',
            'price' => 'required|numeric',
            'order_images' => 'required|json',
            'company_id' => 'required|exists:companies,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $order = Order::create($request->all());

        return response()->json(['order' => $order], 201);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'order_number' => 'unique:orders',
            'price' => 'numeric',
            'order_images' => 'json',
            'company_id' => 'exists:companies,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $order = Order::find($id);

        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        $order->update($request->all());

        return response()->json(['order' => $order], 200);
    }

    public function destroy($id)
    {
        $order = Order::find($id);

        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        $order->delete();

        return response()->json(['message' => 'Order deleted successfully'], 200);
    }
}

