<?php

use App\Http\Controllers\LoansController;
use App\Http\Controllers\RepaymentsController;
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
Route::post('/repayments', [PaymentTransactionsController::class,'index']);
// Route::post('/loan', [LoansController::class,'store1']);

Route::post('/loans', [LoansController::class,'store']);
Route::get('/loans/{id}', [LoansController::class,'show']);
Route::get('/loans/{id}/edit', [LoansController::class,'edit']);
// Route::get('/blog/{blog:title}', 'BlogController@show');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
