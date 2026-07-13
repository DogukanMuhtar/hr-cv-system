<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = [
    'first_name',
    'last_name',
    'tc_no',
    'phone',
    'email',
    'profession',
    'position',
    'cv_path',
    'status',
    'hr_note',
    'interviewer',
    'interview_date',
    ];
    }
