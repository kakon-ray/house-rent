<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as AuthenticatableUser;
use Illuminate\Contracts\Auth\Authenticatable;

class User extends AuthenticatableUser implements Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'is_admin',
    ];
    // protected $guarded = [];
}
