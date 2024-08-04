<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kamar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title text-center my-4 text-blck">Data Kamar</h3>
                    <hr>
                    
                    <a href="{{ route('kamar.create') }}" class="btn btn-info mb-3">Tambah Kamar</a>
                    
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kamar</th>
                                    <th scope="col">Jenis Kamar</th>
                                    <th scope="col">Ukuran</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col" style="width: 20%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($kamar as $index => $kamar)
                                    <tr>
                                        <td class="text-center">{{ ++$index }}</td>
                                        <td>{{ $kamar->nama_kamar }}</td>
                                        <td>{{ $kamar->jenis_kamar }}</td>
                                        <td>{{ $kamar->ukuran_kamar }}</td>
                                        <td>{{ $kamar->harga }}</td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group" aria-label="Actions">
                                                <a href="{{ route('kamar.show', $kamar->id_kamar) }}" class="btn btn-dark">Show</a>
                                                <a href="{{ route('kamar.edit', $kamar->id_kamar) }}" class="btn btn-primary">Edit</a>
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('kamar.destroy', $kamar->id_kamar) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Data Kamar Belum Ada.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    
                    <a href="{{ route('dashboard') }}" class="btn btn-info mb-3">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
