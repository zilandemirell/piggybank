<?php

namespace App\Http\Controllers;

use App\transaction;
use App\User;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $names = User::select('name')->get();
        $infos = transaction::all()->groupBy('user_id');
        $turn_names = $this->turninto($names,"name");
        return view(('transactions.index'))->with('user_names', $turn_names)->with('all', $infos);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function allTransactions(){
       // transaction = $transaction::where('name','=',$a)->
       /* $tr = transaction::whereHas('User', function($q)
        {
            $q->where('id','=','1');
        })->get();
        ;*/
        $infos = transaction::all()->groupBy(['user_id','date']);
        $tt = transaction::where('date',"=","2019-04-12")->get();

        return ($infos);

       /* $transaction = transaction::whereHas('user_id', function($q) use ($id)
        {
            $q->where('id', $user_id);
        })->where('status', $datei)
            ->take($count)
            ->skip($skip)
            ->get();
*/
    }



}
