<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    public $timestamps = false;
    
    protected $table = 'adminlogin';
    protected $fillable = [
        'Id', 
        'Email',
        'Password'
    ];
}
