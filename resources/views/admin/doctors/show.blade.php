@extends('layouts.app')
# @Author: izzy
# @Date:   2019-12-06T20:30:37+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-15T20:50:26+00:00


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-mid-offset-2">
            <div class="card">
                <div class="card-header">
                  {{ $doctor->address }}
                </div>
                <div class="card-body">
                  <table id="table-doctors" class="table table-hover">
                    <tbody>
                      <tr>
                        <td>User ID</td>
                        <td>{{ $doctor->user_id }}</td>
                      </tr>
                      <tr>
                        <td>Name</td>
                        <td>{{ $doctor->user->name }}</td>
                      </tr>
                      <tr>
                        <td>E-mail</td>
                        <td>{{ $doctor->user->email }}</td>
                      </tr>
                      <tr>
                        <td>Address</td>
                        <td>{{ $doctor->address }}</td>
                      </tr>
                      <tr>
                        <td>Phone number</td>
                        <td>{{ $doctor->phone }}</td>
                      </tr>
                      <tr>
                        <td>Start date</td>
                        <td>{{ $doctor->start }}</td>
                      </tr>
                    </tbody>
                  </table>
                  <a href="{{ route('admin.doctors.index') }}" class="btn btn-default">Back</a>
                  <a href="{{ route('admin.doctors.edit', $doctor->id) }}" class="btn btn-warning">Edit</a>
                  <form style="display:inline-block" method="POST" action="{{ route('admin.doctors.destroy', $doctor->id) }}">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="form-control btn btn-danger">Delete</>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
