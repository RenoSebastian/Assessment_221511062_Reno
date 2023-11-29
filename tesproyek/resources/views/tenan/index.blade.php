<!-- File: resources/views/tenan/index.blade.php -->

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
    </style>
    <title>Daftar Tenan</title>
</head>
<body>

    <div class="app-container">
        <h1>Restoran Pujasera</h1>
    </div>

    <div class="table-container">
        <h2>TABEL DATA TENAN</h2>

        <table>
            <thead>
                <tr>
                    <th>Kode Tenan</th>
                    <th>Nama Tenan</th>
                    <th>Nomor HP</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tenans as $tenan)
                    <tr>
                        <td>{{ $tenan->KodeTenan }}</td>
                        <td>{{ $tenan->NamaTenan }}</td>
                        <td>{{ $tenan->HP }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
