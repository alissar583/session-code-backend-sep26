<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{

    public function __construct(protected ProductService $productService) {}


    public function update(Request $request,Product $product)
    {
        // $product = Product::findOrFail($id);

        Gate::authorize('update', $product);
        // $service = new ProductService();
        // $this->productService->update();

        DB::table('products')->where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description
        ]);
    }


    // public function update(Book $book){
        

    //     // $book = Book::findOrFail($id);
        

    // }

    public function store(Request $request)
    {

        // auth()->user()
        Gate::authorize('create', Product::class);
        // $service = new ProductService();
        // $product = $this->productService->store($request->validated());


        return response()->json([
            'message' => "success",
            // "data" => $product   
        ]);
    }
}
