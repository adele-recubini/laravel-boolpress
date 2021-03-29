<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public funciotn author(){

        return $this->belongsTo('App\Author');
    }
}
