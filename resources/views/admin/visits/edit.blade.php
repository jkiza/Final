@extends('layouts.app')
# @Author: izzy
# @Date:   2019-12-06T20:30:37+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-09T10:56:21+00:00


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-mid-offset-2">
            <div class="card">
                <div class="card-header">Edit visit</div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                          @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="POST" action="{{ route('admin.visits.update', $visit->id) }}">
                      <input type="hidden" name="_method" value="PUT">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div class="form-group">
                        <label for="date">Date</label>
                        <input type="text" class="form-control" id="date" name="date" value="{{ old('date', $visit->date) }}"/>
                      </div>
                      <div class="form-group">
                        <label for="time">Time</label>
                        <input type="text" class="form-control" id="time" name="time" value="{{ old('time', $visit->time) }}"/>
                      </div>
                      <div class="form-group">
                        <label for="duration">Duration</label>
                        <input type="text" class="form-control" id="duration" name="duration" value="{{ old('duration', $visit->duration) }}"/>
                      </div>
                      <div class="form-group">
                        <label for="cost">Cost</label>
                        <input type="text" class="form-control" id="cost" name="cost" value="{{ old('cost', $visit->cost) }}"/>
                      </div>
                      <div class="form-group">
                        <label for="doctor_id">Doctor ID</label>
                        <input type="text" class="form-control" id="doctor_id" name="doctor_id" value="{{ old('doctor_id', $visit->doctor_id) }}"/>
                      </div>
                      <div class="form-group">
                        <label for="patient_id">Patient ID</label>
                        <input type="text" class="form-control" id="patient_id" name="patient_id" value="{{ old('patient_id', $visit->patient_id) }}"/>
                      </div>
                      <a href="{{ route('admin.visits.index') }}" class="btn btn-link">Cancel</a>
                      <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
