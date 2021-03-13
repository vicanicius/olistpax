<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $product = new Product();
        $product->fill($request->all());
        $product->save();

        return response()->json($product, 201);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if(!$product) {
            return response()->json([
                'message'   => 'Product not found',
            ], 404);
        }

        $quantity = $product->prod_quantity;

        $allData = $product->fill($request->all());
        $allData = $product->fill(['prod_quantity' => $quantity + $request['prod_quantity']]);
        
        $allData->save();

        return response()->json($product);
    }
}
