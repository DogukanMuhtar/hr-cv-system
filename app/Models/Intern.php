<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intern extends Model
{
    use SoftDeletes;
    use HasFactory;

     protected $fillable = [
        'first_name',
        'last_name',
        'tc_no',
        'phone',
        'email',
        'university',
        'department',
        'grade',
        'internship_type',
        'internship_duration',
        'cv_path',
        'status',
        'hr_note',
    ];
}