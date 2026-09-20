<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('users')->group(function () {

    Route::post('/',[UserController::class,'store']);

    Route::get('/', [UserController::class, 'index']);


    Route::put('/{id}', [UserController::class, 'update']);

    Route::delete('/{id}', function ($id) {
        DB::table('users')
            ->where('id', $id)->delete();
    });
});
