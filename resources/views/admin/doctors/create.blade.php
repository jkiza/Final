@extends('layouts.app')
# @Author: izzy
# @Date:   2019-12-06T20:30:37+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-15T21:04:57+00:00


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-mid-offset-2">
            <div class="card">
                <div class="card-header">Add new doctor</div>
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
                    <form method="POST" action="{{ route('admin.doctors.store') }}">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div class="form-group">
                        <label for="user_id">User ID</label>
                        <input type="text" class="form-control" id="user_id" name="user_id" value="{{ old('user_id') }}"/>
                      </div>
                      <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}"/>
                      </div>
                      <div class="form-group">
                        <label for="phone">Phone number</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}"/>
                      </div>
                      <div class="form-group">
                        <label for="start">Start date</label>
                        <input type="text" class="form-control" id="start" name="start" value="{{ old('start') }}"/>
                      </div>
                      <a href="{{ route('admin.doctors.index') }}" class="btn btn-link">Cancel</a>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
