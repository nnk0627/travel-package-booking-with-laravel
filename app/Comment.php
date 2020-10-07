<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable =[
        'user_id',
        'content',
        'commendable_id',
        'commendable_type'
    ];

    public function commendable(){
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
