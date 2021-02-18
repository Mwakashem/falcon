<?php

namespace App\Http\Controllers;

use App\Models\Loans;
use App\Models\BankAccount;

use App\Models\Repayments;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class LoansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $loans = Loans::latest()->get();

        return view('falcon', compact('loans'));
    }
    public function recent()
    {
        //
        $loans = Loans::latest()->get()->first();

        return view('recent', compact('loans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banks = BankAccount::latest()->get();
        return view('addloan', compact('banks'));
    }
    // public function create1($id)
    // {
       
    //     return view('show', [
    //         'loans' => Loans::findOrFail($id)
            
    //     ]);
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'bankName'=>'required',
            'loanAmount'=>'required',
            'differed'=>'required',
            'interestRate'=>'required',
            'loanType'=>'required',
            'loanDuration'=>'required',
            'numberOfInstallments'=>'required',
            'startDate'=>'required',
        ]);

        Loans::create($data);

        return redirect ('/loans/recent');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Loans  $loans
     * @return \Iluminate\Http\Response
     */
    public function show($id)
    {
        // $loans->load('Repayments');
        // $loans = Loans::with('$id')->get();
        return view('show1', [
            'loans' => Loans::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Loans  $loans
     * @return \Illuminate\Http\Response
     */
    public function edit(Loans $loans)
    {
        return view('editloan' ,compact($loans));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Loans  $loans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loans $loans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Loans  $loans
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loans $loans)
    {
        //
    }
}
