<?php

namespace App\Http\Controllers;

use App\Models\Debtors;
use App\Models\Clients;
use Illuminate\Http\Request;
use Storage;


class DebtorsController extends Controller
{

    public function index()
    {
        $debtors = Debtors::select('debtors.*', 'clients.name AS client_name')
            ->join('clients', 'debtors.client', '=', 'clients.id', 'left')
            ->get();
        return view('debtors.index')->with('debtors', $debtors);
    }


    public function create()
    {
        $clients = Clients::all();
        return view('debtors.create')->with('clients', $clients);
    }


    public function store(Request $request)
    {
        $input = $request->all();
        Debtors::create($input);
        return redirect('debtors')->with('flash_message', 'Debtor Addedd!');
    }

    public function dropDownShow(Request $request)
    {

        $clients = Clients::pluck('name', 'id');
        $selectedID = 2;
        return view('clients.edit', compact('id', 'name'));
    }

    public function getDetail($id)
    {
        return view('user.debtors.index')->with('debtors', Debtors::where('id', $id)->first());
    }

    public function show($id)
    {
        $debtors = Debtors::find($id);
        return view('debtors.show')->with('debtor', $debtors);
    }


    public function edit($id)
    {
        $debtors = Debtors::find($id);
        return view('debtors.edit')->with('debtors', $debtors);
    }


    public function update(Request $request, debtors $debtors)
    {
        $debtors = Debtors::find($id);
        $input = $request->all();
        $debtors->update($input);
        return redirect('debtors')->with('flash_message', 'debtors Updated!');
    }

    public function destroy($id)
    {
        Debtors::destroy($id);
        return redirect('debtors')->with('flash_message', 'debtor Deleted!');
    }

    public function csvUpload(Request $request)
    {

        $file = $request->file('csv');

        $filename = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $tempPath = $file->getRealPath();
        $fileSize = $file->getSize();
        $mimeType = $file->getMimeType();

        // Valid File Extensions
        $valid_extension = array("csv");

        // 200MB in Bytes
        $maxFileSize = 209715200;

        Storage::disk('public')->putFileAs("uploads", $file, $filename);

        // Check file extension
        if (in_array(strtolower($extension), $valid_extension)) {
            if ($request->has('header')) {
                $data = Excel::load($tempPath, function ($reader) {
                })->get()->toArray();
            } else {
                $data = array_map('str_getcsv', file($tempPath));
            }
        }

        if (count($data) > 0) {
            $keyArr = array();       
            foreach ($data as $key => $record) {
                if ($key == 0) {
                    $keyArr = $record;
                    array_push($keyArr, 'client');
                }else {
                    $record = array_map('utf8_encode', $record);
                    $record_str = json_encode($record, JSON_UNESCAPED_UNICODE);

                    $resArr = json_decode($record_str, true);
                    $resArr = array_map('utf8_decode', $resArr);
                    
                    array_push($resArr, '1');
                    $insertArr = array_combine($keyArr, $resArr);
                    
                    $insertArr['lastpaymentdate'] = date("Y-m-d", strtotime($insertArr['lastpaymentdate']));
                    Debtors::insert($insertArr);
                }
            }
        }
        return redirect()->back();
    }
}
