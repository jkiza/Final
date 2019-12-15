@extends('layouts.app')
# @Author: izzy
# @Date:   2019-12-06T14:08:59+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-15T21:46:25+00:00



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome, {{ Auth::user()->name }}. You're logged in as a patient.

                    <table id="table-patientHome" class="table table-hover">
                      <tbody>
                        <br/>
                        <tr>
                          <td>E-mail:</td>
                          <td>{{ $patient->user->email }}</td>
                        </tr>
                        <tr>
                          <td>Address:</td>
                          <td>{{ $patient->address }}</td>
                        </tr>
                        <tr>
                          <td>Phone Number:</td>
                          <td>{{ $patient->phone }}</td>
                        </tr>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
