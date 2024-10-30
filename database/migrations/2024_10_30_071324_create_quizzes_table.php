<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesTable extends Migration
{
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id(); // ID untuk kuis
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade'); // Kunci asing ke tabel courses
            $table->string('quiz_title'); // Judul kuis
            $table->timestamps(); // Timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('quizzes');
    }
}
