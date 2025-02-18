<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    public $timestamps = false;
    
    protected $table = 'course';
    protected $fillable = [
        'Id', 
        'Coursename',
        'Image',
        'Duration',
        'Time',
        'Instructor',
        'Coursefees',
        'Description',
        'Link'
    ];
}
