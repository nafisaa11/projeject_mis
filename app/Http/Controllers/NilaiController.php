<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;
use App\Models\Mahasiswa;
use App\Models\Matkul;

class NilaiController extends Controller
{
    public function index()
    {
        // Ambil data nilai beserta relasi mahasiswa dan mata kuliah
        $nilais = Nilai::with(['mahasiswa', 'mataKuliah'])->get();
        return view('nilai.index', compact('nilais'));
    }

    public function create()
    {
        $mahasiswas = Mahasiswa::all();
        $mataKuliahs = MataKuliah::all();
    
        return view('nilai.create', compact('mahasiswas', 'mataKuliahs'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_mahasiswa' => 'required|exists:mahasiswas,id_mahasiswa',
            'id_matakuliah' => 'required|exists:mata_kuliahs,id_matakuliah',
            'nilai_angka' => 'required|numeric',
            'nilai_huruf' => 'required|string|max:2',
            'ips' => 'required|numeric',
        ]);

        // Simpan data nilai
        Nilai::create($validated);
        return redirect()->route('nilai.index');
    }

    public function show($id)
    {
        // Menampilkan nilai dengan relasi mahasiswa dan mata kuliah
        $nilai = Nilai::with(['mahasiswa', 'mataKuliah'])->findOrFail($id);
        return view('nilai.show', compact('nilai'));
    }

    public function edit($id)
    {
        $nilai = Nilai::findOrFail($id);
        $mahasiswas = Mahasiswa::all();
        $mataKuliahs = MataKuliah::all();
    
        return view('nilai.edit', compact('nilai', 'mahasiswas', 'mataKuliahs'));
    }
    

    public function update(Request $request, $id)
    {
        $nilai = Nilai::findOrFail($id);
        $nilai->update($request->all());
        return redirect()->route('nilai.index');
    }

    public function destroy($id)
    {
        Nilai::destroy($id);
        return redirect()->route('nilai.index');
    }
}
