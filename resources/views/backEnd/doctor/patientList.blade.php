@extends('backEnd.master')
@section('title')
  Digital Doctor

@endsection

@section('body')

  <div class="container">
    <div class="col-sm-offset-2 col-sm-10">
    <h2>Patient List</h2>

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
        </tr>
      </thead>
      <tbody>
        @forelse ($appointment as  $value)


        <tr>
          <td>{{$value->name}}</td>
          <td>{{$value->email}}</td>
          <td>{{$value->sex}}</td>
          <td>{{$value->age}}</td>
          <td>{{$value->presure}}</td>
          <td>{{$value->blood}}</td>
          <td>{{$value->diabetes}}</td>


        </tr>
      @empty
        <tr><td colspan="7">No Appointment</td></tr>

      @endforelse
      </tbody>
    </table>
  </div>
  </div>
  @endsection
