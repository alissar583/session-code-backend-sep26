<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Product;
use App\Models\User;
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





// Route::get('users', function () {
//     return DB::table('users')->get();
// });





// Route::post('users', function () {
//     DB::table("users")->insert([
//         [
//             "name" => "test",
//             "email" => "test",
//             "password" => "test"
//         ]
//     ]);
// });




Route::put('users/{id}', function ($id) {
    DB::table('users')
        ->where('id', $id)
        ->update([
            'name' => "saf"
        ]);
});


Route::get('users/{id}/{category_id}', function ($id) {
    DB::table('users')
        ->where('id', $id)
        ->update([
            'name' => "d\aga"

        ]);
});


// Route::post('products',[ProductController::class , 'store1']);





// Route::post('users',function(Request $request){
//     // return User::all();
//     // return $request;
//     // User::update([
//     //     'name' => $request->name,
//     //     'email' =>  $request->email,
//     //     'password' => $request->password
//     // ]);

//     // Profile::create([
//     //     'user_id' => 1
//     // ]);

// });




Route::post('favorites', function () {

    // $user = User::query()->create([
    //     'name' => 'test',
    //     'email' => 'tesllllllllllllt',
    //     'password' => 'test'
    // ]);

    // $product =  Product::query()->create([
    //     'name' => 'test',
    //     'description' => 'test'
    // ]);
    // $product3 =  Product::query()->create([
    //     'name' => 'test',
    //     'description' => 'test'
    // ]);

    $user = User::query()->find(2);
    $product = Product::query()->find(2);
    $product2 = Product::query()->find(3);
    $product3 = Product::query()->find(4);
    // $product3 = Product::query()->find(4);

    $user->favorites()->syncWithoutDetaching([$product2->id, $product3->id]);


    // $user->products()->attach([1,2]);


});






Route::post("orders", function () {
    // $user = User::query()->find(2);

    // $product2 = Product::query()->find(2);
    // $product3 = Product::query()->find(3);

//  return    User::query()->with('products')->get();
 return     User::find(2)->load('products');
//  return $user->products;
});



// Route::get('')




Route::get('orders',function(){
    $user = User::query()->find(2);

    return $user->products;
});

Route::get('favorites', function () {
    return User::find(2)->products;
});
