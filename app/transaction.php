<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class,'user_id')->get();
    }
}
