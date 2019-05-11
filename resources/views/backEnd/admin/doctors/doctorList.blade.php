@extends('backEnd.master')
@section('title')
  Digital Doctor

@endsection

@section('body')

  <div class="container">
    <div class="col-sm-offset-2 col-sm-10">
    <h2>Doctor List</h2>
    <a class="btn btn-success" href="{{url('create/doctor')}}"> Add New Doctor</a>
    <br>
    <br>
    <br>
    <table class="table table-dark">
      <thead>
        <tr>
          <th>Doctor Name</th>
          <th>Email</th>
          <th>Designation</th>
          <th>Speciality</th>
          <th>Work Place</th>
        </tr>
      </thead>
      <tbody>
        @foreach($doctors as $doctor)
        <tr>
          <td>{{$doctor->name}}</td>
          <td>{{$doctor->email}}</td>
          <td>{{$doctor->designation}}</td>
          <td>{{$doctor->Speciality}}</td>
          <td>{{$doctor->workPlace}}</td>
        </tr>
@endforeach
      </tbody>
    </table>
  </div>
  </div>
  @endsection
