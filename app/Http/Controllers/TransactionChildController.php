<?php

namespace App\Http\Controllers;

use App\transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TransactionChildController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function storeValue(Request $request)
    {

        $date_select = $request->date;
        $loggedUser = Auth::user()->id;
        $who = $this->user($loggedUser);
        $infos = transaction::all()->where("date", "=", $date_select)->groupBy('user_id');

        $returnHTML = view('transactions.transTable')->with('user_names', $who)->with('all', $infos)->render();
        if(array_key_exists($loggedUser,$infos)){
            return response()->json(['success' => true, 'html' => $returnHTML ]);

        }else
            return response()->json(['success' => false, 'html' => $returnHTML ]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loggedUser = Auth::user()->id;
        $who = $this->user($loggedUser);
        $infos = transaction::all()->groupBy('user_id');
        /*foreach ($infoy[$who] as $infos){
            $infos->sortByDesc('id');
        }*/


        //$infos = transaction::groupBy('user_id')->orderBy('id','ASC')->get();

        //$infos = $infom->sortByDesc('created_at');
        //$infos = sort($infom->id,'ASC');
        return view(('transactions.transactionChild'))->with('user_names', $who)->with('all', $infos);
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
