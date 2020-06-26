<?php

namespace App\Http\Controllers;

use App\Pay;
use Illuminate\Http\Request;

class PayController extends Controller
{
   
    public function index()
    {
        $pays = Pay::all()->toArray();
        return array_reverse($pays);
    }

   
    public function add(Request $request)
    {
        $book = new Pay([
            'client' => $request->input('client'),
            'payment' => $request->input('payment'),
            'quantity' => $request->input('quantity')

            
        ]);
        $pay->save();

        return response()->json('The pay successfully added');
    }

  
    public function edit($id)
    {
        $pay = Pay::find($id);
        return response()->json($pay);
    }

   
    public function update($id, Request $request)
    {
        $pay = Pay::find($id);
        $pay->update($request->all());

        return response()->json('The pay successfully updated');
    }

    
    public function delete($id)
    {
        $pay = Pay::find($id);
        $pay->delete();

        return response()->json('The pay successfully deleted');
    }
}