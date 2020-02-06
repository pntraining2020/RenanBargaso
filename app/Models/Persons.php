<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persons extends Model
{
    protected $table="persons";
    protected $fillable=[
        'name_id',
        'time_in',
        'time_out',
        'total_break',
        'out_hours_left'
    ];
}
