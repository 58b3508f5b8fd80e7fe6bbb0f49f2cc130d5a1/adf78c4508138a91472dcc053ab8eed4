<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_meta extends Model
{
    //
    protected $fillable
        = [
            'user_id',
            'first_name',
            'last_name',
            'email',
            'job_title',
            'dob',
            'description',
            'country',
            'state',
            'lga',
            'address',
            'phone_no',
            'latitude',
            'longitude',
            'experience',
            'current_salary',
            'expected_salary',
            'languages',
            'education'
        ];
}
