<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardRoomController;
use App\Http\Controllers\DashboardStaffController;
use App\Http\Controllers\DashboardCustomerController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[IndexController::class,'index']);

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

Route::get('/register',[RegisterController::class,'index'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');

Route::prefix('/dashboard/room')->middleware('auth')->group(function(){
    Route::get('/index',[DashboardRoomController::class,'index']);
    Route::get('/create',[DashboardRoomController::class,'create']);
    Route::post('/store',[DashboardRoomController::class,'store']);
    Route::get('/edit/{room}',[DashboardRoomController::class,'edit']);
    Route::post('/update/{room}',[DashboardRoomController::class,'update']);
    Route::get('/destroy/{room}',[DashboardRoomController::class,'destroy']);
});

Route::prefix('/dashboard/staff')->middleware('auth')->group(function(){
    Route::get('/index',[DashboardStaffController::class,'index']);
    Route::get('/create',[DashboardStaffController::class,'create']);
    Route::post('/store',[DashboardStaffController::class,'store']);
    Route::get('/edit/{staff}',[DashboardStaffController::class,'edit']);
    Route::post('/update/{staff}',[DashboardStaffController::class,'update']);
    Route::get('/destroy/{staff}',[DashboardStaffController::class,'destroy']);
});


Route::prefix('/dashboard/customer')->middleware('auth')->group(function(){
    Route::get('/index',[DashboardCustomerController::class,'index']);
    Route::get('/create',[DashboardCustomerController::class,'create']);
    Route::post('/store',[DashboardCustomerController::class,'store']);
    Route::get('/edit/{customer}',[DashboardCustomerController::class,'edit']);
    Route::post('/update/{customer}',[DashboardCustomerController::class,'update']);
    Route::get('/destroy/{customer}',[DashboardCustomerController::class,'destroy']);
});

