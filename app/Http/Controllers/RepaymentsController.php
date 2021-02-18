<?php

namespace App\Http\Controllers;

use App\Models\Repayments;
use App\Models\Loans;
use Illuminate\Http\Request;

class RepaymentsController extends Controller
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
    public function create($id)
    {
        return view('show', [
            'loans' => Loans::findOrFail($id)
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'loans_id.*'=>'required',
            'repaymentNumber.*'=>'required',
            'start_date.*'=>'required',
            'beginningBalance.*'=>'required',
            'interest.*'=>'required',
            'principal.*'=>'required',
            'scheduledPayment.*'=>'required',
            'endingBalance.*'=>'required',
        ]);
        // dd($data);
    $count = count($request->loans_id);
    // dd($count);

    for ($i=0; $i < $count; $i++) { 
	  $repayments = new Repayments();
	  $repayments->loans_id = $request->loans_id[$i];
      $repayments->repaymentNumber = $request->repaymentNumber[$i];
	  $repayments->start_date = $request->start_date[$i];
      $repayments->beginningBalance = $request->beginningBalance[$i];
      $repayments->interest = $request->interest[$i];
      $repayments->principal = $request->principal[$i];
      $repayments->scheduledPayment = $request->scheduledPayment[$i];
      $repayments->endingBalance = $request->endingBalance[$i];
	  $repayments->save();


    }

        // Repayments::create($data);
        return redirect ('/loans/'.$request->loan_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Repayments  $repayments
     * @return \Illuminate\Http\Response
     */
    public function show(Repayments $repayments)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Repayments  $repayments
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // dd($repayments);
        $repayments = Repayments::findOrFail($id);     
        return view('editpayment',compact('repayments'));
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Repayments  $repayments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return view('show1', [
        // ]);
        $repayments = Repayments::where('id', '=', $id)->first();
        // dd($repayments);
        $repayments->status = 'paid';
        // $id= $id;
        // dd($repayments);
        $repayments->update($request->all());
        // dd($repayments);
        return redirect('/transactions/create/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Repayments  $repayments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Repayments $repayments)
    {
        //
    }
}
