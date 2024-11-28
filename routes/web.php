<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\FrontController::class,'itBlog'])->name('itBlog');
Route::get('/Blog-post/{id}',[App\Http\Controllers\FrontController::class,'blogItem'])->name('blogItem');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
