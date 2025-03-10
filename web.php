<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::middleware('auth')->group(function () {
    Route::view('/', "welcome")->name("home");
    Route::get('/news/{id}', [AuthController::class, 'show']);
    Route::get('/news-overview', function () {
        return view('news-overview');
    });
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});


Route::get("/login", [AuthController::class, "login"])->name("login");
Route::post("/login", [AuthController::class, "loginPost"])->name("login.post");
Route::get("/register", [AuthController::class, "register"])->name("register");
Route::post("/register", [AuthController::class, "registerPost"])->name("register.post");


Route::get('/posts', [PostController::class, 'index']);
