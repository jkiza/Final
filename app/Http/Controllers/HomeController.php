<?php
# @Author: izzy
# @Date:   2019-12-06T13:08:50+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-06T15:06:26+00:00




namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $home = 'patient.home';

        if ($user->hasRole('admin')) {

          $home = 'admin.home';
        }
        else if ($user->hasRole('doctor')) {

          $home = 'doctor.home';
        }
        else {

          $home = 'patient.home';
        }
        return redirect()->route($home);
    }
}
