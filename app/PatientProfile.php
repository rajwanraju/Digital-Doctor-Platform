<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientProfile extends Model
{
  protected $fillable = [
     'userId','status','sex','age','height','weight','blood','presure','diabetes'

 ];
}
