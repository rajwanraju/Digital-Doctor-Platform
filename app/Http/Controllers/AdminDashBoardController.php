<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use DB;

class AdminDashBoardController extends Controller
{
  public function adminDashboard(){


    $doctors = DB::table('users')->where('user_Type','doctor')->count();
    $users = DB::table('users')->where('user_Type','user')->count();
    $appointment = DB::table('appointments')->count();

return view('backEnd.admin.index',compact('doctors','users','appointment'));

  }
  public function doctorList(){


         $doctors = DB::table('users')
      ->join('doctor_profiles','users.id','doctor_profiles.doctorId')
      ->select('users.*','doctor_profiles.*')
      ->where('users.user_Type','doctor')
      ->get();

return view('backEnd.admin.doctors.doctorList',compact('doctors'));

  }  
  public function doctorAdd(){

return view('backEnd.admin.doctors.addDoctor');

  }
  public function registerDoctor(Request $request){

//return $request->all();

$this->validate($request,['name'=>'required','email'=>'required','password'=>'required'
		]);

$user = User::create([

  'name'=>$request->name,
  'email'=>$request->email,
  'user_Type'=>'doctor',
  'password'=> Hash::make($request->password)


]);


return redirect('/doctors')->with('message','New Doctor Added');

  }



public function patientList(){


    $users = DB::table('users')
      ->join('patient_profiles','users.id','patient_profiles.userId')
      ->select('users.*','patient_profiles.*')
      ->where('users.user_Type','user')
      ->paginate(10);

return view('backEnd.admin.patientList',compact('users'));

  }









}
