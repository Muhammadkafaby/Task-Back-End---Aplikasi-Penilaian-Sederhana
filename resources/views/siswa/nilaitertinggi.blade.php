@extends('layouts.app')
@section('content')
<div class="container">
<h1 class="custom-header my-4">Daftar Nilai Siswa Berdasarkan Nilai Tertinggi</h1>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                   <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Nilai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($siswa as $item)
                <tr>
            <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->kelas }}</td>
                    <td>{{ $item->nilai }}</td>
                    <td>
                        <!-- Edit Button -->
                         
                        <button class="btn btn-info btn-sm" onclick="window.location.href='{{ route('siswa.shownilai', $item->id) }}'">Detail Nilai</button>
                        
                        <!-- Delete Button -->
                        <form action="{{ route('siswa.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @if(session('success'))
        <div class="mt-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative flex justify-center" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3"></span>
        </div>
    @endif
</div>
@endsection