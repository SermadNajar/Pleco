<?php

namespace App;

use App\Bid;
use App\User;
use App\Photo;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [

    'user_id',
    'category_id',
    'photo_id',
    'title',
    'body',
    'price',
    
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function photo(){
        return $this->belongsTo('App\Photo');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function bids(){
        return $this->hasMany('App\Bid');
    }
}
