<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
  protected $fillable = [
      'userId', 'doctorId', 'status','created_at','updated_at'
  ];
}
