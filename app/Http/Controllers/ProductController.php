<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function __construct(protected ProductService $productService) {}


    public function update(Request $request, $id)
    {
        // $service = new ProductService();
        $this->productService->update();

        DB::table('products')->where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description
        ]);
    }

    public function store(StoreProductRequest $request)
    {
        // $service = new ProductService();
        $product = $this->productService->store($request->validated());


        return response()->json([
            'message' => "success",
            "data" => $product
        ]);
    }
}
