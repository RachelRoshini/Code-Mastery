<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $timestamps = false;
    
    protected $table = 'join_course';
    protected $fillable = [
        'Id', 
        'Coursename',
        'Duration',
        'Time',
        'Instructor',
        'Coursefees',
        'Status',
        'userid',
        'Link'
        
    ];
}
