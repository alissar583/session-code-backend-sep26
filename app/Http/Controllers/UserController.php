<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index()
    {
        $products =  Product::query()->get();

        return $this->success(data: $products);
    }


    public function store(StoreProductRequest $request)
    {
        $user = User::query()->create($request->validated());

        return $this->success(data: $user);
    }


    public function update($id, UpdateProductRequest $request)
    {
        Product::query()
            ->where('id', $id)
            ->update($request->validated());
    }
}
