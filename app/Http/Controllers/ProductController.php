<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function update(Request $request, $id)
    {
        DB::table('products')->where('id', $id)->update([
            'name' => $request->name
        ]);
    }

    public function store1(Request $request)
    {
        Product::query()->create([
            'name' => $request->name,
            "description" => $request->description
        ]);
    }
}
