<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
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
        .table {
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .alert {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Daftar Pembayaran</h1>
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('pembayaran.create') }}" class="btn btn-primary">Tambah Pembayaran</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID Payment</th>
                    <th>Customer</th>
                    <th>Tanggal</th>
                    <th>Metode Bayar</th>
                    <th>Invoice</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pembayarans as $pembayaran)
                    <tr>
                        <td>{{ $pembayaran->id_payment }}</td>
                        <td>{{ $pembayaran->customer->name }}</td>
                        <td>{{ $pembayaran->tanggal }}</td>
                        <td>{{ $pembayaran->metode_bayar }}</td>
                        <td>{{ $pembayaran->invoice->invoice_number }}</td>
                        <td>

                            <a href="{{ route('pembayaran.edit', $pembayaran->id_payment) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('pembayaran.destroy', $pembayaran->id_payment) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('dashboard') }}" class="btn btn-primary">Kembali</a>
    </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
