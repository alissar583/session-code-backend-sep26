<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $products=  Product::query()->get();

        return response()->json([
            'message' => "user created succesfully",
            "data" => $products
        ]);
    }


    public function store(StoreProductRequest $request)
    {
    //    return $request->validated();

       User::query()->create($request->validated());


        Product::query()->create(
            $request->validated()
        );
        return "success";
    }

    public function update($id, Request $request)
    {
        Product::query()
            ->where('id', $id)
            ->update([
                "name" => $request->name,
            ]);
    }




  
}
