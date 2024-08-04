<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table-container {
            margin-top: 30px;
        }
        .alert {
            margin-top: 20px;
        }
        .btn-primary {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mb-0">Reservations</h1>
        <a href="{{ route('reservasi.create') }}" class="btn btn-primary">Tambah Reservation</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-container">
        <table class="table table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Customer ID</th>
                    <th>Date</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Hotel ID</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservasi as $r)
                    <tr>
                        <td>{{ $r->id_reservasi }}</td>
                        <td>{{ $r->customer_id }}</td>
                        <td>{{ $r->tanggal }}</td>
                        <td>{{ $r->tanggal_mulai }}</td>
                        <td>{{ $r->tanggal_akhir }}</td>
                        <td>{{ $r->id_hotel }}</td>
                        <td>
                            <a href="{{ route('reservasi.edit', $r->id_reservasi) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('reservasi.destroy', $r->id_reservasi) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('dashboard') }}" class="btn btn-primary">Kembali</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3
