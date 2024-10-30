<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username', 'email', 'password', 'role',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class, 'teacher_id');
    }

    public function progressTrackings()
    {
        return $this->hasMany(ProgressTracking::class);
    }

    public function assignments()
    {
        return $this->hasMany(AssignmentSubmission::class);
    }

    
