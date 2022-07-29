<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Clients::all();
        return view('clients.index')->with('clients', $clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    
    public function store(Request $request)
    {
       
        $input = $request->all();
        Clients::create($input);
        Return redirect('clients')->with('flash_message', 'Client Addedd!');  

    }

   
    public function show($id)
    {
        $clients = Clients::find($id);
        return view('clients.show')->with('clients',$clients);
    }

   
    public function edit($id)
    {
        $clients = Clients::find($id);
        return view('clients.edit')->with('clients',$clients);
    }

    
    public function update(Request $request, Clients $clients)
    {
        $clients = Clients::find($id);
        $input = $request->all();
        $clients->update($input);
        Return redirect('clients')->with('flash_message', 'Client Updated!');  

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Clients::destroy($id);
        Return redirect('clients')->with('flash_message', 'Client Deleted!'); 
    }
}
