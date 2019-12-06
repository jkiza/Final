@extends('layouts.app')
# @Author: izzy
# @Date:   2019-11-21T17:28:39+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-06T22:04:42+00:00



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome</div>
                <div class="card-body">
                    Welcome to MedicalCentre.

                </br>
                First time here? Learn <a href="{{ route('about') }}">more information</a>.
                </br>
                <a href="{{ route('admin.doctors.index') }}">Doctors</a>
                </br>
                <a href="{{ route('admin.patients.index') }}">Patients</a>
                </br>
                <a href="{{ route('admin.visits.index') }}">Visits</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
