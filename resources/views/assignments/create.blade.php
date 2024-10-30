@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Buat Tugas Baru</h1>
    <form action="{{ route('assignments.store') }}" method="POST">
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
            <label for="assignment_title">Judul Tugas</label>
            <input type="text" name="assignment_title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Deskripsi Tugas</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="due_date">Batas Waktu</label>
            <input type="date" name="due_date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Buat Tugas</button>
    </form>
</div>
@endsection
