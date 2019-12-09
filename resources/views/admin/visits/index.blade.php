@extends('layouts.app')
# @Author: izzy
# @Date:   2019-12-06T20:30:37+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-09T10:56:16+00:00


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Visits
                  <a href="{{ route('admin.visits.create') }}" class="btn btn-primary float-right">Add</a>
                </div>
                <div class="card-body">
                  @if (count($visits) === 0)
                  <p>There are no visits to display.</p>
                  @else
                  <table id="table-visits" class="table table-hover">
                    <thead>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Duration</th>
                      <th>Cost</th>
                      <th>Doctor ID</th>
                      <th>Patient ID</th>
                    </thead>
                    <tbody>
                      @foreach ($visits as $visit)
                      <tr data id="{{ $visit->id }}">
                        <td>{{ $visit->date }}</td>
                        <td>{{ $visit->time }}</td>
                        <td>{{ $visit->duration }}</td>
                        <td>{{ $visit->cost }}</td>
                        <td>{{ $visit->doctor_id }}</td>
                        <td>{{ $visit->patient_id }}</td>
                        <td>
                          <a href="{{ route('admin.visits.show', $visit->id) }}" class="btn btn-default">View</a>
                          <a href="{{ route('admin.visits.edit', $visit->id) }}" class="btn btn-warning">Edit</a>
                          <form style="display:inline-block" method="POST" action="{{ route('admin.visits.destroy', $visit->id) }}">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="form-control btn btn-danger">Delete</>
                          </form>
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
