<?php
# @Author: izzy
# @Date:   2019-12-06T20:23:33+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-15T21:17:19+00:00




namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Patient;

class PatientController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
      $this->middleware('role:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $patients = Patient::all();

      return view('admin.patients.index')->with([
        'patients' => $patients
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'user_id' => 'required|alpha_num|max:3',
        'address' => 'required|max:191',
        'phone' => 'required|min:6|max:13',
        'insurance' => 'required|alpha_num|max:1',
        'company' => 'max:191',
        'policy' => 'max:191'
      ]);

      $patient = new Patient();
      $patient->user_id = $request->input('user_id');
      $patient->address = $request->input('address');
      $patient->phone = $request->input('phone');
      $patient->insurance = $request->input('insurance');
      $patient->company = $request->input('company');
      $patient->policy = $request->input('policy');
      $patient->save();

      return redirect()->route('admin.patients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $patient = Patient::findOrFail($id);
      return view('admin.patients.show')->with([
        'patient' => $patient
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $patient = Patient::findOrFail($id);
      return view('admin.patients.edit')->with([
        'patient' => $patient
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

      $patient = Patient::findOrFail($id);

      $request->validate([
        'user_id' => 'required|alpha_num|max:3',
        'address' => 'required|max:191',
        'phone' => 'required|min:6|max:13',
        'insurance' => 'required|alpha_num|max:1',
        'company' => 'max:191',
        'policy' => 'max:191'
      ]);

      $patient->user_id = $request->input('user_id');
      $patient->address = $request->input('address');
      $patient->phone = $request->input('phone');
      $patient->insurance = $request->input('insurance');
      $patient->company = $request->input('company');
      $patient->policy = $request->input('policy');
      $patient->save();

      return redirect()->route('admin.patients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $patient = Patient::findOrFail($id);
      $patient->delete();
      return redirect()->route('admin.patients.index');
    }
}
