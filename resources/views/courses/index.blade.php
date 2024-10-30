@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Kursus</h1>
    <a href="{{ route('courses.create') }}" class="btn btn-primary">Tambah Kursus</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Kursus</th>
                <th>Deskripsi</th>
                <th>Guru</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
                <tr>
                    <td>{{ $course->course_name }}</td>
                    <td>{{ $course->description }}</td>
                    <td>{{ $course->teacher->username }}</td>
                    <td>
                        <a href="{{ route('courses.edit', $course->course_id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('courses.destroy', $course->course_id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
