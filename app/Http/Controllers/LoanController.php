<?php

namespace App\Http\Controllers;

use App\loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    
    public function index()
    {
        $loans = Loan::all()->toArray();
        return array_reverse($loans);
    }

    
    public function add(Request $request)
    {
        $loan = new Loan([
            'client' => $request->input('client'),
            'quantity' => $request->input('quantity'),
            'pays' => $request->input('pays'),
            'share' => $request->input('share'),
            'total_to_pay' => $request->input('total_to_pay'),
            'date_mini' => $request->input('date_mini'),
            'date_expiration' => $request->input('date_expiration'),
        ]);
        $loan->save();

        return response()->json('The loan successfully added');
    }

   
    public function edit($id)
    {
        $loan = Loan::find($id);
        return response()->json($loan);
    }

   
    public function update($id, Request $request)
    {
        $loan = Loan::find($id);
        $loan->update($request->all());

        return response()->json('The loan successfully updated');
    }

    
    public function delete($id)
    {
        $loan = Loan::find($id);
        $loan->delete();

        return response()->json('The loan successfully deleted');
    }
}