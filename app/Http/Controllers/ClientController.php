<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ClientCollection;
use App\Client;

class ClientController extends Controller
{
    // all books
    public function index()
    {
        $clients = Client::all()->toArray();
        return array_reverse($clients);
    }

    // add book
    public function add(Request $request)
    {
        $client = new Client([
            'name' => $request->input('name'),
            'phone' => $request->input('phone')
        ]);
        $client->save();

        return response()->json('The client successfully added');
    }

    // edit book
    public function edit($id)
    {
        $client = Client::find($id);
        return response()->json($client);
    }

    // update book
    public function update($id, Request $request)
    {
        $client = Client::find($id);
        $client->update($request->all());

        return response()->json('The client successfully updated');
    }

    // delete book
    public function delete($id)
    {
        $client = Client::find($id);
        $client->delete();

        return response()->json('The client successfully deleted');
    }
}