@extends('backEnd.master')
@section('title')
  Digital Doctor

@endsection

@section('body')

  <div class="container">
    <div class="col-sm-offset-2 col-sm-10">
    <h2>Appointment List</h2>

    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($appointment as $value)
<?php  


$data = \App\PatientProfile::where('userId',$value->userId)->first();


  ?>

        <tr>
          <td>{{$value->name}}</td>
          <td>{{$value->email}}</td>
      @if(!empty($data))
          <td>{{$data->sex}}</td>
          <td>{{$data->age}}</td>
          <td>{{$data->presure}}</td>
          <td>{{$data->blood}}</td>
          <td>{{$data->diabetes}}</td>

      @if($data->status == 0)
          <td><a href="{{url('my/appointment/'.$value->userId)}}" class="btn btn-success">Appointment</a></td>
          @else
         <td> <span class="text-warning">Aleady Appointed</span></td>
        @endif
        @endif
        </tr>
      @empty
        <tr><td colspan="7">No Appointment</td></tr>

      @endforelse
      </tbody>
    </table>
  </div>
  </div>
  @endsection
