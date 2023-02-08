<?php

use App\Http\Controllers\AuthControler;
use App\Http\Controllers\HomeControler;
use App\Http\Controllers\UserControler;
use Illuminate\Support\Facades\Route;

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

Route::get('/default', function () {
  return view('welcome');
});

Route::get('/', [HomeControler::class, 'index']);

// Aut
Route::get('/login', [AuthControler::class, 'index']);
Route::post('/processlogin', [AuthControler::class, 'processLogin']);
Route::get('/register', [AuthControler::class, 'register']);
Route::post('/processregister', [AuthControler::class, 'processRegister']);

// UserRoute
Route::get('/datauser', [UserControler::class, 'index']);
