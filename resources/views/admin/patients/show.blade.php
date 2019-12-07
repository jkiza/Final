@extends('layouts.app')
# @Author: izzy
# @Date:   2019-12-06T20:30:37+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-07T15:19:49+00:00


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-mid-offset-2">
            <div class="card">
                <div class="card-header">
                  {{ $patient->address }}
                </div>
                <div class="card-body">
                  <table id="table-patients" class="table table-hover">
                    <tbody>
                      <tr>
                        <td>Address</td>
                        <td>{{ $patient->address }}</td>
                      </tr>
                      <tr>
                        <td>Phone number</td>
                        <td>{{ $patient->phone }}</td>
                      </tr>
                      <tr>
                        <td>Insurance</td>
                        <td>{{ $patient->insurance }}</td>
                      </tr>
                      <tr>
                        <td>Company</td>
                        <td>{{ $patient->company }}</td>
                      </tr>
                      <tr>
                        <td>Policy</td>
                        <td>{{ $patient->policy }}</td>
                      </tr>
                    </tbody>
                  </table>
                  <a href="{{ route('admin.patients.index') }}" class="btn btn-default">Back</a>
                  <a href="{{ route('admin.patients.edit', $patient->id) }}" class="btn btn-warning">Edit</a>
                  <form style="display:inline-block" method="POST" action="{{ route('admin.patients.destroy', $patient->id) }}">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ 'csfr_token()' }}">
                    <button type="submit" class="form-control btn btn-danger">Delete</>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
