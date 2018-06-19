<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    protected $fillable
        = [
            'job_id',
            'title',
            'country',
            'state',
            'lga',
            'description',
            'experience',
            'qualification',
            'salary_from',
            'salary_to',
            'post_at',
            'close_at'
        ];
}
