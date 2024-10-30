<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ProgressTrackingController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\DashboardController;

// Route untuk user authentication
Route::get('register', [UserController::class, 'registerForm'])->name('register.form');
Route::post('register', [UserController::class, 'register'])->name('register');
Route::get('login', [UserController::class, 'loginForm'])->name('login.form');
Route::post('login', [UserController::class, 'login'])->name('login');
Route::post('logout', [UserController::class, 'logout'])->name('logout');

// Routes untuk dashboard
Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

// Routes untuk kursus
Route::resource('courses', CourseController::class)->middleware('auth');

// Routes untuk tugas
Route::resource('assignments', AssignmentController::class)->middleware('auth');

// Routes untuk kuis
Route::resource('quizzes', QuizController::class)->middleware('auth');

// Routes untuk pelacakan kemajuan
Route::get('progress', [ProgressTrackingController::class, 'index'])->middleware('auth')->name('progress.index');
Route::get('progress/{id}', [ProgressTrackingController::class, 'show'])->middleware('auth')->name('progress.show');

// Routes untuk pendaftaran kursus
Route::post('enroll', [EnrollmentController::class, 'enroll'])->middleware('auth')->name('enroll');
Route::get('my-courses', [EnrollmentController::class, 'myCourses'])->middleware('auth')->name('my.courses');

// Routes untuk assignments
Route::resource('assignments', AssignmentController::class)->middleware('auth');

// Routes untuk quizzes
Route::resource('quizzes', QuizController::class)->middleware('auth');

// Routes untuk progress
Route::get('progress', [ProgressTrackingController::class, 'index'])->middleware('auth')->name('progress.index');
Route::get('progress/{id}', [ProgressTrackingController::class, 'show'])->middleware('auth')->name('progress.show');
