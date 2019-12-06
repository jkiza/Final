<?php
# @Author: izzy
# @Date:   2019-12-06T14:10:51+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-06T15:16:18+00:00




namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
      $this->middleware('role:doctor');
    }

    public function index()
    {
      return view('doctor.home');
    }
}
