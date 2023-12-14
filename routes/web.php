<?php

use Illuminate\Support\Facades\Route;

Route::view('/about','landing.about')->name('about');
Route::view('/','landing.index')->name('index');
Route::view('/home','landing.home')->name('home');
Route::view('/recipes','landing.formPage')->name('recipes');
Route::view('/detail/:id','landing.detail')->name('detail');
// Route::get();
// Route::post();
// Route::put();
// Route::delete();
// Route::patch();