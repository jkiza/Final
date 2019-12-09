@extends('layouts.app')
# @Author: izzy
# @Date:   2019-12-06T20:30:37+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-09T10:53:48+00:00


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-mid-offset-2">
            <div class="card">
                <div class="card-header">Add new patient</div>
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
                    <form method="POST" action="{{ route('admin.patients.store') }}">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}"/>
                      </div>
                      <div class="form-group">
                        <label for="phone">Phone number</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}"/>
                      </div>
                      <div class="form-group">
                        <label for="insurance">Insurance</label>
                        <input type="text" class="form-control" id="insurance" name="insurance" value="{{ old('insurance') }}"/>
                      </div>
                      <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" class="form-control" id="company" name="company" value="{{ old('company') }}"/>
                      </div>
                      <div class="form-group">
                        <label for="policy">Policy</label>
                        <input type="text" class="form-control" id="policy" name="policy" value="{{ old('policy') }}"/>
                      </div>
                      <div class="form-group">
                        <label for="user_id">User ID</label>
                        <input type="text" class="form-control" id="user_id" name="user_id" value="{{ old('user_id') }}"/>
                      </div>
                      <a href="{{ route('admin.patients.index') }}" class="btn btn-link">Cancel</a>
                      <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
