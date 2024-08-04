<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        h1 {
            margin-top: 20px;
            margin-bottom: 30px;
            text-align: center;
            color: #343a40;
        }
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Create Invoice</h1>
    <div class="form-container">
        <form action="{{ route('invoice.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control" required>{{ old('deskripsi') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-select" required>
                    <option value="bayar">Bayar</option>
                    <option value="dp" >DP</option>
                    <option value="lunas" >Lunas</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="besar_dp" class="form-label">Besar DP</label>
                <input type="number" name="besar_dp" id="besar_dp" class="form-control" value="{{ old('besar_dp') }}">
            </div>

        
            <div class="mb-3">
                <label for="reservasi" class="form-label">Reservasi</label>
                <select name="id_reservasi" id="reservasi" class="form-select" required>
                @foreach ($r as $res)
                    <option value="{{ $res->id_reservasi }}">{{ $res->id_reservasi }}</option>
                @endforeach
                    
                </select>
            </div>


            <button type="submit" class="btn btn-primary mt-3">Tambah</button>
            <a href="{{ route('invoice.index') }}" class="btn btn-primary mt-3">Kembali</a>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
