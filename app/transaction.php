<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    protected $fillable = [
        'user_id', 'date', 'balance', 'hour', 'created_at', 'isFailed'
    ];


    public function user()
    {
        return $this->belongsTo(User::class,'user_id')->get();
    }
}
