@extends('backEnd.master')
@section('title')
  Digital Doctor

@endsection

@section('body')

  <div class="container">
    <div class="col-sm-12">
    <h2>Prescription List</h2>

    <table class="table">
      <thead>
<tr>
<th>Doctor Name</th>
<th>Doctor Email</th>
<th>Diseases Title</th>
<th>Action</th>

  <tr>
      </thead>
      <tbody>

        @forelse ($myPrescription as $value)

<tr>
<?php

$doctor = DB::table('users')->where('id',$value->doctorId)->first();

?>

  <td>{{$doctor->name}}</td>
  <td>{{$doctor->email}}</td>
  <td>{{$value->diseases_title}}</td>
  <td><a class="btn btn-warning" href="{{url('print/prescription/'.$value->id)}}">Print</a></td>

</tr>

      @empty
        <tr><td colspan="7">No Patient Found</td></tr>

      @endforelse
      </tbody>
    </table>
  </div>
  </div>
  @endsection
