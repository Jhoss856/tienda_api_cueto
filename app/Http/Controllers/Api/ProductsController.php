<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductsRequest;
use App\Models\Products;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::all();
        return ProductResource::collection($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductsRequest $request)
    {
        $products = Products::Create($request->validated());
        return new ProductsResource($product);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $products = Products::findOrFail($id);
        return new ProductsResource($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductsRequest $request, string $id)
    {
        $products = Products::findOrFail($id);
        $product->update($request->validated());
        return new ProductsResource($product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $products = Products::findOrFail($id);
        $product->delete();
        return response()->json(null, 204);
    }
}
