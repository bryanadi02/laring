<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id'); // Pastikan tipe data sesuai
            $table->string('quiz_name');
            $table->timestamps();
    
            // Menambahkan foreign key constraint
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('quizzes');
    }
};
