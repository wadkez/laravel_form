<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\FormDataRequest;



class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function validateForm(FormDataRequest $request){
        //$data = $request->all();


        $validator = Validator::make($request->all(), [
            'name'          => 'required',
            'phone'         => 'required|regex:/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/',
            'email'         => 'required|email',
            'address'       => 'required',
        ]);


        

        if(!$validator->fails()){
            return response()->json([
                'status'=>0,
                'error'=>$validator->errors()->toArray()
                ]);
        } else{
            $client = new Client();
            $client->name = $request->name;
            $client->phone = $request->phone;
            $client->email = $request->email;
            $client->address = $request->address;
            $client->save();

            return response()->json(['success'=>'Successfully']);
        }
    }







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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
