<?php

use App\Http\Controllers\getcurrentvalue;
use App\Models\senosrdatatoday;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\tb_sensordatatodays;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[CustomAuthController::class,'login']);
Route::get('/registration',[CustomAuthController::class,'registration']);
Route::post('/register-user',[CustomAuthController::class,'registerUser'])->name('register-user');
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('/npcpage',[CustomAuthController::class,'npcpage']);
Route::get('/npc_dashboard',[CustomAuthController::class,'npc_dashboard']);
Route::get('/logout',[CustomAuthController::class,'logout']);


Route::get('/list',[tb_sensordatatodays::class,'getRecentvalue']);
Route::get('/npc_dashboard',[tb_sensordatatodays::class,'getRecentvalue']);