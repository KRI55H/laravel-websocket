<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'socket_id',
        'email',
        'password',
        'activity_status',
        'email_verified_at',
        'session_token'
    ];


    protected $hidden = [
        'password',
    ];


    protected $casts = [
        'socket_id' => 'integer',
        'email' => 'string',
        'password' => 'string',
        'activity_status' => 'string',
        'session_token' => 'string',
        'email_verified_at' => 'datetime',
    ];

    function setToken()
    {
        $time = base64_encode(now());
        $string = Str::random(50);
        $token = "$time$string";
        $this->update(['session_token' => $token]);
    }

    function setActivity($status)
    {
        $this->update(['activity_status' => $status]);
    }
}
