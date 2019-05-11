<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorProfile extends Model
{
     protected $fillable = [
        'doctorId', 
        'Speciality', 
        'skill', 
        'workPlace', 
        'designation', 
        'graduation', 
        'graduationFrom', 
        'post_graduation', 
        'post_graduationFrom', 
        'image', 
        'status', 
    ];
}
