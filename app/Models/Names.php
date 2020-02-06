<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Names extends Model
{
    protected $table="names";
    protected $fillable=[
        'first_name',
        'middle_name',
        'last_name',
    ];
}
