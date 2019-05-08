<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class profileChildController extends Controller
{
    
    public function index()
    {
        $user= Auth::user();
        return view("profileChild")->with("loggedUser", $user);
    }
}
