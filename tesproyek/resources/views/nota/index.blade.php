<!-- File: resources/views/nota/index.blade.php -->

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
            text-decoration: none;
            display: inline-block;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px; /* Tambahkan margin di atas tombol */
        }

        .create-button:hover {
            background-color: #27ae60;
        }
    </style>
    <title>Daftar Nota</title>
</head>
<body>

    <div class="app-container">
        <h1>Daftar Nota</h1>
    </div>

    <div class="table-container">
        <h2>Tabel Data Nota</h2>

        <table>
            <thead>
                <tr>
                    <th>Kode Nota</th>
                    <th>Kode Tenan</th>
                    <th>Kode Kasir</th>
                    <th>Tanggal Nota</th>
                    <th>Jam Nota</th>
                    <th>Jumlah Belanja</th>
                    <th>Diskon</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notas as $nota)
                    <tr>
                        <td>{{ $nota->KodeNota }}</td>
                        <td>{{ $nota->KodeTenan }}</td>
                        <td>{{ $nota->KodeKasir }}</td>
                        <td>{{ $nota->TglNota }}</td>
                        <td>{{ $nota->JamNota }}</td>
                        <td>{{ $nota->JumlahBelanja }}</td>
                        <td>{{ $nota->Diskon }}</td>
                        <td>{{ $nota->Total }}</td>
                        <td>
                            <a href="{{ route('nota.show', $nota->id) }}">Detail</a>
                            <a href="{{ route('nota.edit', $nota->id) }}">Edit</a>
                            <form action="{{ route('nota.destroy', $nota->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a class="create-button" href="{{ route('nota.create') }}">Create</a> <!-- Tombol Create di bawah tabel -->

    </div>

</body>
</html>
