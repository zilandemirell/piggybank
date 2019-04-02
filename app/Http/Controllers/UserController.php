<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App/User;

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
        $user->name = Input::get('name');
        $user->surname = Input::get('surname');
        $user->password = Input::get('password');
        $user->isParent = Input::get('isParent');
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
    public function edit($id)
    {
      //username name password değişimlerinde kullanılabilir
      //önce user id ile ilişkili user çekilir
      $user = User::find($id);
 //sonra view içinde gösterilir
      return View::make('user.edit')->with('user',$user);
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
      if(validator()->fails){
        return Redirect::to('user/create'); //errorlar ile birlikte
      }
      else{
        $user= new User;
        $user->name = Input::get('name');
        $user->surname = Input::get('surname');
        $user->password = Input::get('password');
        $user->isParent = Input::get('isParent');
        $user->save();
        //user için oluşturulmuş bir page varsa oan yönlendirilir
        return Redirect::to('userpage');
      }
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
