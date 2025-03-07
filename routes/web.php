<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PostController::class,'index']);
Route::get('/detail',[PostController::class,'detail']);
      

Route::get('/oldurl',[PostController::class,'oldUrl']);
Route::get('/newposturl',[PostController::class,'newUrl'])->name('newurl');