<?php
# @Author: izzy
# @Date:   2019-12-06T14:10:35+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-06T15:17:32+00:00




namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
      $this->middleware('role:admin');
    }

    public function index()
    {
      return view('admin.home');
    }
}
