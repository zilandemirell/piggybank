<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{

    public function User()
    {
        return $this->belongsTo('User','user_id');
    }
}
