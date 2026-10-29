<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    public function store(array $data)
    {
        $product = Product::query()->create([
            'name' => $data['name'],
            "description" => $data['description']
        ]);

        return $product;
    }
}
