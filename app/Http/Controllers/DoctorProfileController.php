<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\DoctorProfile;
use Illuminate\Support\Facades\Input;

class DoctorProfileController extends Controller
{
    public function profileComplete(){


return view('backEnd.doctor.profile.create');


    }
    
    
    public function postprofileComplete(Request $request){
        
        
       // return $request->all();


    $profileImage = Input::file('photo');
        $name = $profileImage->getClientOriginalName();
        $uploadPath = 'public/Image/';
        $profileImage->move($uploadPath, $name);
        $imageUrl = $uploadPath . $name;

//return $imageUrl;

            DoctorProfile::create([
                
 'doctorId'=>Auth::user()->id,
 'Speciality'=>$request->speciality,
'skill'=>$request->skills,
'workPlace'=>$request->workPlace,
'designation'=>$request->designation,
'graduation'=>$request->graduation,
'graduationFrom'=>$request->graduation_from,
'post_graduation'=>$request->post_graduation,
'post_graduationFrom'=>$request->post_graduation,
'status'=>1,
'image'=>$imageUrl
            ]);




        
        
        
        
    }
    
    
}
