<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function courses()
{
    return $this->hasMany(Course::class, 'teacher_id');
}

public function progressTrackings()
{
    return $this->hasMany(ProgressTracking::class);
}

}
