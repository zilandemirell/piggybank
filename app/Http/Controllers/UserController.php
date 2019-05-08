<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { //hata mesajları ve view kısmı eklenecek
      //hata varsa aynı sayfaya geri dönecek yoksa login sayfasına gidecek

      if(validator()->fails){
        return Redirect::to('user/create'); //errorlar ile birlikte
      }
      else{
        //kaydedilecek ve login sayfasına gidilecek (ya da arada kaydedildi sayfası oluşturulabilir)
        $user= new User;
        $user->name = $request->input('name');
        $user->surname = $request->input('email');
        $user->password = $request->input('password');
        $user->isParent = $request->input('isParent');
        $user->save();
        return Redirect::to('login');
      }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          //profil bilgilerini gösterecek bir sayfa olabilir buraya eklenir
          $user = User::find($id);
          return view('userPage')->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //bu fonksiyon update ile çalışır
     public function edit(User $user)
    {   
        $user = Auth::user();
        return view('user.edit', compact('user'));
    }

    public function update(User $user)
    { 
        $this->validate(request(), [
            'name' => 'required',
            //'email' => 'required|email|unique:users',
            //'password' => 'required|min:6|confirmed'
        ]);

        $user->name = request('name');
        $user->email = request('email');
        //$user->password = bcrypt(request('password'));

        $user->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //hesabı kaldır kısmı olabilir
        $user = User::find($id);
        $user->delete();
        return Redirect::to('login');
    }
}
