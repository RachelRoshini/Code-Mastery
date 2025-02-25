<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    public $timestamps = false;
    
    protected $table = 'tb_register';
    protected $fillable = [
        'Id', 
        'Name',
        'PhoneNo',
        'Email',
        'Password',
        'ConfirmPassword'
        
    ];
}
