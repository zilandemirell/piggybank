<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaction;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   //user id part will be replaced with the current user
        $user_id = Auth::user()->id;
        
        $totalBalance= transaction::where('user_id',$user_id)->sum('balance');
        return view('home')->with('total',$totalBalance);
    }
}
