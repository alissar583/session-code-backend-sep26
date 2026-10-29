<?php

namespace App\Services;

use App\Models\Product;
use App\Models\User;

class UserService
{
    public function index()
    {
        $products =  Product::query()->get();
        return $products;
    }

    public function store(array $data)
    {
        $user = User::query()->create($data);
        return $user;
    }
}
