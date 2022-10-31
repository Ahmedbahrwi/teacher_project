<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $fillable = [
        'attendence_student_uid',
        'attendence_course_name',
        'attendance_uid',
        'created_at',
        'attendance_time',
        'attendance_date',
        
    ];
}
