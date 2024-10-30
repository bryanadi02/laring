<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgressTrackingTable extends Migration
{
    public function up()
    {
        Schema::create('progress_tracking', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Kunci asing ke tabel users
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade'); // Kunci asing
            $table->integer('progress_percentage')->default(0); // Persentase kemajuan
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('progress_tracking');
    }
}
