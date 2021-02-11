<?php

namespace App\Http\Controllers;

use App\Models\PaymentTransactions;
use App\Models\Repayments;
use Illuminate\Http\Request;

class PaymentTransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = request()->validate([
            'installmentNumber'=>'required',
            'paymentAmount'=>'required',
            'chequeNumber'=>'required',
            'date_deposited'=>'required',
        ]);

        PaymentTransactions::create($data);

        return redirect ('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaymentTransactions  $paymentTransactions
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentTransactions $paymentTransactions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaymentTransactions  $paymentTransactions
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentTransactions $paymentTransactions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaymentTransactions  $paymentTransactions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentTransactions $paymentTransactions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaymentTransactions  $paymentTransactions
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentTransactions $paymentTransactions)
    {
        //
    }
}
