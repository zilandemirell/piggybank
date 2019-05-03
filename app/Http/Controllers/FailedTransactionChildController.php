<?php

namespace App\Http\Controllers;
use App\transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FailedTransactionChildController extends Controller
{
    public function index()
    {

        $loggedUser= Auth::user()->id;
        $who = $this->user($loggedUser);
        $infos = transaction::all()->where('isFailed','=','1')->groupBy('user_id');


        return view(('failedTransactions.failedTransactionsChild'))->with('user_names', $who)->with('all', $infos);
    }


    public function storeValue(Request $request)
    {

        $date_select = $request->date;
        $loggedUser= Auth::user()->id;
        $who = $this->user($loggedUser);
        $infos = transaction::all()->where('isFailed','=','1')->where("date", "=", $date_select)->groupBy('user_id');
        $returnHTML = view('failedTransactions.failedTransactionsChild')->with('user_names', $who)->with('all', $infos)->renderSections('content');

        return response()->json(['success' => true, 'html' => $returnHTML]);
    }
    
}
