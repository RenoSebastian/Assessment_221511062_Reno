<!-- File: resources/views/nota/create.blade.php -->

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

        input, select {
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

        /* Menyesuaikan lebar dropdown */
        select {
            width: 100%; /* Atur lebar sesuai kebutuhan */
        }
    </style>
    <title>Formulir Tambah Nota</title>
</head>
<body>

    <div class="app-container">
        <h1>Formulir Tambah Nota</h1>
    </div>

    <div class="form-container">
        <form action="{{ route('nota.store') }}" method="POST">
            @csrf

            <label for="KodeNota">Kode Nota:</label>
            <input type="text" name="KodeNota" required>

            <label for="KodeTenan">Kode Tenan:</label>
            <select name="KodeTenan" required>
                @foreach ($tenans as $tenan)
                    <option value="{{ $tenan->KodeTenan }}">{{ $tenan->KodeTenan }} - {{ $tenan->NamaTenan }}</option>
                @endforeach
            </select>

            <label for="KodeKasir">Kode Kasir:</label>
            <select name="KodeKasir" required>
                @foreach ($kasirs as $kasir)
                    <option value="{{ $kasir->KodeKasir }}">{{ $kasir->KodeKasir }} - {{ $kasir->Nama }}</option>
                @endforeach
            </select>

            <label for="TglNota">Tanggal Nota:</label>
            <input type="date" name="TglNota" required>

            <label for="JamNota">Jam Nota:</label>
            <input type="time" name="JamNota" required>

            <label for="JumlahBelanja">Jumlah Belanja:</label>
            <input type="text" name="JumlahBelanja" required>

            <label for="Diskon">Diskon:</label>
            <input type="text" name="Diskon" required>

            <label for="Total">Total:</label>
            <input type="text" name="Total" required>

            <button type="submit" onclick="submitForm()">Simpan Nota</button>
    </form>
</div>

<script>
    function submitForm() {
        // Submit formulir
        document.querySelector('form').submit();

        // Redirect ke halaman index setelah submit
        window.location.href = '{{ route('nota.index') }}';
    }
</script>

</body>
</html>
