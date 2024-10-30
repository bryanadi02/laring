<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id(); // Kolom 'id'
            $table->string('course_name'); // Nama kursus
            $table->text('description'); // Deskripsi kursus
            $table->foreignId('teacher_id')->constrained('users'); // Kunci asing ke tabel users
            $table->timestamps(); // Timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
