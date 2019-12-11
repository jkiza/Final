<?php
# @Author: izzy
# @Date:   2019-12-06T14:10:51+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-06T15:16:18+00:00




namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Doctor;
use Auth;
class HomeController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
      $this->middleware('role:doctor');
    }

    public function index()
    {
      $user = User::findOrFail(Auth::id());
      $doctor = Doctor::findOrFail($user->doctor->id);

      return view('doctor.home')->with([
        'doctor' => $doctor
      ]);
    }
}
