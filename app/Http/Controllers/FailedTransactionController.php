<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\transaction;
use App\User;
class FailedTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeValue(Request $request)
    {
        //$this->date = session([ 'value' => $request->value]);
        //$this->index();
        //$datei = new Carbon($request->date,'Europe/London');
        $date_select = $request->date;
        //$datei=Carbon::createFromFormat('Y/m/d',$request->date);
        $names = User::select('name', 'id')->get();
        $infos = transaction::all()->where('isFailed','=','1')->where("date", "=", $date_select)->groupBy('user_id');

        $returnHTML = view('failedTransactions.index')->with('user_names', $names)->with('all', $infos)->renderSections('content');
        return response()->json(['success' => true, 'html' => $returnHTML]);
    }

    public function index()
    {
        $names = User::select('name', 'id')->get();

        //$turn_names = $this->turninto($names, "name", "id");


            $infos = transaction::all()->where('isFailed','=','1')->groupBy('user_id');


        return view(('failedTransactions.index'))->with('user_names', $names)->with('all', $infos);
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
