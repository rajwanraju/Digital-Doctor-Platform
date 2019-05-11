@extends('backEnd.master')
@section('title')
  Digital Doctor

@endsection

@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Profile</div>

                <div class="card-body" >
                   
<table class="table table-dark">
    <tr>
    <th class="text-center">Name</th>
    <td class="text-center">{{Auth::user()->name}}</td>
</tr>

 <tr>
    <th class="text-center">Email</th>
    <td class="text-center">{{Auth::user()->email}}</td>
</tr>

 <tr>
    <th class="text-center">User Type</th>
    <td class="text-center">{{Auth::user()->user_Type}}</td>
</tr>


</table>
            </div>
        </div>
    </div>
</div>
@endsection
