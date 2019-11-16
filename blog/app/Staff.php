<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    protected $fillable = ['title', 'firstname', 'lastname', 'email', 'phone', 'sex'];
}
