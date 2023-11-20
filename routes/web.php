<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;


Route::get('/', [HomeController::class, 'index']) -> name('home');

Route::get('/users', [UserController::class, 'index']) -> name('users.index'); 
Route::get('/users/create', [UserController::class, 'create']) -> name('users.create'); 
Route::post('/users', [UserController::class, 'store']) -> name('users.store'); 
Route::post('/users/{users}', [UserController::class, 'show']) -> name('users.show'); 
Route::post('/users/{users}/edit', [UserController::class, 'edit']) -> name('users.edit'); 
Route::put('/users/{users}', [UserController::class, 'update']) -> name('users.update'); 
Route::delete('/users/{users}', [UserController::class, 'destroy']) -> name('users.destroy'); 

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/login', function () {
    return view('login');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/cars', function () {
    return view('cars');
});
