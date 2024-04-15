<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MusVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, hasFactory, Notifiable;

/*  The attributes that are mass assignable. 
    Атрибуты, которые можно назначать массово.
    @var array<int, string>
*/
protected $fillable = [
    'name',
    'email',
    'password',
];

/* The attributes that should be hidden for serialization.
Атрибуты, которые следует скрыть для сериализации (массового производства).
@var array<int, string>
*/
protected $hidden = [
    'password',
    'remember_token',
];

/*The attributes that should be cast.
Атрибуты, которые следует привести.
@var array<int, string>
*/
protected $casts = [
    'email_verified_at' => 'datetime',
];
}
?>