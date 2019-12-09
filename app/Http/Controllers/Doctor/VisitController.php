<?php
# @Author: izzy
# @Date:   2019-12-06T20:24:15+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-09T11:56:12+00:00




namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisitController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $visits = Visit::all();

      return view('doctor.visits.index')->with([
        'visits' => $visits
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
