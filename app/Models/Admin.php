<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;


    protected $fillable = [
        "name",
        "email",
        "password",
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
