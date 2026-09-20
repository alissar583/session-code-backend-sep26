<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        return DB::table('users')->get();
    }


    public function store(Request $request)
    {
        DB::table('users')->insert([
            [
                "name" => $request->name,
                "email" => $request->email,
                "password" => $request->test
            ]
        ]);
        return "success";
    }

    public function update($id, Request $request)
    {
        DB::table('users')
            ->where('id', $id)
            ->update([
                "name" => $request->name,
            ]);
    }
}
