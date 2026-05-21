<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoriesRequest;
use App\Models\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Categories = Category::all();
        return CategoriesResource::collection($Categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoriesRequest $request)
    {
        $Categories = Category::Create($request->validated());
        return new CategoriesResource($Categories);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Categories = Category::findOrFail($id);
        return new CategoriesResource($Categories);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoriesRequest $request, string $id)
    {
        $Categories = Category::findOrFail($id);
        $Categories->update($request->validated());
        return new CategoriessResource($Categories);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Categories = Category::findOrFail($id);
        $Categories->delete();
        return response()->json(null, 204);
    }
}
