<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuthorDetail extends Model
{
    //colleghiamo le due tabelle one to one
    public function author(){

        return $this->belongsTo('App\Author');
    }


}
