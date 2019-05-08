<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::resource('transactions','TransactionsController');
Route::resource('transactionChild','TransactionChildController');
Route::resource('homeChild','homeChildController');
Route::resource('User','UserController');
Route::resource('posts','PostController');
Route::resource('failedTransactions','FailedTransactionController');
Route::resource('failedTransactionsChild', 'FailedTransactionChildController');
//Route::resource('makeTransactionChild', 'makeTransactionController');
//Route::resource('makeTransactionParent', 'makeTransactionController');


Route::get('posts/{{$post->id}}','PostController@show');

Auth::routes();

Route::get('/', function () {
    return view("firstPage");
});


Auth::routes();




Route::get('/home', 'HomeController@index')->name('home');
Route::get('/homeChild', 'homeChildController@index')->name('homeChild');
Route::get('/makeTransactionChild', 'makeTransactionController@index')->name('makeTransactionChild');
Route::get('/makeTransactionParent', 'makeTransactionController@indexParent')->name('makeTransactionParent');



Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/profile', 'profileController@index')->name('profile');
Route::get('/profileChild', 'profileChildController@index')->name('profileChild');

//Route::get('/test-request-with-guzzle', 'GuzzleController@index');

//Route::get('/','TransactionsController@storevalue');
Route::post('session/dateValue', 'TransactionsController@storeValue');
Route::post('session/dateCValue', 'TransactionChildController@storeValue');
Route::post('session/dateFValue', 'FailedTransactionController@storeValue');
Route::post('session/dateFCValue', 'FailedTransactionChildController@storeValue');


Route::post('session/openDoor', 'makeTransactionController@opendoor');
