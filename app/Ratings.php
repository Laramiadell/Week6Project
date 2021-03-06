<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    protected $fillable = [
        'user_id', 'post_id', 'rating',
    ];
    public function posts(){
        return $this->hasMany('App\Post');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
