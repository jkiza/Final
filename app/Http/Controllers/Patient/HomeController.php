<?php
# @Author: izzy
# @Date:   2019-12-06T14:10:43+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-06T19:24:56+00:00




namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Patient;
use Auth;
class HomeController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('role:patient');
  }

  public function index()
  {
    $user = User::findOrFail(Auth::id());
    $patient = Patient::findOrFail($user->patient->id);
    return view('patient.home')->with([
              
        'user' => $user,
        'patient' => $patient

    ]);
  }
}
