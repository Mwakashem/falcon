<?php

use App\Http\Controllers\LoansController;
use App\Http\Controllers\PaymentTransactionsController;
use App\Http\Controllers\RepaymentsController;
use App\Http\Controllers\BankAccountController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\SuppliersController;
use App\Models\BankAccount;
use App\Models\Loans;
use App\Models\Repayments;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;

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

Route::get('/',[LoansController::class,'index']);

Route::get('/loans/add', [LoansController::class,'create']);
Route::any('/loans/{id}/repayments/create', [RepaymentsController::class,'create']);
Route::post('/loans/{id}/repayments', [RepaymentsController::class,'store']);
Route::get('/repayments/{paymentid}', [RepaymentsController::class,'edit']);
Route::get('/repayments/update/{paymentTransaction}/edit', [RepaymentsController::class,'edit']);
Route::post('/repayments/update/{paymentTransaction}', [RepaymentsController::class,'update']);
Route::get('/transactions/create/{r_id}', [PaymentTransactionsController::class,'create']);
Route::post('/transactions/create', [PaymentTransactionsController::class,'store']);
// Route::post('/loan', [LoansController::class,'store1']);

Route::post('/loans', [LoansController::class,'store']);
Route::get('/loans/{id}', [LoansController::class,'show']);
Route::get('/loans/{id}/edit', [LoansController::class,'edit']);
Route::get('/banks', [BankAccountController::class,'index']);
Route::get('/banks/add', [BankAccountController::class,'create']);
Route::post('/banks', [BankAccountController::class,'store']);


Route::get('/customers', [CustomersController::class,'index']);
Route::get('/customers/add', [CustomersController::class,'create']);
Route::post('/customers', [CustomersController::class,'store']);


Route::get('/suppliers', [SuppliersController::class,'index']);
Route::get('/suppliers/add', [SuppliersController::class,'create']);
Route::post('/suppliers', [SuppliersController::class,'store']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
