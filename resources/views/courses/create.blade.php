@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Buat Kursus Baru</h1>
    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="course_name">Nama Kursus</label>
            <input type="text" name="course_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Deskripsi Kursus</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Buat Kursus</button>
    </form>
</div>
@endsection