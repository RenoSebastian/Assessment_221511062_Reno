<!-- File: resources/views/barang/show.blade.php -->

<h1>Detail Barang</h1>

<p><strong>Kode Barang:</strong> {{ $barang->KodeBarang }}</p>
<p><strong>Nama Barang:</strong> {{ $barang->NamaBarang }}</p>
<p><strong>Satuan:</strong> {{ $barang->Satuan }}</p>
<p><strong>Harga Satuan:</strong> {{ $barang->HargaSatuan }}</p>
<p><strong>Stok:</strong> {{ $barang->Stok }}</p>

<a href="{{ route('barang.index') }}">Kembali ke Daftar Barang</a>
