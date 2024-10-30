@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Kuis</h1>
    <a href="{{ route('quizzes.create') }}" class="btn btn-primary mb-3">Tambah Kuis</a>
    <table class="table">
        <thead>
            <tr>
                <th>Judul Kuis</th>
                <th>Kursus</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($quizzes as $quiz)
                <tr>
                    <td>{{ $quiz->quiz_title }}</td>
                    <td>{{ $quiz->course->course_name }}</td>
                    <td>
                        <a href="{{ route('quizzes.edit', $quiz->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('quizzes.destroy', $quiz->id) }}" method="POST" style="display:inline;">
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
