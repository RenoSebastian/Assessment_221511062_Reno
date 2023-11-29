<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use App\Models\Tenan; // Pastikan impor model Tenan sudah ada
use App\Models\Kasir; // Pastikan impor model Kasir sudah ada
use Illuminate\Http\Request;

class NotaController extends Controller
{
    public function index()
    {
        $notas = Nota::with(['tenan', 'kasir'])->get();
        return view('nota.index', compact('notas'));
    }

    public function create()
    {
        $tenans = Tenan::all();
        $kasirs = Kasir::all();

        return view('nota.create', compact('tenans', 'kasirs'));
    }

    public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'KodeNota' => 'required|unique:nota|max:255',
        'KodeTenan' => 'required',
        'KodeKasir' => 'required',
        'TglNota' => 'required|date',
        'JamNota' => 'required|date_format:H:i:s',
        'JumlahBelanja' => 'required|numeric',
        'Diskon' => 'required|numeric',
        'Total' => 'required|numeric',
    ]);

    // Simpan data nota baru
    Nota::create($request->all());

    // Redirect dengan pesan sukses
    return redirect()->route('nota.index')->with('success', 'Nota berhasil ditambahkan');
}

    public function show($id)
    {
        $nota = Nota::with(['tenan', 'kasir'])->find($id);
        return view('nota.show', compact('nota'));
    }

    public function edit($id)
    {
        // Implementasi logika untuk menampilkan formulir edit nota
        $nota = Nota::with(['tenan', 'kasir'])->find($id);
        return view('nota.edit', compact('nota'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'KodeNota' => 'required|max:255|unique:nota,KodeNota,' . $id,
            'KodeTenan' => 'required',
            'KodeKasir' => 'required',
            'TglNota' => 'required|date',
            'JamNota' => 'required|date_format:H:i:s',
            'JumlahBelanja' => 'required|numeric',
            'Diskon' => 'required|numeric',
            'Total' => 'required|numeric',
        ]);

        // Update data nota
        $nota = Nota::find($id);
        $nota->update($request->all());

        // Redirect dengan pesan sukses
        return redirect()->route('nota.index')->with('success', 'Nota berhasil diperbarui');
    }

    public function destroy($id)
    {
        // Hapus data nota
        Nota::destroy($id);

        // Redirect dengan pesan sukses
        return redirect()->route('nota.index')->with('success', 'Nota berhasil dihapus');
    }
}
