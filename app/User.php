<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable
        = [
            'user_id',
            'first_name',
            'last_name',
            'job_title',
            'email',
            'phone_no',
            'password',
            'avatar_location'
        ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden
        = [
            'password',
            'remember_token',
        ];


    /**
     * Hash password
     * @param $input
     */
    public function setPasswordAttribute($input)
    {
        if ($input)
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
    }


    public function role()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }


    public function isAdmin()
    {
        return $this->role()->where('role_id', 1)->first();
    }

    public function lessons()
    {
        return $this->belongsToMany('App\Lesson', 'lesson_student');
    }
}
