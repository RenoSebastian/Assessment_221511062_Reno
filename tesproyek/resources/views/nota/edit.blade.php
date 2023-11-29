<!-- File: resources/views/nota/edit.blade.php -->

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

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
    </style>
    <title>Formulir Edit Nota</title>
</head>
<body>

    <div class="app-container">
        <h1>Formulir Edit Nota</h1>
    </div>

    <div class="form-container">
        <form action="{{ route('nota.update', $nota->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="KodeNota">Kode Nota:</label>
            <input type="text" name="KodeNota" value="{{ $nota->KodeNota }}" required>

            <label for="KodeTenan">Kode Tenan:</label>
            <input type="text" name="KodeTenan" value="{{ $nota->KodeTenan }}" required>

            <label for="KodeKasir">Kode Kasir:</label>
            <input type="text" name="KodeKasir" value="{{ $nota->KodeKasir }}" required>

            <label for="TglNota">Tanggal Nota:</label>
            <input type="date" name="TglNota" value="{{ $nota->TglNota }}" required>

            <label for="JamNota">Jam Nota:</label>
            <input type="time" name="JamNota" value="{{ $nota->JamNota }}" required>

            <label for="JumlahBelanja">Jumlah Belanja:</label>
            <input type="text" name="JumlahBelanja" value="{{ $nota->JumlahBelanja }}" required>

            <label for="Diskon">Diskon:</label>
            <input type="text" name="Diskon" value="{{ $nota->Diskon }}" required>

            <label for="Total">Total:</label>
            <input type="text" name="Total" value="{{ $nota->Total }}" required>

            <button type="submit">Simpan Perubahan</button>
        </form>
    </div>

</body>
</html>
