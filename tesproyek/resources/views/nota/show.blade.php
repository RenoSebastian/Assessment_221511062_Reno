<!-- File: resources/views/nota/show.blade.php -->

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

        .detail-container {
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
    </style>
    <title>Detail Nota</title>
</head>
<body>

    <div class="app-container">
        <h1>Detail Nota</h1>
    </div>

    <div class="detail-container">
        <table>
            <tr>
                <th>Kode Nota</th>
                <td>{{ $nota->KodeNota }}</td>
            </tr>
            <tr>
                <th>Kode Tenan</th>
                <td>{{ $nota->KodeTenan }}</td>
            </tr>
            <tr>
                <th>Kode Kasir</th>
                <td>{{ $nota->KodeKasir }}</td>
            </tr>
            <tr>
                <th>Tanggal Nota</th>
                <td>{{ $nota->TglNota }}</td>
            </tr>
            <tr>
                <th>Jam Nota</th>
                <td>{{ $nota->JamNota }}</td>
            </tr>
            <tr>
                <th>Jumlah Belanja</th>
                <td>{{ $nota->JumlahBelanja }}</td>
            </tr>
            <tr>
                <th>Diskon</th>
                <td>{{ $nota->Diskon }}</td>
            </tr>
            <tr>
                <th>Total</th>
                <td>{{ $nota->Total }}</td>
            </tr>
        </table>

        <a href="{{ route('nota.index') }}">Kembali ke Daftar Nota</a>
    </div>

</body>
</html>
