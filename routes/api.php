<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('users')->group(function () {

    Route::post('/', [UserController::class, 'store']);

    Route::get('/', [UserController::class, 'index']);


    Route::put('/{id}', [UserController::class, 'update']);

    Route::delete('/{id}', function ($id) {
        DB::table('users')
            ->where('id', $id)->delete();
    });
});





Route::get('users', function () {
    return DB::table('users')->get();
});





Route::post('users', function () {
    DB::table("users")->insert([
        [
            "name" => "test",
            "email" => "test",
            "password" => "test"
        ]
    ]);
});




Route::put('users/{id}', function ($id) {
    DB::table('users')
        ->where('id', $id)
        ->update([
            'name' => "saf"
        ]);
});


Route::get('users', function () {
    DB::table('users')
    ->where('id',1)
    ->insert([
        [

        ]
    ]);
});
