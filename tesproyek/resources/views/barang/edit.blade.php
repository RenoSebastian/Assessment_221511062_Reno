<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #ecf0f1;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
            text-align: center;
        }

        h1 {
            color: #3498db;
        }

        label {
            display: block;
            margin: 15px 0 8px;
            text-align: left;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button, .back-button {
            display: inline-block;
            width: 48%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        button {
            background-color: #3498db;
            color: #fff;
            border: none;
        }

        button:hover {
            background-color: #2980b9;
        }

        .back-button {
            background-color: #2ecc71;
            color: #fff;
            border: none;
            margin-left: 4%;
        }

        .back-button:hover {
            background-color: #27ae60;
        }
    </style>
    <title>Formulir Edit Barang</title>
</head>
<body>

    <div class="form-container">
        <h1>Formulir Edit Barang</h1>

        <form action="{{ route('barang.update', $barang->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="KodeBarang">Kode Barang:</label>
            <input type="text" name="KodeBarang" value="{{ $barang->KodeBarang }}" required>

            <label for="NamaBarang">Nama Barang:</label>
            <input type="text" name="NamaBarang" value="{{ $barang->NamaBarang }}" required>

            <label for="Satuan">Satuan:</label>
            <input type="text" name="Satuan" value="{{ $barang->Satuan }}" required>

            <label for="HargaSatuan">Harga Satuan:</label>
            <input type="text" name="HargaSatuan" value="{{ $barang->HargaSatuan }}" required>

            <label for="Stok">Stok:</label>
            <input type="text" name="Stok" value="{{ $barang->Stok }}" required>

            <button type="submit">Simpan Perubahan</button>
            <a href="{{ route('barang.index') }}" class="back-button">Kembali ke Daftar Barang</a>
        </form>
    </div>

</body>
</html>
