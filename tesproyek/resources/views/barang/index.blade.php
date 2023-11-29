<!-- File: resources/views/barang/index.blade.php -->

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

        .create-button, .view-button, .edit-button, .delete-button {
            color: #fff;
            border: none;
            padding: 6px 12px;
            font-size: 14px;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 5px;
        }

        .create-button {
            background-color: #2ecc71; /* Hijau */
        }

        .create-button:hover {
            background-color: #27ae60; /* Hijau tua saat dihover */
        }

        .view-button {
            background-color: #3498db; /* Biru */
        }

        .view-button:hover {
            background-color: #2980b9; /* Biru tua saat dihover */
        }

        .edit-button {
            background-color: #e67e22; /* Orange */
        }

        .edit-button:hover {
            background-color: #d35400; /* Orange tua saat dihover */
        }

        .delete-button {
            background-color: #e74c3c; /* Merah */
        }

        .delete-button:hover {
            background-color: #c0392b; /* Merah tua saat dihover */
        }
    </style>
    <title>Daftar Barang</title>
</head>
<body>

    <div class="app-container">
        <h1>Restoran Pujasera</h1>
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
            @foreach ($barang as $item)
                <tr>
                    <td>{{ $item->KodeBarang }}</td>
                    <td>{{ $item->NamaBarang }}</td>
                    <td>{{ $item->Satuan }}</td>
                    <td>{{ $item->HargaSatuan }}</td>
                    <td>{{ $item->Stok }}</td>
                    <td>
                        <a class="edit-button" href="{{ route('barang.edit', $item->id) }}">Edit</a>
                        <a class="view-button" href="{{ route('barang.show', $item->id) }}">Lihat</a>
                        <form action="{{ route('barang.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <a class="create-button" href="{{ route('barang.create') }}">CREATE</a>

</body>
</html>
