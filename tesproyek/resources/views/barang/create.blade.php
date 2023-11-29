<!-- File: resources/views/barang/create.blade.php -->

<h1>Formulir Tambah Barang</h1>

<form action="{{ route('barang.store') }}" method="POST">
    @csrf
    <label for="KodeBarang">Kode Barang:</label>
    <input type="text" name="KodeBarang" required>

    <label for="NamaBarang">Nama Barang:</label>
    <input type="text" name="NamaBarang" required>

    <label for="Satuan">Satuan:</label>
    <input type="text" name="Satuan" required>

    <label for="HargaSatuan">Harga Satuan:</label>
    <input type="text" name="HargaSatuan" required>

    <label for="Stok">Stok:</label>
    <input type="text" name="Stok" required>

    <button type="submit">Tambah Barang</button>
</form>

<a href="{{ route('barang.index') }}">Kembali ke Daftar Barang</a>
