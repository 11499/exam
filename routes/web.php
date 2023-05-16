<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\samplecontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/index',[samplecontroller::class,'index']);
Route::get('/register',[samplecontroller::class,'register']);
Route::post('/regaction',[samplecontroller::class,'regaction']);
Route::get('/login',[samplecontroller::class,'login']);
Route::post('/loginaction',[samplecontroller::class,'loginaction']);
Route::get('/userhome',[samplecontroller::class,'userhome']);
Route::get('/logout',[samplecontroller::class,'logout']);
Route::get('/profile',[samplecontroller::class,'profile']);
Route::post('/edit/{id}',[samplecontroller::class,'edit']);
Route::get('/status',[samplecontroller::class,'status']);
Route::get('/adminhome',[samplecontroller::class,'adminhome']);
Route::get('/exam',[samplecontroller::class,'exam']);
Route::get('/approve/{id}',[samplecontroller::class,'approve']);
Route::get('/reject/{id}',[samplecontroller::class,'reject']);