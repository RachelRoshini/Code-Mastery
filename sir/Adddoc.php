<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;



class Adddoc extends Authenticatable
{
    public $timestamps = false;
    
    protected $table = 'tb_doctors';
    protected $fillable = [
        'doctor_id',
        'name',
        'email',
        'address',
        'Photo',
        'hospital',
        'password'

    ];
}
