@extends('layouts.app')
# @Author: izzy
# @Date:   2019-11-21T17:28:39+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-15T21:49:47+00:00



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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
