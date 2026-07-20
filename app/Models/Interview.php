<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Interview extends Model
{
    use HasFactory;

    protected $fillable = [
        'interviewer',
        'interview_date',
    ];

    protected $casts = [
        'interview_date' => 'date',
    ];

    public function interviewable(): MorphTo
    {
        return $this->morphTo();
    }
}