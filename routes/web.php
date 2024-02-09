<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\CharacterController;

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



Route::get('/',[CharacterController::class,'list'])->name('main.home');
Route::get('/characters/{id}',[CharacterController::class,'read',])->name('main.character');
Route::get('/houses', [HouseController::class, 'list'])->name('main.houses');
Route::get('/houses/{id}', [HouseController::class, 'read'])->name('main.house');
