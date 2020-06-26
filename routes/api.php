<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('user', function (Request $request) {
    return $request->user();
});

Route::get('clients', 'ClientController@index');
Route::group(['prefix' => 'client'], function () {
    Route::post('add', 'ClientController@add');
    Route::get('edit/{id}', 'ClientController@edit');
    Route::post('update/{id}', 'ClientController@update');
    Route::delete('delete/{id}', 'ClientController@delete');
});

Route::get('loans', 'LoanController@index');
Route::group(['prefix' => 'loan'], function () {
    Route::post('addl', 'LoanController@addl');
    Route::get('editl/{id}', 'LoanController@editl');
    Route::post('updatel/{id}', 'LoanController@updatel');
    Route::delete('deletel/{id}', 'LoanController@deletel');
});

Route::get('pays', 'PayController@index');
Route::group(['prefix' => 'pay'], function () {
    Route::post('addp', 'PayController@addp');
    Route::get('editp/{id}', 'PayController@editp');
    Route::post('updatep/{id}', 'PayController@updatep');
    Route::delete('deletep/{id}', 'PayController@deletep');
});