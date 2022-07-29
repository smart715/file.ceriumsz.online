<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DebtorOrder;
use App\Models\AccountHistor;
use App\Models\Clients;
use DB;

class PromisePay extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ptp = DebtorOrder::join('debtors','debtors.id','=','debtor_orders.debtor_id')
        ->where('debtor_orders.user_id',\Auth::user()->id)->select('debtor_orders.*')
        ->get();
        $ptpcount = AccountHistor::where('user_id',\Auth::user()->id)->where('action_type','Promise to pay')->count();
        $clients = Clients::select('clients.id','clients.name')->get();
        return view('ptp.index')
        ->with('ptp',$ptp)
        ->with('ptpcount',$ptpcount)
        ->with('clients',$clients);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
