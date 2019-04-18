<?php

namespace App\Http\Controllers;
use App\transaction;
use App\User;
use Illuminate\Http\Request;

class TransactionChildController extends Controller
{

    public function storeValue(Request $request)
    {

        $date_select = $request->date;
        $who = $this->user(1);
        $infos = transaction::all()->where("date", "=", $date_select)->groupBy('user_id');
        $returnHTML = view('transactions.transactionChild')->with('user_names', $who)->with('all', $infos)->renderSections('content');

        return response()->json(['success' => true, 'html' => $returnHTML]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //the id will will be which user logged in
        $who = $this->user(1);
        $infos = transaction::all()->groupBy('user_id');

        return view(('transactions.transactionChild'))->with('user_names', $who)->with('all',$infos);
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

    public function user($id){

        $who = User::select('name','id')->where("id","=",$id)->get();
    return $who;
    }

}
