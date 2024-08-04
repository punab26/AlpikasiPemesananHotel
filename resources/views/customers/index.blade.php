<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengguna - Customers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f0f0;
        }
        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h3 class="text-center mb-4">Data Pengguna</h3>
                    <hr>
                    <a href="{{ route('customers.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama Customer</th>
                                <th scope="col">Email</th>
                                <th scope="col">Negara</th>
                                <th scope="col" style="width: 20%">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($customers as $index => $akun)
                                <tr>
                                    <td class="text-center">{{ ++$index }}</td>
                                    <td>{{ $akun->NIK }}</td>
                                    <td>{{ $akun->nama_customer }}</td>
                                    <td>{{ $akun->email }}</td>
                                    <td>{{ $akun->country }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('customers.destroy', $akun->customer_id) }}" method="POST">
                                            <a href="{{ route('customers.show', $akun->customer_id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                            <a href="{{ route('customers.edit', $akun->customer_id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">
                                        <div class="alert alert-danger">
                                            Data Customer Belum Ada.
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <a href="{{ route('dashboard') }}" class="btn btn-md btn-info mb-3">KEMBALI</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
