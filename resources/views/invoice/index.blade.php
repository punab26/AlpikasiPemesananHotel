<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
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
    <h1>Invoices</h1>
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('invoice.create') }}" class="btn btn-primary">Tambah  Invoice</a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Deskripsi</th>
                    <th>Status</th>
                    <th>Besar DP</th>
                    <th>Reservasi ID</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($invoice as $invoice)
                    <tr>
                        <td>{{ $invoice->id_invoice }}</td>
                        <td>{{ $invoice->deskripsi }}</td>
                        <td>{{ $invoice->status }}</td>
                        <td>{{ $invoice->besar_dp }}</td>
                        <td>{{ $invoice->id_reservasi }}</td>
                        <td>
                        
                            <a href="{{ route('invoice.edit', $invoice->id_invoice) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('invoice.destroy', $invoice->id_invoice) }}" method="POST" class="d-inline">
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
