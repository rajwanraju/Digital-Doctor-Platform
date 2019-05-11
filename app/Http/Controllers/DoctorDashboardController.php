<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use App\ePrescription;
use Illuminate\Support\Facades\Auth;
use DB;

class DoctorDashboardController extends Controller
{
    public function dashboard(){

return view('backEnd.doctor.index');
    }


    public function appointmentList(){
$appointment = DB::table('appointments')
->join('users','appointments.userId','users.id')
->join('patient_profiles','appointments.userId','patient_profiles.userId')
->select('appointments.*','users.name','users.email','patient_profiles.*')
->where('appointments.doctorId',Auth::user()->id)
->where('appointments.status',1)
->get();
return view('backEnd.doctor.patientList',compact('appointment'));
    }


public function prescription($id){


  $appointment = DB::table('appointments')
  ->join('users','appointments.userId','users.id')
  ->join('patient_profiles','appointments.userId','patient_profiles.userId')
  ->select('appointments.*','users.name','users.email','patient_profiles.age','patient_profiles.sex','patient_profiles.blood','patient_profiles.presure','patient_profiles.height','patient_profiles.weight','patient_profiles.diabetes')
  ->where('appointments.userId',$id)
  ->first();


  return view('backEnd.doctor.prescription.prescription',compact('appointment'));

}


public function prescriptionStore(Request $request){

//return $request->all();



$drug1 = $request->drug_type1." . ".$request->drug1;
$drug2 = $request->drug_type2." . ".$request->drug2;
$drug3 = $request->drug_type3." . ".$request->drug3;
$drug4 = $request->drug_type4." . ".$request->drug4;
$drug5 = $request->drug_type5." . ".$request->drug5;
$drug6 = $request->drug_type6." . ".$request->drug6;
$prescription = DB::table('e_prescriptions')->insert([

'drug1' => $drug1,
'rule1' => $request->rule1,

'drug2' => $drug2,
'rule2' => $request->rule2,

'drug3' => $drug3,
'rule3' => $request->rule3,

'drug4' => $drug4,
'rule4' => $request->rule4,

'drug5' => $drug5,
'rule5' => $request->rule5,

'drug6' => $drug6,
'rule6' => $request->rule6,

'patientId' => $request->userId,
'doctorId' => Auth::user()->id,
'diseases_title' =>$request->title,


]);

return redirect('/my/prescription')->with('message','Prescription Published');


}


public function myPrescription(){

$myPrescription= ePrescription::where('doctorId',Auth::user()->id)->get();
//dd($myPrescription);
return view('backEnd.a',compact('myPrescription'));

}





public function appointment(){

$appointment = DB::table('appointments')
->join('users','appointments.userId','users.id')
->select('appointments.*','users.name','users.email')
->where('appointments.doctorId',Auth::user()->id)
->get();
//dd($appointment);
return view('backEnd.doctor.appointmentList',compact('appointment'));
}

public function appointmentUser($id){

//  return $id;

$user = Appointment::where('userId',$id)->first();
$user->status = 1;
$user->save();
return redirect()->back()->with('message','Appointment Done');



}

}
