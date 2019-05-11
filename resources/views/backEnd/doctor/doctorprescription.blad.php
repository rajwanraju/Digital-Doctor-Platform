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
          <th>Name</th>
          <th>Email</th>
          <th>Sex</th>
          <th>Age</th>
          <th>Presure</th>
          <th>Blood Group</th>
          <th>Diabetes</th>
          <th>Drugs1</th>
          <th>Drugs2</th>
          <th>Drugs3</th>
          <th>Drugs4</th>
          <th>Drugs5</th>
          <th>Drugs6</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($myPrescription as  $value)

<?php

$appointment = DB::table('appointments')
->join('users','appointments.userId','users.id')
->join('patient_profiles','appointments.userId','patient_profiles.userId')
->select('appointments.*','users.name','users.email','patient_profiles.*')
->where('appointments.doctorId',$value->userId)
->first();


 ?>
        <tr>
          <td>{{$appointment->name}}</td>
          <td>{{$appointment->email}}</td>
          <td>{{$appointment->sex}}</td>
          <td>{{$appointment->age}}</td>
          <td>{{$appointment->presure}}</td>
          <td>{{$appointment->blood}}</td>
          <td>{{$appointment->diabetes}}</td>
          <td>{{$value->drug1}}</td>
          <td>{{$value->drug2}}</td>
          <td>{{$value->drug3}}</td>
          <td>{{$value->drug4}}</td>
          <td>{{$value->drug5}}</td>
          <td>{{$value->drug6}}</td>

</tr>
      @empty
        <tr><td colspan="7">No Patient Found</td></tr>

      @endforelse
      </tbody>
    </table>
  </div>
  </div>
  @endsection
