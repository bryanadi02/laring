<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->id(); // Membuat kolom 'id' sebagai primary key
            $table->unsignedBigInteger('course_id'); // Kolom untuk foreign key yang mengacu ke tabel 'courses'
            $table->string('assignment_name'); // Nama tugas
            $table->timestamps(); // Menambahkan kolom 'created_at' dan 'updated_at'

            // Menambahkan foreign key constraint
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assignments'); // Menghapus tabel 'assignments' jika rollback
    }
}
