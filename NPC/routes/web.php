<?php

use App\Http\Controllers\deliver;
use App\Http\Controllers\getcurrentvalue;
use App\Http\Controllers\getvalue;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NPCcontroller;
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
Route::get('/viewcount', function () {
    return view('viewcount');
});

Route::get('/login',[CustomAuthController::class,'login']);
Route::get('/registration',[CustomAuthController::class,'registration']);

Route::post('/register-user',[CustomAuthController::class,'registerUser'])->name('register-user');
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::post('/deliver-data',[deliver::class,'deliver_data'])->name('deliver-data');




Route::get('/npcpage',[NPCcontroller::class,'npcpage']);
Route::get('/npc_preparation',[NPCcontroller::class,'npc_preparation']);
Route::get('/npc_dashboard',[NPCcontroller::class,'npc_dashboard']);
Route::get('/npc_distributed',[NPCcontroller::class,'npc_distributed']);
Route::get('/npc_validate',[NPCcontroller::class,'npc_validate']);
Route::get('/npc_permissions',[NPCcontroller::class,'npc_permissions']);
Route::get('/npc_profile',[NPCcontroller::class,'npc_profile']);
Route::get('/npc_notification',[NPCcontroller::class,'npc_notificaion']);
Route::get('/npc_setting',[NPCcontroller::class,'npc_setting']);
Route::get('/logout',[NPCcontroller::class,'logout']);


//
Route::get('/list',[getvalue::class,'getRecentvalue']);