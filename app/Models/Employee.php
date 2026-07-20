<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

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
        'created_by',
        'updated_by',
        'deleted_by',
        'approved_by',
        'reference',
    ];

    public function interviews(): MorphMany
    {
        return $this->morphMany(Interview::class, 'interviewable');
    }
}