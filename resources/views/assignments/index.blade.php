@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Tugas</h1>
    <a href="{{ route('assignments.create') }}" class="btn btn-primary mb-3">Tambah Tugas</a>
    <table class="table">
        <thead>
            <tr>
                <th>Judul Tugas</th>
                <th>Kursus</th>
                <th>Batas Waktu</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($assignments as $assignment)
                <tr>
                    <td>{{ $assignment->assignment_title }}</td>
                    <td>{{ $assignment->course->course_name }}</td>
                    <td>{{ $assignment->due_date }}</td>
                    <td>
                        <a href="{{ route('assignments.edit', $assignment->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('assignments.destroy', $assignment->id) }}" method="POST" style="display:inline;">
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
