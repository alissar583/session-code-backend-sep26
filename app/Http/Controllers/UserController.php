<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct(protected UserService $userService) {}

    public function index()
    {
        $products =  $this->userService->index();


        return $this->success(data: $products);
    }


    public function store(StoreProductRequest $request)
    {

        $user = $this->userService->store($request->validated());

        return $this->success(data: $user);
    }


    public function update($id, UpdateProductRequest $request)
    {
        Product::query()
            ->where('id', $id)
            ->update($request->validated());
    }
}
