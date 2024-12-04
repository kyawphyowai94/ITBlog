<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\FrontController::class,'itBlog'])->name('itBlog');
Route::get('/Blog-post/{id}',[App\Http\Controllers\FrontController::class,'blogItem'])->name('blogItem');

Route::group(['prefix'=>'backend','as'=>'backend.'],function(){
    
    Route::get('/',[App\Http\Controllers\Admin\DashboardController::class,'index'])->name('dashboard');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
