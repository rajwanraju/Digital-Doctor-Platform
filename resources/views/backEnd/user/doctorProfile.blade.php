




@extends('backEnd.master')
@section('title')
  Digital Doctor

@endsection

@section('body')


<style>
body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>
<h3 class="text-center text-success">{{ Session::get('message') }}</h3>
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="{{asset($doctor->image)}}" alt=""/>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        {{$doctor->name}}
                                    </h5>
                                    <h6>
                                      {{$doctor->workPlace}}
                                    </h6>


                        </div>
                    </div>

                </div>
                <div class="row">
                     <div class="col-md-4">
                         <div class="profile-work">
                             <br>
                             <?php

$appointment = \App\Appointment::where('userId',Auth::user()->id)->where('doctorId',$doctor->doctorId)->first();
                              ?>
                             @if($appointment == null)
                             <a class="btn btn-warning" href="{{url('appointment/'.$doctor->doctorId)}}">Appointment</a><br/>
@endif
                         </div>
                     </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$doctor->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$doctor->email}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Speciality</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$doctor->Speciality}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Skill</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$doctor->skill}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Graduation</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$doctor->graduation}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>graduationFrom</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$doctor->graduationFrom}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>post Graduation</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$doctor->post_graduation}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>post_graduationFrom</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$doctor->post_graduationFrom}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>workPlace</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$doctor->workPlace}}</p>
                                            </div>
                                        </div>

                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>

@endsection
