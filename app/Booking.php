<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable =[
        // 'user_id',
        'title',
        'name',
        'phno',
        'email',
        'start',
        'end',
        'price',
        'noofpeople',
        'total',
        'content',
        'bookable_id'
        // 'bookable_type'
    ];

    public function bookable(){
        return $this->morphTo();
    }

    // public function user()
    // {
    //     return $this->belongsTo('App\User', 'user_id', 'id');
    // }

}
