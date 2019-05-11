<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use App\PatientProfile;
use App\ePrescription;
use App\User;
use Illuminate\Support\Facades\Auth;
use PDF;
use DB;
class UserDashBoardController extends Controller
{
    public function dashboard(){


return view('backEnd.user.index');


    }

    public function doctorList(){

      $doctors = DB::table('users')
      ->join('doctor_profiles','users.id','doctor_profiles.doctorId')
      ->select('users.*','doctor_profiles.*')
      ->where('users.user_Type','doctor')
      ->paginate(12);

      //dd($doctors);

      return view('backEnd.user.doctorList',compact('doctors'));


    }


    public function doctorProfile($id){
      $doctor = DB::table('users')
      ->join('doctor_profiles','users.id','doctor_profiles.doctorId')
      ->select('users.*','doctor_profiles.*')
      ->where('users.user_Type','doctor')
      ->where('doctor_profiles.doctorId',$id)
      ->first();

return view('backEnd.user.doctorProfile',compact('doctor'));


    }

    public function appointment($id){


$appointment = new Appointment();
$appointment->userId = Auth::user()->id;
$appointment->doctorId = $id;
$appointment->status = 0;
$appointment->save();

return redirect()->back()->with('message','Your Appointment Are  Create. ');



    }
    public function appointmentList(){
    //  return '1';

$myAppointment = Appointment::where('userId',Auth::user()->id)->get();
//dd($myAppointment);

return view('backEnd.user.appointmentList',compact('myAppointment'));

    }

public function profileComplete(){

return view('backEnd.user.profile.profile');


}
public function postprofileComplete(Request $request){

$user = PatientProfile::create([

'age' => $request->age,
'sex' => $request->sex,
'height' => $request->height,
'weight' => $request->weight,
'blood' => $request->blood,
'diabetes' => $request->diabetes,
'presure' => $request->presure,
'userId' => Auth::user()->id,
'status'=> 1



]);

return redirect()->back();
}


public function myPrescription(){

$myPrescription= ePrescription::where('patientId',Auth::user()->id)->get();
//dd($myPrescription);
return view('backEnd.user.myPrescription',compact('myPrescription'));

}
public function printPrescription($id){


$report = ePrescription::where('id',$id)->first();

$info = DB::table('users')
->join('doctor_profiles','users.id','doctor_profiles.doctorId')
->where('users.id',$report->doctorId)
->first();
$user = DB::table('users')
->join('patient_profiles','users.id','patient_profiles.userId')
->where('users.id',$report->patientId)
->first();



  $pdf = PDF::loadView('backEnd.user.prescription.pdf',compact('info','report','user'));

               return $pdf->stream('Prescription.pdf');

}



}
