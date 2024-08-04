<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampil User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            border-left: 1px solid #000;
            color: blanchedalmond;
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3 class="text-center my-4 text-white">Data Pengguna</h3>
                        <hr>
                        <div class="card-body">
                            <h3>{{ $akun->NIK }}</h3>
                            <p>Nama: {{ $akun->nama_customer }}</p>
                            <p>Email: {{ $akun->email }}</p>
                            <p>Negara: {{ $akun->country }}</p>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('customers.index') }}" class="btn btn-md btn-info mt-3">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
