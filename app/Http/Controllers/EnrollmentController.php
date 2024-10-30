<?php
namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Course;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function enroll(Request $request)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,course_id',
        ]);

        Enrollment::create([
            'user_id' => auth()->user()->id,
            'course_id' => $request->course_id,
            'enrolled_at' => now(),
        ]);

        return redirect()->route('courses.index')->with('message', 'You have successfully enrolled in the course.');
    }

    public function myCourses()
    {
        $enrollments = Enrollment::with('course')->where('user_id', auth()->user()->id)->get();
        return view('enrollments.index', compact('enrollments'));
    }
}
