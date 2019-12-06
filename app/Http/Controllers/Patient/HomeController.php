<?php
# @Author: izzy
# @Date:   2019-12-06T14:10:43+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-06T19:24:56+00:00




namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('role:patient');
  }

  public function index()
  {
    return view('patient.home');
  }
}
