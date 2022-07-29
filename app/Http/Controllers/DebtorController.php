<?php

namespace App\Http\Controllers;

use App\Models\Debtor;
use App\Models\DebtorOrder;
use App\Models\AccountHistor;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\YebopaySendPaymentLink;

class DebtorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $debtors = Debtor::select('debtors.*','clients.name AS client_name')
        ->join('clients','debtors.client','=','clients.id','left')
        ->get();
        return view('user.index')
        ->with('debtors',Debtor::all())
        ->with('ptpcount',AccountHistor::where('user_id',\Auth::user()->id)->where('action_type','Promise to pay')->count());
    }

    public function mainDebtorIndex()
    {
        return view('debtor.index')->with('debtors',Debtor::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getDetail($id)
    {
        return view('user.debtor.index')
        ->with('debtors',Debtor::where('id',$id)->first())
        ->with('account_histories',AccountHistor::where('user_id',\Auth::user()->id)->get());

    }

    public function show_debtor($id)
    {
        return view('debtor.show_debtor')->with('debtors',Debtor::where('id',$id)->first());

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
     * @param  \App\Models\Debtor  $debtor
     * @return \Illuminate\Http\Response
     */
    public function show(Debtor $debtor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Debtor  $debtor
     * @return \Illuminate\Http\Response
     */
    public function edit(Debtor $debtor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Debtor  $debtor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Debtor $debtor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Debtor  $debtor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Debtor $debtor)
    {
        //
    }


    public function yebo_pay_form(Request $request)
    {

        $payment_link_options = $request->payment_link_options;
        $payment_customer_email = $request->payment_customer_email;
        $payment_customer_mobile_number = $request->payment_customer_mobile_number;
        if($payment_link_options == "email") {
            $request->validate([
               'payment_customer_email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
           ]);
            $payment = array();
            $payment['payment_customer_email']  = $payment_customer_email;
            $payment['subject']  = 'Premium due for your debt';
            $payment['payment_url'] = encrypt(1);

            Mail::to($payment_customer_email)->send(new YebopaySendPaymentLink($payment));
            return response()->json([ 'success'=> 'Payment url is successfully sent!']);
        } else {
            $request->validate([
               'payment_customer_mobile_number' => 'required|numeric|min:10|max:10',
           ]);
            return response()->json([ 'success'=> 'SMS functionality not developed']);
        }

    }
    
}
