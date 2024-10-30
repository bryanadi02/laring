<?php
namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Course;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function create()
    {
        $courses = Course::all(); // Mengambil semua kursus untuk dropdown
        return view('assignments.create', compact('courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'assignment_title' => 'required|string|max:255',
            'description' => 'required|string',
            'due_date' => 'required|date',
        ]);

        Assignment::create($request->all()); // Menyimpan tugas baru ke database

        return redirect()->route('assignments.index')->with('success', 'Assignment created successfully.');
    }
}
