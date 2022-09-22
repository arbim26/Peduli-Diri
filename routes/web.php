<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerjalananController; 
use App\Http\Controllers\UserController; 
use App\Models\Perjalanan; 
use App\Models\User; 
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

Route::get('/', function () {
    return view('login');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/postlogin',[LoginController::class, 'postlogin']);
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registernew',[LoginController::class, 'registernew']);
Route::get('/logout',[LoginController::class, 'logout']);

Route::middleware(['auth:user'])->group(function () {
    Route::get('/dashboard',[PerjalananController::class,'dashboard'])->name('dashboard');
    Route::get('/perjalanan',[PerjalananController::class,'perjalanan'])->name('perjalanan');
    Route::post('/insert',[PerjalananController::class,'create'])->name('create');
    Route::get('/tambah',[PerjalananController::class,'tambah'])->name('tambah');
});

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('indexadmin');
    });
});

Route::get('/duser',[UserController::class,'duser'])->name('duser');
Route::get('/viewuser/{id}', [UserController::class, 'view']);
Route::post('/updateuser/{id}', [UserController::class, 'update']);
Route::get('/deleteuser/{id}', [UserController::class, 'destroy']);