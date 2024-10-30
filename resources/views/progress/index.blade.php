@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Kemajuan Siswa</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Siswa</th>
                <th>Kursus</th>
                <th>Persentase Kemajuan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($progresses as $progress)
                <tr>
                    <td>{{ $progress->user->username }}</td>
                    <td>{{ $progress->course->course_name }}</td>
                    <td>{{ $progress->progress_percentage }}%</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
