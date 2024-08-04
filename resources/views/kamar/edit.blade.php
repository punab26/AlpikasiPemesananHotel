<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kamar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h3 class="card-title text-center my-4 text- black">Data Kamar</h3>
                    <hr>

                    <form action="{{ route('kamar.update', $kamar->id_kamar) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama_kamar" class="form-label text-white">Nama Kamar</label>
                            <input type="text" name="nama_kamar" class="form-control" id="nama_kamar" placeholder="Enter Nama Kamar" value="{{ old('nama_kamar', $kamar->nama_kamar) }}">
                            @error('nama_kamar')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="jenis_kamar" class="form-label text-white">Jenis Kamar</label>
                            <select class="form-control" name="jenis_kamar" id="jenis_kamar">
                                <option value="{{ old('jenis_kamar', $kamar->jenis_kamar) }}">{{ old('jenis_kamar', $kamar->jenis_kamar) }}</option>
                                <option value="deluxe">Deluxe</option>
                                <option value="superior">Superior</option>
                                <option value="president">President</option>
                            </select>
                            @error('jenis_kamar')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="ukuran_kamar" class="form-label text-white">Ukuran Kamar</label>
                            <input type="number" name="ukuran_kamar" class="form-control" id="ukuran_kamar" placeholder="Enter Ukuran Kamar" value="{{ old('ukuran_kamar', $kamar->ukuran_kamar) }}">
                            @error('ukuran_kamar')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label text-white">Harga</label>
                            <input type="number" name="harga" class="form-control" id="harga" placeholder="Enter Harga" value="{{ old('harga', $kamar->harga) }}">
                            @error('harga')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                    <a href="{{ route('kamar.index') }}" class="btn btn-primary mt-3">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
