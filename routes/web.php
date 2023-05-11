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


Route::get('users', [UserController::class, 'index'])->name('users');
Route::get('user-transactions/{userId}', [UserController::class, 'show'])->name('user-transactions');
Route::get('users-with-transactions/{userId}', [UserController::class, 'userWithTransactions'])->name('userWithTransactions');