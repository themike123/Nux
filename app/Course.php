<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  protected $fillable = [
    'title', 'status', 'score', 'description', 'image'
  ];

  public function users()
  {
    return $this->belongsToMany('App\User')->withPivot('start', 'end')->withTimestamps();    
    //return $this->belongsToMany('App\User')->using('App\UserRole');
  }

}
