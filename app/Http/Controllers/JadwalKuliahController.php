<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalKuliah;

class JadwalKuliahController extends Controller
{
    public function index()
    {
        return JadwalKuliah::with('mataKuliah')->get();
    }

    public function create()
    {
        return view('mataKuliah.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_matkul' => 'required|exists:matkuls,id_matkul',
            'id_dosen' => 'required|exists:dosens,id_dosen',
            'hari' => 'required|string',
            'tanggal' => 'required|date',
            'ruangan' => 'required|string',
            'jam_awal' => 'required',
            'jam_akhir' => 'required',
        ]);

        Jadwal::create([
            'id_dosen' => $request->id_dosen,
            'id_matkul' => $request->id_matkul,
            'hari' => $request->hari,
            'tanggal' => $request->tanggal,
            'ruangan' => $request->ruangan, 
            'jam_awal' => $request->jam_awal,
            'jam_akhir' => $request->jam_akhir,
            // field lain seperti 'hari', 'jam', dst bisa ditambahkan
        ]);

        return JadwalKuliah::create($validated);
    }

    public function show($id)
    {
        return JadwalKuliah::with('mataKuliah')->findOrFail($id);
    }

    public function edit($id)
    {
        return JadwalKuliah::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $jadwal = JadwalKuliah::findOrFail($id);
        $jadwal->update($request->all());
        return $jadwal;
    }

    public function destroy($id)
    {
        JadwalKuliah::destroy($id);
        return response()->json(['message' => 'Deleted successfully']);
    }
}
