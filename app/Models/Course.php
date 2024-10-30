<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }
    
    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }
    
    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }
    
    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }
    
    public function progressTrackings()
    {
        return $this->hasMany(ProgressTracking::class);
    }
    
}
