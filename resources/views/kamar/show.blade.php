<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampil Kamar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h3 class="card-title text-center my-4 text- black">Detail Kamar</h3>
                    <hr>

                    <div class="card-text text- black">
                        <h4>{{ $kamar->nama_kamar }}</h4>
                        <p>Jenis Kamar: {{ $kamar->jenis_kamar }}</p>
                        <p>Ukuran Kamar: {{ $kamar->ukuran_kamar }}</p>
                        <p>Harga: {{ $kamar->harga }}</p>
                    </div>

                    <a href="{{ route('kamar.index') }}" class="btn btn-md btn-info mt-3">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
