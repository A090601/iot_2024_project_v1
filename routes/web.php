<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/user', [UserController::class, 'edit'])->name('user.edit');
    Route::patch('/user', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user', [UserController::class, 'destroy'])->name('user.destroy');
});


Route::get('admin', function () {
    return '<h1>Hello Admin</h1>';
})->middleware(['auth', 'verified', 'role:admin']);


Route::get('management', function () {
    return '<h1>Hello Penulis</h1>';
})->middleware(['auth', 'verified', 'role:management|admin']);


Route::get('kepala management', function () {
    return '<h1>Tulisan Sederhana</h1>';
})->middleware(['auth', 'verified', 'role_or_permission:lihat-tulisan|admin']);


