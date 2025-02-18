<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TutorProfile extends Model
{
    use HasFactory;

    protected $fillable = ['tutor_id', 'subjects', 'qualifications', 'class_rate', 'location', 'max_students', 'class_mode'];

    //convert these into array
    protected $casts = [
        'subjects' => 'array',
        'qualifications' => 'array',
    ];

    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
    }
}
