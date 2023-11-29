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

        .app-container {
            background-color: #3498db;
            padding: 20px;
            color: #fff;
            text-align: center;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .table-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .create-button {
            background-color: #2ecc71;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none; /* Add this to remove the default underline on anchor tags */
            display: inline-block;
            cursor: pointer;
            border-radius: 5px;
        }

        .create-button:hover {
            background-color: #27ae60;
        }
    </style>
    <title>Daftar Barang</title>
</head>
<body>

    <div class="app-container">
        <h1>NAMA APLIKASI</h1>
    </div>

    <div class="table-container">
        <h2>TABEL SHOW BARANG</h2>

        <table>
            <thead>
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Satuan</th>
                    <th>Harga Satuan</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Your foreach loop here -->
            </tbody>
        </table>
    </div>

    <a class="create-button" href="{{ route('barang.create') }}">CREATE</a>

</body>
</html>
