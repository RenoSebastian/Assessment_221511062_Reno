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

        h1 {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        button {
            background-color: #2ecc71;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #27ae60;
        }

        a {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
    <title>Formulir Tambah Barang</title>
</head>
<body>

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

</body>
</html>
