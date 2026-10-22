<?php

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('users', function () {

    $users = User::query()->get();
    return view('users.index', compact('users'));
})->name('users.index');


Route::post('users', function (Request $request) {
    User::query()->create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password
    ]);
    // $users = User::query()->get();
    // 
    // return view("test",compact('users'));

    return redirect()->route('users.index');
})->name('users.store');


Route::get('users/create', function () {
    return view('users.create');
})->name('users.create');



Route::get('users/{id}/edit', function ($id) {
    $user = User::query()->find($id);
    return view('users.edit', compact('user'));
})->name('users.edit');

Route::put('users/{id}', function ($id, UpdateUserRequest $request) {
    $user = User::query()->find($id);
    $user->update([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password
    ]);
    return redirect()->route('users.index');
})->name('users.update');


Route::delete('users/{id}', function ($id) {
    $user = User::query()->find($id);
    $user->delete();
    return redirect()->route('users.index');
})->name("users.destroy");



Route::get('users', function () {
    $users = User::query()->get();
    return view('users.index', compact('users'));
})->name("users.index");


Route::get('users/create', function () {
    return view("users.create");
})->name('users.create');

Route::post('users', function (Request $request) {
    User::query()->create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password,
    ]);

    return redirect()->route("users.index");
})->name("users.store");
