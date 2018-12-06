<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'HomeController@index');

Route::Auth();

Route::get('expensesReport','ExpenseController@report');
Route::get('donarsLedger/{id}','DonarController@ledger');
Route::get('donationLedger/{id}/{type}','DonationController@ledger');
Route::get('expensesLedger/{id}/{type}','ExpenseController@ledger');

Route::resource('donars','DonarController');
Route::resource('donations','DonationController');
Route::resource('expenses','ExpenseController');
//Route::resource('expenses.report','ExpenseController@report');
Route::resource('types','TypeController');
Route::resource('currencys','CurrencyController');

Route::resource('userss', 'UsersController');
Route::resource('crud', 'CrudController');
Route::get('crud', 'CrudController@create'); // Crud Route
Route::get('AutoCompleteDonarName', 'DonationController@AutoCompleteDonarName');

Route::get('editpassword/{id}','UsersController@editpassword'); // Password Change
Route::patch('updatepassword/{id}','UsersController@updatepassword'); //Password Change

