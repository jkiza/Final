<?php
# @Author: izzy
# @Date:   2019-12-06T19:40:28+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-06T20:16:09+00:00




namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
  public function visit()
  {
    return $this->belongsTo('App\Visit');
  }
}
