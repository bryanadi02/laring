@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Kemajuan untuk {{ $progress->course->course_name }}</h1>
    <p>Nama Siswa: {{ $progress->user->username }}</p>
    <p>Persentase Kemajuan: {{ $progress->progress_percentage }}%</p>
    <a href="{{ route('progress.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
