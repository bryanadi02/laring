@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard Siswa</h1>
    <h2>Kemajuan Kursus</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Kursus</th>
                <th>Persentase Kemajuan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($progresses as $progress)
                <tr>
                    <td>{{ $progress->course->course_name }}</td>
                    <td>{{ $progress->progress_percentage }}%</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
