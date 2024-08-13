@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="custom-header my-4">Menampilkan nilai siswa dari masing-masing kelas, berdasarkan total nilai kelas tertinggi</h1>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Kelas</th>
                    <th>Nama</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kelasNilai as $kelas)
                    <tr>
                        <td colspan="5" class="text-center"><strong>Kelas: {{ $kelas->kelas }} (Total Nilai: {{ $kelas->total_nilai }})</strong></td>
                    </tr>
                    @php
                        $no = 1;
                    @endphp
                    @foreach($siswa->where('kelas', $kelas->kelas) as $s)
                        <tr>
                            
                            <td>{{ $s->kelas }}</td>
                            <td>{{ $s->nama }}</td>
                            <td>{{ $s->nilai }}</td>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection