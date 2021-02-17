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

Route::get('/',[LoansController::class,'index'])->middleware('auth')->middleware('auth');

Route::post('/loans', [LoansController::class,'store'])->middleware('auth');
Route::get('/loans', [LoansController::class,'index'])->middleware('auth');

Route::get('/loans/add', [LoansController::class,'create'])->middleware('auth');

Route::any('/loans/{id}/repayments/create', [RepaymentsController::class,'create'])->middleware('auth');
Route::post('/loans/{id}/repayments', [RepaymentsController::class,'store'])->middleware('auth');
Route::get('/repayments/{paymentid}', [RepaymentsController::class,'edit'])->middleware('auth');
Route::get('/repayments/update/{paymentTransaction}/edit', [RepaymentsController::class,'edit'])->middleware('auth');
Route::post('/repayments/update/{paymentTransaction}', [RepaymentsController::class,'update'])->middleware('auth');
Route::get('/transactions/create/{r_id}', [PaymentTransactionsController::class,'create'])->middleware('auth');
Route::post('/transactions/create', [PaymentTransactionsController::class,'store'])->middleware('auth');
// Route::post('/loan', [LoansController::class,'store1']);

Route::post('/loans', [LoansController::class,'store'])->middleware('auth');
Route::get('/loans/{id}', [LoansController::class,'show'])->middleware('auth');
Route::get('/loans/{id}/edit', [LoansController::class,'edit'])->middleware('auth');
Route::get('/banks', [BankAccountController::class,'index'])->middleware('auth');
Route::get('/banks/add', [BankAccountController::class,'create'])->middleware('auth');
Route::post('/banks', [BankAccountController::class,'store'])->middleware('auth');


Route::get('/customers', [CustomersController::class,'index'])->middleware('auth');
Route::get('/customers/add', [CustomersController::class,'create'])->middleware('auth');
Route::post('/customers', [CustomersController::class,'store'])->middleware('auth');


Route::get('/suppliers', [SuppliersController::class,'index'])->middleware('auth');
Route::get('/suppliers/add', [SuppliersController::class,'create'])->middleware('auth');
Route::post('/suppliers', [SuppliersController::class,'store'])->middleware('auth');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
