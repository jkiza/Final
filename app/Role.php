<?php
# @Author: izzy
# @Date:   2019-12-06T13:16:59+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-06T13:52:05+00:00




namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

  public function users()
  {
    return $this->belongsToMany('App\User', 'user_role');

  }

}
