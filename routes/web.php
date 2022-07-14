<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\frontend\FrontendCommentController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Routes for admin dashboard
Route::prefix('admin')->middleware('auth','isAdmin')->group(function () {
    Route::get('dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
    Route::resource('category','App\Http\Controllers\Admin\CategoryController');
    Route::resource('post','App\Http\Controllers\Admin\PostController');
});

Route::view('/',"welcome");

//----------- Guest Routes ----------------
Route::group(["middleware"=>"guest"], function(){
    Route::view("/login","auth.login");
    Route::view("/register","auth.register");
    Route::post("/login",[UserController::class,"login"])->name('login');
    Route::post("/register",[UserController::class,"register"])->name('register');
});
Route::get("/logout",[UserController::class,"logout"])->name('logout');
//-------------------------------------------------

//----- Routes for comments------------------------
Route::post('/comment',[FrontendCommentController::class,'store'])->name('comment.store');

//---------- Fallback------------------------------
Route::fallback(fn()=> view('welcome'));














//Simple Ajax hack to check available slugs in database
Route::get('category/checkslug',[CategoryController::class,'checkSlug'])->name('admin.category.checkSlug');
Route::get('post/checkslug',[PostController::class,'checkSlug'])->name('admin.post.checkSlug');


//frontend Routes for users

Route::get('study/{category_slug}',[FrontendController::class,'viewByCategory'])->name('viewByCategory');
Route::get('study/{category_slug}/blog/{post_slug}',[FrontendController::class,'viewByPost'])->name('viewByPost');


