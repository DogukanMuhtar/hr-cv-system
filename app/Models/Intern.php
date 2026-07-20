<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

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
        'interviewer',
        'interview_date',
        'created_by',
        'updated_by',
        'deleted_by',
        'approved_by',
        'rejected_by',
        'reference',
    ];

    public function interviews(): MorphMany
    {
        return $this->morphMany(Interview::class, 'interviewable');
    }
}