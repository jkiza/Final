<?php
# @Author: izzy
# @Date:   2019-12-06T20:24:15+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-09T11:56:12+00:00




namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Visit;
use App\Patient;
use App\Doctor;
class VisitController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('role:doctor');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $visits = Visit::all();
      $doctors = Doctor::all();
      $patient = Patient::all();
      return view('doctor.visits.index')->with([
        'visits' => $visits,
        'doctors' => $doctors,
        'patients' => $patient
      ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $visit = Visit::findOrFail($id);
      return view('doctor.visits.show')->with([
        'visit' => $visit
      ]);
    }

}
