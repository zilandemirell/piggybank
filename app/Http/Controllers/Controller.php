<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  /* public function arrayfk($keyArray, $valueArray) {
        if(is_array($keyArray)) {
            foreach($keyArray as $key => $value) {
                $newArray[$value] = $valueArray[$key];
            }
        }
        return $newArray;
    }

    public function turninto($array,$value,$setkey){

        for ($i=0; $i<sizeof($array); $i++){
            $keys[] = $array[$i][$setkey];
            $deger[]=$array[$i][$value];
            $sonuc = $this->arrayfk($keys,$deger);

        }

        return ($sonuc);
    }*/
    public function user($id){

        $who = User::select('name','id')->where("id","=",$id)->get();
        return $who;
    }



}
