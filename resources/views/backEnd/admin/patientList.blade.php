@extends('backEnd.master')
@section('title')
  Digital Doctor

@endsection

@section('body')

  <div class="container">
    <div class="col-sm-offset-2 col-sm-10">
    <h2>Patient List</h2>
   
    <table class="table table-dark">
      <thead>
        <tr>
          <th>Patient Name</th>
          <th>Email</th>
          <th>Age</th>
          <th>Sex</th>
          <th>Blood Group</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $doctor)
        <tr>
          <td>{{$doctor->name}}</td>
          <td>{{$doctor->email}}</td>
          <td>{{$doctor->age}}</td>
          <td>{{$doctor->sex}}</td>
          <td>{{$doctor->blood}}</td>
        </tr>
@endforeach
      </tbody>
    </table>
  </div>
  {{$users->render()}}
  </div>
  @endsection
