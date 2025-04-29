<?php

namespace App\Http\Controllers;

use App\Models\JadwalKuliah;
use App\Models\Matkul;
use App\Models\Dosen;
use Illuminate\Http\Request;

class JadwalKuliahController extends Controller
{
    public function index()
    {
        $jadwals = JadwalKuliah::with('matkul', 'dosen')->get();
        return view('jadwal.index', compact('jadwals'));
    }

    public function create()
    {
        $matkuls = Matkul::all(); // Ini sudah benar
        $dosens = Dosen::all();
        return view('jadwal.create', compact('matkuls', 'dosens'));
    }

    public function store(Request $request)
    {
        try {
            // Validasi input - PERHATIKAN PERUBAHAN NAMA FIELD dari id_matakuliah menjadi id_matkul
            $request->validate([
                'id_matkul' => 'required|exists:matkuls,id_matkul', // Perubahan disini
                'id_dosen' => 'required|exists:dosens,id_dosen',
                'hari' => 'required',
                'tanggal' => 'required|date',
                'ruangan' => 'required',
                'jam_awal' => 'required',
                'jam_akhir' => 'required',
            ]);

            // Buat instance dan simpan data
            JadwalKuliah::create($request->all());

            return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil ditambahkan');
        } catch (\Exception $e) {
            // Debug: Tangkap error
            return back()->with('error', $e->getMessage())->withInput();
        }
    }

    public function edit($id)
    {
        $jadwal = JadwalKuliah::findOrFail($id);
        $matkuls = Matkul::all();
        $dosens = Dosen::all();
        return view('jadwal.edit', compact('jadwal', 'matkuls', 'dosens'));
    }

    public function update(Request $request, $id)
    {
        $jadwal = JadwalKuliah::findOrFail($id);

        $validated = $request->validate([
            'id_matkul' => 'required|exists:matkuls,id_matkul',
            'id_dosen' => 'required|exists:dosens,id_dosen',
            'hari' => 'required|string',
            'tanggal' => 'required|date',
            'ruangan' => 'required|string',
            'jam_awal' => 'required',
            'jam_akhir' => 'required',
        ]);

        $jadwal->update($validated);
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil diupdate.');
    }

    public function destroy($id)
    {
        JadwalKuliah::destroy($id);
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil dihapus.');
    }
}
