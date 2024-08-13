<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\DataTables\SiswaDataTable;
use Yajra\DataTables\Facades\DataTables;

class SiswaController extends Controller
{
    public function index()
    
    {
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'nilai' => 'required|numeric|max:100',
            'matematika' => 'nullable|numeric|max:100',
            'kimia' => 'nullable|numeric|max:100',
            'fisika' => 'nullable|numeric|max:100',
            'biologi' => 'nullable|numeric|max:100',
        ]);

        Siswa::create($validatedData);

        return redirect()->route('siswa.create')->with('success', 'Siswa Dan Nilai berhasil ditambahkan');
    }

    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.shownilai', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'nilai' => 'nullable|integer',
            'matematika' => 'nullable|integer',
            'kimia' => 'nullable|integer',
            'fisika' => 'nullable|integer',
            'biologi' => 'nullable|integer',
            'sejarah' => 'nullable|integer',
        ]);

        $siswa = Siswa::findOrFail($id);
        $siswa->update($request->all());

        return redirect()->route('siswa.index')->with('success', 'Siswa updated successfully.');
    }

    public function nilaiTertinggi()
    {
    $siswa = Siswa::orderBy('nilai', 'desc')->get();
    return view('siswa.nilaitertinggi', compact('siswa'));
    }   

    
    public function showNilaiTertinggi()
{
        
    // Mengelompokkan siswa berdasarkan kelas dan menghitung total nilai untuk setiap kelas
    $kelasNilai = DB::table('siswas')
        ->select('kelas', DB::raw('SUM(nilai) as total_nilai'))
        ->groupBy('kelas')
        ->orderBy('total_nilai', 'desc')
        ->get();
    
    // Mengambil data siswa
    $siswa = DB::table('siswas')->get();
    
    return view('siswa.shownilaitertinggi', compact('kelasNilai', 'siswa'));
}


    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('siswa.nilaitertinggi')->with('success', 'Siswa deleted successfully.');
    }
}
