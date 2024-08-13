@extends('layouts.app')

@section('content')
<div class="container">
<h1 class="custom-header my-4">Menampilkan Detail Nilai dari masing-masing siswa </h1>
    <div class="card">
        <div class="card-header">
        <h1 class="bold"> Nama :  {{ $siswa->nama }}</h1>
            <style>
        .bold {
        font-weight: bold;
        }
</style>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Matematika</th>
                        <th>Kimia</th>
                        <th>Fisika</th>
                        <th>Biologi</th>
                        <th>Kelas</th>
                        <th>Total Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $siswa->matematika }}</td>
                        <td>{{ $siswa->kimia }}</td>
                        <td>{{ $siswa->fisika }}</td>
                        <td>{{ $siswa->biologi }}</td>
                        <td>{{ $siswa->kelas }}</td>
                        <td>{{ $siswa->nilai }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="card mt-3">
        <div class="card-body">
            <p><strong>Kelas:</strong> {{ $siswa->kelas }}</p>
            <p><strong>Total Nilai:</strong> {{ $siswa->nilai }}</p>
        </div>
        </div>
    </div>
    <a href="{{ route('siswa.nilaitertinggi') }}" class="btn btn-primary mt-3">Kembali ke Daftar Siswa</a>
</div>
@endsection