<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'email',
        'password',
        'remember_token',
        'email_verified_at'
    ];

    function customers(){
        return $this->hasMany(Customer::class);
    }
    function categories(){
        return $this->hasMany(Cateagory::class);
    }

    function products(){
        return $this->hasMany(Product::class);
    }

}
