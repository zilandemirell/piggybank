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
    public function __construct()
    {
        $this->middleware('auth');
    }

 public function storeValue(Request $request)
    {
        //$this->date = session([ 'value' => $request->value]);
        //$this->index();
        //$datei = new Carbon($request->date,'Europe/London');
        $date_select = $request->date;
        $names = User::select('name', 'id')->get();
        $infos = transaction::all()->where("date", "=", $date_select)->groupBy('user_id');


        $returnHTML = view('transactions.transTable')->with('user_names', $names)->with('all', $infos)->render();
        return response()->json(['success' => true, 'html' => $returnHTML ]);
    }


    public function index()
    {

        $names = User::select('name', 'id')->get();
        $infos = transaction::all()->groupBy('user_id');
        return view(('transactions.index'))->with('user_names', $names)->with('all', $infos);
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



}
