<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\multiplyController;


Route::get('/multiply',[multiplyController::class,'multiply']);
Route::post('/showmultiply',[multiplyController::class,'showmultiply']);
// Route::get('/showmultiply',[multiplyController::class,'showmultiply']);
