<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConversiationModel extends Model
{
    
    protected $fillable = [
        'conversation_sent_from',
        'conversation_sent_to',
        'conversation_subject',
        'conversation_body',
        'status',
    ];

    protected $dates = [
    'created_at',
    'updated_at',
    // your other new column
];
}
