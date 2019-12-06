<?php
# @Author: izzy
# @Date:   2019-12-06T17:06:32+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-06T17:28:06+00:00




namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
