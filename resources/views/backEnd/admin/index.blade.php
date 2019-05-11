@extends('backEnd.master')
@section('title')
  Digital Doctor

@endsection

@section('body')
<br>
<br>
<br>
<br>
<br>
<br>

<div class="row">
<div class="col-sm-4">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h2 class="card-title">Total Doctors</h2>
    <h2 class="text-success text-center">{{$doctors}}</h2>
    
   
  </div>
</div>
</div>



<div class="col-sm-4">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h2 class="card-title">Total Patient </h2>
    <h2 class="text-success text-center">{{$users}}</h2>
    
   
  </div>
</div>
</div>


<div class="col-sm-4">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h2 class="card-title"> Appointments</h2>
    <h2 class="text-success text-center">{{$appointment}}</h2>
    
   
  </div>
</div>
</div>





</div>

  @endsection
