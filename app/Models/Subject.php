<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'class_id',
        'subject_name',
        'subject_code'
    ];
}
