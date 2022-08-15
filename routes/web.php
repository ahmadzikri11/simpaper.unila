<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\HelpdeskController;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserUpdate;
use GuzzleHttp\Psr7\Request;
use Illuminate\Routing\ViewController;
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
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [UserController::class, 'grafikskbp'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // user Views
    Route::get('/profile', [ViewsController::class, 'UserProfileUpdate'])->name('profile');

    Route::get('/transaction/user_transaction', [ViewsController::class, 'UserSubmission'])->name('transcation/user_transaction');
    Route::get('/upload/repository', [ViewsController::class, 'UserRepository'])->name('get_repository');

    // Udpdate User
    Route::put('/profile/update/{id}', [UserController::class, 'UpdateUserProfile'])->name('profile.update');



    // Transaction User
    Route::post('/transaction/user_transaction', [UserController::class, 'CreateUserTransaction'])->name('transcation.user_transaction');
    Route::put('/transaction/user_transaction/status/update{id}', [UserController::class, 'UpdateUserTransaction'])->name('transaction.update');

    // upload update Link digilib
    Route::put('/upload/Repository/{id}', [UserController::class, 'UpdateUserRepository'])->name('update_repository');
    Route::post('/upload/Repository/create', [UserController::class, 'CreateUserRepository'])->name('create_repository');



    // route datatable
    Route::get('/getprodi', [UserController::class, 'getprodi']);
    Route::get('getprodi/{id}', [UserController::class, 'getprodi']);

    Route::get('/transaction/user_transaction/status', [TransactionController::class, 'status'])->name('transcation.status');
    Route::get('/transaction/status', [TransactionController::class, 'status'])->name('transcation/status');
     //route SKBP
     Route::get('/transaction/SKBP', [UserController::class, 'view_skbp'])->name('view_skbp');
     Route::post('/transaction/user_transaction/SKBP', [UserController::class, 'CreateUserSKBP'])->name('create_user_skbp');
     Route::put('/transaction/user_transaction/Update/SKBP{id}', [UserController::class, 'UpdateUserSKBP'])->name('update.skbp');
     

         // route helpdesk
    Route::get('/user/helpdesk', [HelpdeskController::class, 'View'])->name('user.helpdesk');
    Route::post('/user/helpdesk/input', [HelpdeskController::class, 'CreateHelpdesk'])->name('inputhelpdesk');
});

Route::middleware(['role:admin', 'auth'])->group(function () {

    Route::get('/profile/admin', [ViewsController::class, 'AdminProfileUpdate'])->name('profile_admin');
    Route::put('/profile/update/admim/{id}', [AdminController::class, 'UpdateAdminProfile'])->name('profile_update_admin');
    // list akun
    Route::get('/dashboard/list/account', [ViewsController::class, 'ListAccount'])->name('account.list');
    Route::put('dashboard/list/account/import', [AdminController::class, 'ImportUser'])->name('import');
    Route::put('/dashboard/list/account/reset_password/{id}', [AdminController::class, 'ResetPassword'])->name('reset.password');
    // edit akun
    Route::get('/dashboard/list/account/editaccount{id}', [AdminController::class, 'EditAccountAdmin'])->name('edit.account');
    Route::put('/dashboard/list/account/editaccount{id}', [AdminController::class, 'UpdateAccount'])->name('update.account');
    // list repository
    Route::get('/dashboard/list/repository', [ViewsController::class, 'ListRepository'])->name('list_repository');


    // list transaction
    Route::get('/dashboard/list/transaction', [ViewsController::class, 'ListTransaction'])->name('request.list');
    Route::get('/dashboard/validation/{id}', [ViewsController::class, 'ViewValidation'])->name('validation');
    Route::put('/dashboard/validation/accept{id}', [AdminController::class, 'ValidationTransaction'])->name('validation.accept');
    Route::post('dahsboard/validation/{id}', [AdminController::class, 'updatePeriode'])->name('periode_wisuda');
//list transaction SKBP
Route::get('/dashboard/list/SKBP', [ViewsController::class, 'ListTransactionSKBP'])->name('list.skbp');
Route::get('/dashboard/list/SKBP/ValdasiSKBP/{id}', [ViewsController::class, 'ViewValidasiSKBP'])->name('validasi.skbp');
Route::put('/dashboard/list/SKBP/accept{id}', [AdminController::class, 'TransactionSKBP'])->name('accept.skbp');

    // list Repository

    // Route::post('/dashboard/validation', [TransactionController::class, 'messege'])->name('messege');
    // Route::put('/dashboard/validation/reject{id}', [TransactionController::class, 'validationReject'])->name('validation.reject');

    // Route::post('/dashboard/validation/{phone}', [TransactionController::class, 'message'])->name('validation.message');
    Route::get('/storage/{path}', [TransactionController::class, 'showFile1'])->name('file1');
    Route::get('/storage/{path2}', [TransactionController::class, 'showFile2'])->name('file2');
    Route::get('/storage/{path3}', [TransactionController::class, 'showFile3'])->name('file3');
     // route helpdesk
     Route::get('/helpdesk/input', [HelpdeskController::class, 'HelpdeskRequest'])->name('request.helpdesk');
     Route::get('/helpdesk', [HelpdeskController::class, 'TableUnila'])->name('admin.helpdesk');
     Route::post('/helpdesk.aksi/{id}', [HelpdeskController::class, 'AksiInput'])->name('aksi.input');
     Route::post('/helpdesk/update', [HelpdeskController::class, 'AksiInput'])->name('aksi.input');
     Route::get('/dashboard/list/helpdesk', [HelpdeskController::class, 'ListHelpdesk'])->name('helpdesk.list');
     Route::get('/dashboard_helpdesk', [HelpdeskController::class, 'GraphHelpdesk'])->name('graph.helpdesk');

     //skbp
     
    Route::post('/app/public', [TransactionController::class, 'downloadStorage'])->name('fileSkbp');
    Route::post('/app/public2', [TransactionController::class, 'downloadStorage2'])->name('fileSkbp2');
});

// Route::get('/testdownload/{pathSkbp}', 'TransactionController@downloadStorage')->name('test1234');