<?php
# @Author: izzy
# @Date:   2019-12-06T10:49:24+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-06T12:28:57+00:00




namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
      $this->middleware('role:user');
    }

    public function index()
    {
      return view('user.home');
    }

}
