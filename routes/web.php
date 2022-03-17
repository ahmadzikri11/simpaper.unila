<?php

use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserUpdate;
use GuzzleHttp\Psr7\Request;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard-admin');
})->name('dashboard');


Route::middleware('auth')->group(function () {

    Route::get('/transaction/user_transaction', [TransactionController::class, 'index'])->name('transcation/user_transaction');
    Route::get('/profile', [UserController::class, 'index'])->name('profile');
    Route::post('/transaction/user_transaction', [TransactionController::class, 'create'])->name('transcation.user_transaction');
    Route::put('/profile/update/{id}', [UserController::class, 'update'])->name('profile.update');
    Route::get('/transaction/status', [TransactionController::class, 'status'])->name('transcation/status');
});

Route::middleware(['role:admin', 'auth'])->group(function () {
    Route::get('/dashboard/list/account', [UserController::class, 'listaccount'])->name('account.list');
    Route::get('/dashboard/list/request', [TransactionController::class, 'listRequest'])->name('request.list');
    Route::get('/dashboard/admin', [UserController::class, 'display'])->name('dashboard.admin');
    Route::get('/dashboard/validation', [TransactionController::class, 'validation'])->name('validation');
    Route::put('/dashboard/validation/{id}', [TransactionController::class, 'validationUpdate'])->name('validation.accepted');
    Route::post('/dashboard/validation/{phone}', [TransactionController::class, 'message'])->name('validation.message');
});
