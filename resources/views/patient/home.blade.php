@extends('layouts.app')
# @Author: izzy
# @Date:   2019-12-06T14:08:59+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-06T19:28:06+00:00



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

                    <table id="table-books" >
                    <tr>
                            <td>Name:  </td>
                            <td>{{$patient->user->name}}</td>
                            </tr>
                            <td>Address 1:  </td>
                            <td>{{$patient->address}}</td>
                            </tr>
                            <tr>
                            <td>Phone Number:  </td>
                            <td>{{$patient->phone}}</td>
                            </tr>
                            <td>Insurance:  </td>
                            <td>{{$patient->insurnace}}</td>
                            </tr>
                            <td>Company:  </td>
                            <td>{{$patient->company}}</td>
                            </tr>
                            <td>Policy:  </td>
                            <td>{{$patient->policy}}</td>
                            </tr>
                            <tr>
                            <td>Email:  </td>
                            <td>{{$patient->user->email}}</td>
                            </tr>
                    </tr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
