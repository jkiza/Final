@extends('layouts.app')
# @Author: izzy
# @Date:   2019-12-06T20:30:37+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-10T11:29:05+00:00


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Patients
                  <a href="{{ route('admin.patients.create') }}" class="btn btn-primary float-right">Add</a>
                </div>
                <div class="card-body">
                  @if (count($patients) === 0)
                  <p>There are no patients to display.</p>
                  @else
                  <table id="table-patients" class="table table-hover">
                    <thead>
                      <th>Name</th>
                      <th>E-mail</th>
                      <th>Address</th>
                      <th>Phone number</th>
                      <th>Insurance</th>
                      <th>Company</th>
                      <th>Policy</th>
                    </thead>
                    <tbody>
                      @foreach ($patients as $patient)
                      <tr data id="{{ $patient->id }}">
                        <td>{{ $patient->user->name }}</td>
                        <td>{{ $patient->user->email }}</td>
                        <td>{{ $patient->address }}</td>
                        <td>{{ $patient->phone }}</td>
                        <td>{{ $patient->insurance }}</td>
                        <td>{{ $patient->company }}</td>
                        <td>{{ $patient->policy }}</td>
                        <td>
                          <a href="{{ route('admin.patients.show', $patient->id) }}" class="btn btn-default">View</a>
                          <a href="{{ route('admin.patients.edit', $patient->id) }}" class="btn btn-warning">Edit</a>
                          <form style="display:inline-block" method="POST" action="{{ route('admin.patients.destroy', $patient->id) }}">
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
