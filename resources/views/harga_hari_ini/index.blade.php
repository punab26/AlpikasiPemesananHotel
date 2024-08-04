<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harga Hari Ini</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table-container {
            margin-top: 40px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2>Harga Hari Ini</h2>
                    <a href="{{ route('harga_hari_ini.create') }}" class="btn btn-primary">Tambah</a>
                </div>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p class="mb-0">{{ $message }}</p>
                    </div>
                @endif

                <div class="table-responsive table-container">
                    <table class="table table-hover table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>ID Hotel</th>
                                <th>Kamar Tersedia</th>
                                <th>Date</th>
                                <th>ID Kamar</th>
                                <th width="280px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hargaHariIni as $item)
                                <tr>
                                    <td>{{ $item->id_hotel }}</td>
                                    <td>{{ $item->kamar_tersedia }}</td>
                                    <td>{{ $item->tanggal }}</td>
                                    <td>{{ $item->id_kamar }}</td>
                                    <td>
                                       
                                        <a class="btn btn-primary btn-sm" href="{{ route('harga_hari_ini.edit', $item->id_hotel) }}">Edit</a>

                                        <form action="{{ route('harga_hari_ini.destroy', $item->id_hotel) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('dashboard') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
