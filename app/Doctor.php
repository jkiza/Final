<?php
# @Author: izzy
# @Date:   2019-12-06T17:07:15+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-06T17:27:45+00:00




namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
