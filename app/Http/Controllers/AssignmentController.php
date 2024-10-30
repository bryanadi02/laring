<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function up()
{
    Schema::create('assignments', function (Blueprint $table) {
        $table->id();
        $table->foreignId('course_id')->constrained('courses');
        $table->string('assignment_title');
        $table->text('description');
        $table->date('due_date');
        $table->timestamps();
    });
}

}
