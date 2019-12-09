@extends('layouts.app')
# @Author: izzy
# @Date:   2019-12-06T20:30:37+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-09T10:57:00+00:00


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Doctors
                  <a href="{{ route('admin.doctors.create') }}" class="btn btn-primary float-right">Add</a>
                </div>
                <div class="card-body">
                  @if (count($doctors) === 0)
                  <p>There are no doctors to display.</p>
                  @else
                  <table id="table-doctors" class="table table-hover">
                    <thead>
                      <th>Address</th>
                      <th>Phone number</th>
                      <th>Start date</th>
                      <th>User ID</th>
                    </thead>
                    <tbody>
                      @foreach ($doctors as $doctor)
                      <tr data id="{{ $doctor->id }}">
                        <td>{{ $doctor->address }}</td>
                        <td>{{ $doctor->phone }}</td>
                        <td>{{ $doctor->start }}</td>
                        <td>{{ $doctor->user_id }}</td>
                        <td>
                          <a href="{{ route('admin.doctors.show', $doctor->id) }}" class="btn btn-default">View</a>
                          <a href="{{ route('admin.doctors.edit', $doctor->id) }}" class="btn btn-warning">Edit</a>
                          <form style="display:inline-block" method="POST" action="{{ route('admin.doctors.destroy', $doctor->id) }}">
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
