<?php

use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use App\Models\Transaction;
use App\Models\UserUpdate;
use Illuminate\Support\Facades\Auth;
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

Route::get('/profile', [UserController::class, 'index']);
Route::post('/profile/update', [UserController::class, 'update'])->name('profile/update');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/transaction/user_transaction', [TransactionController::class, 'index'])->name('transcation/user_transaction');
Route::post('/transaction/user_transaction', [TransactionController::class, 'create'])->name('transcation/user_transaction');

Route::middleware(['role:user', 'auth'])->group(function () {
    Route::get('test', [UserController::class, 'list'])->name('user.list');
});

Route::post('/profileupdate', [UserController::class, 'update']);
