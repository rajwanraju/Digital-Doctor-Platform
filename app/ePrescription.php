<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ePrescription extends Model
{
  protected $table = 'e_prescriptions';
  protected $fillable = [
    'doctorId','diseases_title','patientId'
   ];
}
