<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_name',
        'student_phone',
        'student_par_phone',
        'student_gender',
        'student_uid',
        'student_year',
    ];

        
}
