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

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [UserController::class, 'dashboarduser'])->name('dashboard');


Route::middleware('auth')->group(function () {

    Route::get('/transaction/user_transaction', [TransactionController::class, 'index'])->name('transcation/user_transaction');
    Route::get('/transaction/user_transaction/status', [TransactionController::class, 'status'])->name('transcation.status');
    Route::get('/profile', [UserController::class, 'index'])->name('profile');
    Route::get('/upload/repository', [UserController::class, 'GetRepository'])->name('get_repository');
    Route::get('/getprodi', [UserController::class, 'getprodi']);
    Route::get('getprodi/{id}', [UserController::class, 'getprodi']);
    Route::post('/transaction/user_transaction', [TransactionController::class, 'create'])->name('transcation.user_transaction');
    Route::post('/upload/Repository/create', [TransactionController::class, 'CreateRepository'])->name('create_repository');
    Route::put('/profile/update/{id}', [UserController::class, 'update'])->name('profile.update');
    Route::put('/upload/Repository/{id}', [TransactionController::class, 'UpdateRepository'])->name('update_repository');
    Route::put('/transaction/user_transaction/status/update{id}', [TransactionController::class, 'udate'])->name('transaction.update');
    Route::get('/transaction/status', [TransactionController::class, 'status'])->name('transcation/status');
});

Route::middleware(['role:admin', 'auth'])->group(function () {
    Route::get('/dashboard/list/account', [UserController::class, 'listaccount'])->name('account.list');
    Route::get('/dashboard/list/repository', [UserController::class, 'ListRepository'])->name('list_repository');
    Route::put('dashboard/list/account/import', [UserController::class, 'importUser'])->name('import');
    Route::get('/dashboard/list/account/editaccount{id}', [UserController::class, 'editAccount'])->name('edit.account');
    Route::put('/dashboard/list/account/editaccount{id}', [UserController::class, 'updateAccount'])->name('update.account');
    Route::get('/dashboard/list/account/deleteaccount{id}', [UserController::class, 'destroy'])->name('delete.account');
    Route::get('/dashboard/list/account/deletetransaction{id}', [TransactionController::class, 'destroy'])->name('delete.transaction');
    Route::get('/dashboard/list/request', [TransactionController::class, 'listRequest'])->name('request.list');
    Route::get('/dashboard/validation/{id}', [TransactionController::class, 'validation'])->name('validation');
    Route::get('/dashboard/validation/repository/{id}', [TransactionController::class, 'ViewAdminRepository'])->name('repository_admin');
    Route::post('/dashboard/validation', [TransactionController::class, 'messege'])->name('messege');
    Route::post('dahsboard/validation/{id}', [TransactionController::class, 'updatePeriode'])->name('periode_wisuda');
    Route::put('/dashboard/validation/accept{id}', [TransactionController::class, 'validationAccept'])->name('validation.accept');
    Route::put('/dashboard/validation/reject{id}', [TransactionController::class, 'validationReject'])->name('validation.reject');
    Route::put('/dashboard/validation/repository/{id}', [TransactionController::class, 'validationRepository'])->name('repository_validation_accept');
    Route::post('/dashboard/validation/{phone}', [TransactionController::class, 'message'])->name('validation.message');
    Route::get('/dashboard/repository/', [UserController::class, 'AdminGetRepository'])->name('view_repository');
    Route::get('/storage/{path}', [TransactionController::class, 'showFile1'])->name('file1');
    Route::get('/storage/{path2}', [TransactionController::class, 'showFile2'])->name('file2');
    Route::get('/storage/{path3}', [TransactionController::class, 'showFile3'])->name('file3');
    Route::get('/storage/{path4}', [TransactionController::class, 'showFile4'])->name('file4');
});
