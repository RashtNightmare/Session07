<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sign-in', function () {return view('sign_in');});
// Route::get('/role-add',[RoleController::class,'add']);
 Route::get('/user/create',[UserController::class,'create']);
 Route::post('/user',[UserController::class,'store']);

 Route::get('/welcome',[UserController::class,'index']);
Route::get('/welcome_new',function(){
    return view('welcome_new');
});
Route::resource('/role',RoleController::class);
Route::resource('/user',UserController::class);
