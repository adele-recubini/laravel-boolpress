<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
  //colleghiamo le due tabelle one author  to one detail
  public function detail(){

    return $this->hasOne('App\AuthorDetail');

  }

  //colleghiamo l autor al post

  public function posts(){
      return $this->hasMany('App\Post');
  }




}
