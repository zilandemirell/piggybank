<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use App\User;
use App\transaction;


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
    {
        //$loggedUser= Auth::user()->id;
        //$isParent=Auth::user()->isParent;
        $users = User::all();
        $userBalance=[];
        $count=0;
        foreach ($users as $user) {

           $totalBalance = transaction::where('user_id', $user->id) -> sum('balance');
            $userName = $user->name;
          $userBalance[$userName] = $totalBalance; 
           $count = $count +1;
        }
     
        return view('home')->with('userBalance', $userBalance);

    }
}
