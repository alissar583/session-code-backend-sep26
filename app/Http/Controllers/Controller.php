<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;

abstract class Controller
{
    public function success(string $message = "success", $data = [])
    {
        return response()->json([
            'message' => $message,
            "data" => $data
        ],404);
    }
}
