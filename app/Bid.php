<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    protected $fillable = [

        'post_id',
        'is_active',
        'author',
        'email',
        'body',
        'bid'
        
        ];

    public function post(){
        return $this->belongsTo('App\Post');
    }

}
