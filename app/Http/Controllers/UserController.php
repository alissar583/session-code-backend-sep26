<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        return Product::query()->get();
    }


    public function store(Request $request)
    {
        $validated =  $request->validate([
            'name' => ['required', 'string'],
            'uid' => ['required', 'integer'],
            'user_id' => ['required', 'integer', 'exists:users,id']
        ]);


        Product::query()->create([

            "name" => $request->name,
            "uid" => $request->uid,
            "user_id" => $request->user_id,

        ]);
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
