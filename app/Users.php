<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    protected $table = 'users';
    protected $fillable = [
        'first_name',
        'last_name',
        'user_role_id',
        'date_of_birth',
        'phone',
        'email',
        'password',
        'profile_image',
		'status',
        'hobbies'
    ];




}
