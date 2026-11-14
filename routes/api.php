<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VidoeController;
use App\Http\Middleware\CheckAccessCodeMiddleware;
use App\Http\Requests\SyncCourseWithStudentsRequest;
use App\Models\Post;
use App\Models\Product;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
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




Route::put('users/{product}', function ($id) {
    DB::table('users')
        ->where('id', $id)
        ->update([
            'name' => "saf"
        ]);
});



Route::post('posts/video', function () {
    Video::create([
        'content' => "test"
    ]);

    Post::create([
        'content' => "test"
    ]);
});

Route::post('comments', [CommentController::class, 'store']);

Route::post("posts/{post}/comments", [PostController::class, 'storeComment']);

Route::post("videos/{video}/comments", [VidoeController::class, 'storeComment']);

Route::get('users/{id}/{category_id}', function ($id) {
    DB::table('users')
        ->where('id', $id)
        ->update([
            'name' => "d\aga"

        ]);
});


Route::post('products', [ProductController::class, 'store'])->middleware('auth:sanctum');


Route::delete('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::get('my-profile', [AuthController::class, 'myProfile'])->middleware('auth:sanctum');
// Route::get('middleware/first', function () {
//     return "123";
// })->middleware(['access_code:123']);

// Route::get('middleware/second', function () {
//     return "1234";
// })->middleware(['access_code:1234']);



Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);



// Route::prefix('')->controller(ReviewController::class)->group(function () {
//     Route::post('books/{book}/reviews', 'store');
// });

Route::get('test', function () {
    Gate::authorize('access_admin');


    return "welcome";
})->middleware('auth:sanctum');


// Route::get('test', function () {
//     return 1;
// })->middleware(['access_code:123']);

// Route::get('test', function () {
//     return 2;
// })->middleware(['access_code:1234']);


// Route::prefix('users')->middleware('access_code')->group(function () {

//     Route::get('', function () {
//         return 2;
//     });
//     Route::post('', function () {
//         return 2;
//     });
// });


// Route::get('test2',function(){
//     $user = User::find(3);
//     $user->name;
// });
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




Route::get('orders', function () {
    $user = User::query()->find(2);

    return $user->products;
});

Route::get('favorites', function () {
    return User::find(2)->products;
});


Route::post('courses/{id}/students', function ($id, SyncCourseWithStudentsRequest $request) {
    // return $request->validated();
    $course = Course::find($id);
    $course->students()->attach($request->students);
});
