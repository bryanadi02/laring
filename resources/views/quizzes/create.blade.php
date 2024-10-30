@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Buat Kuis Baru</h1>
    <form action="{{ route('quizzes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="course_id">Kursus</label>
            <select name="course_id" class="form-control" required>
                @foreach($courses as $course)
                    <option value="{{ $course->course_id }}">{{ $course->course_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="quiz_title">Judul Kuis</label>
            <input type="text" name="quiz_title" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Buat Kuis</button>
    </form>
</div>
@endsection
