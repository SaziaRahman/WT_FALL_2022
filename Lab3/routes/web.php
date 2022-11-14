<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogInController;
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
    return view('welcome');
});
Route::get('/home', function () {
    return view('Home');
});
Route::get('/profile', function () {
    return view('Profile');
});
Route::get('/login',[LogInController::class,'formLogIn'])->middleware('checklogin');
Route::post('/login',[LogInController::class,'formLogInPost'])->middleware('checklogin');
Route::get('/register',[RegisterController::class,'formValidation']);
Route::post('/register',[RegisterController::class,'formValidationPost']);
Route::get('/logout', function () {
    return view('Home');
});
Route::post('/logout',[LogInController::class,'logout'])->middleware('checklogin');

