<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class classe extends Model
{
    protected $table = 'classes';
    protected $fillable = [
        'class_name',
    ];
}
