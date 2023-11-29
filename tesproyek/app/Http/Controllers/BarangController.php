<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Barang;
class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
    }

    public function show($id)
    {
        $barang = Barang::find($id);
        return view('barang.show', compact('barang'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'KodeBarang' => 'required|unique:barang|max:255',
            'NamaBarang' => 'required|max:255',
            'Satuan' => 'required|max:255',
            'HargaSatuan' => 'required|numeric',
            'Stok' => 'required|integer',
        ]);

        // Simpan data barang
        Barang::create($request->all());

        // Redirect dengan pesan sukses
        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan');
    }

    public function edit($id)
    {
        $barang = Barang::find($id);
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'KodeBarang' => 'required|max:255|unique:barang,KodeBarang,' . $id,
            'NamaBarang' => 'required|max:255',
            'Satuan' => 'required|max:255',
            'HargaSatuan' => 'required|numeric',
            'Stok' => 'required|integer',
        ]);

        // Update data barang
        $barang = Barang::find($id);
        $barang->update($request->all());

        // Redirect dengan pesan sukses
        return redirect()->route('barang.index')->with('success', 'Barang berhasil diperbarui');
    }

    public function destroy($id)
    {
        // Hapus data barang
        Barang::destroy($id);

        // Redirect dengan pesan sukses
        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus');
    }
}

