<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::view('/about','landing.about')->name('about');
// Route::view('/','landing.index')->name('index');
// Route::view('/home','landing.home')->name('home');
// Route::view('/recipes','landing.formPage')->name('recipes');
// Route::view('/detail/:id','landing.detail')->name('detail');
Route::get('/',[UserController::class,'index'])->name('user.index');
Route::get('/create',[UserController::class,'create'])->name('user.create');
// Route::post();
// Route::put();
// Route::delete();
// Route::patch();