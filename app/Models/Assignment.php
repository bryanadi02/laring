<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $table = 'assignments'; // Nama tabel jika berbeda dari default

    protected $fillable = [
        'course_id', // Kolom yang dapat diisi
        'assignment_name',
        // tambahkan kolom lain yang perlu diisi jika ada
    ];

    /**
     * Definisikan relasi ke model Course.
     */
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
