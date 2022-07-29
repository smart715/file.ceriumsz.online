<?php

namespace App\Http\Controllers;

use App\Models\DebtorOrder;
use Illuminate\Http\Request;
use App\Models\AccountHistor;

class DebtorOrderController extends Controller
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
    public function store(Request $request,$id)
    {
        $user_id =\Auth::user()->id;
        AccountHistor::create([
            'account_no'=>$request->input('account_no'),
            'action_type'=>'Promise to pay',
            'user_name'=>\Auth::user()->name,
            'user_id'=>$user_id,
            'comments'=>$request->ptp_comments,
            'debtor_id'=>$id,
        ]);
        $request->merge(['debtor_id'=>$id]);
        $request->merge(['user_id'=>$user_id]);

       $account_no =  DebtorOrder::create(
            $request->except(['account_no']));

         return redirect()->back()->with('status', 'PTP data added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DebtorOrder  $debtorOrder
     * @return \Illuminate\Http\Response
     */
    public function show(DebtorOrder $debtorOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DebtorOrder  $debtorOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(DebtorOrder $debtorOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DebtorOrder  $debtorOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DebtorOrder $debtorOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DebtorOrder  $debtorOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(DebtorOrder $debtorOrder)
    {
        //
    }
}
