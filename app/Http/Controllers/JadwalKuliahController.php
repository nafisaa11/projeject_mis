<?php

namespace App\Http\Controllers;

use App\Models\JadwalKuliah;
use App\Models\Matkul;
use App\Models\Dosen;
use Illuminate\Http\Request;

class JadwalKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwals = JadwalKuliah::with(['matkul', 'dosen'])->get();
        return view('jadwal.index', compact('jadwals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $matkuls = Matkul::all();
        $dosens = Dosen::all();
        return view('jadwal.create', compact('matkuls', 'dosens'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_matkul' => 'required|exists:matkuls,id_matkul',
            'id_dosen'  => 'required|exists:dosens,id_dosen',
            'hari'      => 'required|string',
            'tanggal'   => 'required|date',
            'ruangan'   => 'required|string',
            'kelas'    => 'required|string',
            'sks'      => 'required|integer',
            'jam_awal'  => 'required',
            'jam_akhir' => 'required'
        ]);

        JadwalKuliah::create($request->all());

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jadwal = JadwalKuliah::with(['matkul', 'dosen'])->findOrFail($id);
        return view('jadwal.show', compact('jadwal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jadwal = JadwalKuliah::findOrFail($id);
        $matkuls = Matkul::all();
        $dosens = Dosen::all();
        return view('jadwal.edit', compact('jadwal', 'matkuls', 'dosens'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'id_matkul' => 'required|exists:matkuls,id_matkul',
            'id_dosen'  => 'required|exists:dosens,id_dosen',
            'hari'      => 'required|string',
            'tanggal'   => 'required|date',
            'ruangan'   => 'required|string',
            'kelas'    => 'required|string',
            'sks'      => 'required|integer',
            'jam_awal'  => 'required',
            'jam_akhir' => 'required'
        ]);

        $jadwal = JadwalKuliah::findOrFail($id);
        $jadwal->update($request->all());

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jadwal = JadwalKuliah::findOrFail($id);
        $jadwal->delete();

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil dihapus.');
    }
}
