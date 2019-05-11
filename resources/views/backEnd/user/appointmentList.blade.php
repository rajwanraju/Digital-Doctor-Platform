@extends('backEnd.master')
@section('title')
  Digital Doctor

@endsection

@section('body')
  <style>


  body{
    background: #eee;
}
span{
    font-size:15px;
}
a{
  text-decoration:none;
  color: #0062cc;
  border-bottom:2px solid #0062cc;
}
.box{
    padding:20px 0px;
}

.box-part{
    background:#FFF;
    border-radius:0;
    padding:20px 5px;
    margin:10px 0px;
}
.text{
    margin:10px 0px;
}

.fa{
     color:#4183D7;
}</style>

  <div class="box">
    <h2 class="text-center">My Appointment List</h2>
       	<div class="row">

          <table class="table">
            <thead>
        <tr>
        <th>Doctor Name</th>
        <th>Doctor Email</th>
        <th>Appointment Date</th>
        <th>Status</th>

        <tr>
            </thead>
            <tbody>

              @forelse ($myAppointment as $value)

        <tr>
<?php

$doctor = \App\User::where('id',$value->doctorId)->first();

 ?>

        <td>{{$doctor->name}}</td>
        <td>{{$doctor->email}}</td>
        <td>{{$value->created_at}}</td>
        <td>{{$value->status==1?'Appointment Done': 'Waiting'}}</td>

        </tr>

            @empty
              <tr><td colspan="7">No Appointment Found</td></tr>

            @endforelse
            </tbody>
          </table>
  </div>
  </div>
  @endsection
