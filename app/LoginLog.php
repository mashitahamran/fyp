<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginLog extends Model
{
    //
    protected $fillable = [
        'username',
        'type_login',
    ];
}
