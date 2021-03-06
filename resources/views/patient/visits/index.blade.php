@extends('layouts.app')
# @Author: izzy
# @Date:   2019-12-06T20:30:37+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-15T22:01:04+00:00


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                  @if (count($visits) === 0)
                  <p>There are no visits to display.</p>
                  @else
                  <table id="table-visits" class="table table-hover">
                    <thead>
                      <th>Doctor</th>
                      <th>Patient</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Duration</th>
                      <th>Cost</th>
                    </thead>
                    <tbody>
                      @foreach ($visits as $visit)
                      <tr data id="{{ $visit->id }}">
                        <td>{{ $visit->doctor_id }}</td>
                        <td>{{ $visit->patient_id }}</td>
                        <td>{{ $visit->date }}</td>
                        <td>{{ $visit->time }}</td>
                        <td>{{ $visit->duration }}</td>
                        <td>{{ $visit->cost }}</td>
                        <td>
                          <a href="{{ route('patient.visits.show', $visit->id) }}" class="btn btn-default">View</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
