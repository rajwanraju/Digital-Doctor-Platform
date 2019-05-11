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
    <h2 class="text-center">Doctor List</h2>
       	<div class="row">
@foreach ($doctors as $doctor)
  			    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

  					<div class="box-part text-center">

                        <img src="{{asset($doctor->image)}}" style="border-radius: 50%;"  width="128px" height="128px" alt="{{$doctor->name}}">

  						<div class="title">
  							<h4><a href="{{url('doctor/profile/'.$doctor->doctorId)}}">{{$doctor->name}}</a></h4>
  						</div>

  						<div class="text">
  							<span>{{$doctor->Speciality}}</span><br>
  							<span>{{$doctor->workPlace}}</span>
  						</div>

  					 </div>
  				</div>
@endforeach

  		</div>

      {{$doctors->render()}}

  </div>
  @endsection
