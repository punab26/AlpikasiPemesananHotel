<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            max-width: 600px;
            margin-top: 40px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container mx-auto">
            <h1 class="mb-4">Tambah Pembayaran</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{route('pembayaran.update') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="customer_id" class="form-label">Customer</label>
                    <select name="customer_id" id="customer_id" class="form-select" required>
                        @foreach ($customers as $customer)
                            <option value="{{ $customer->customer_id }}">{{ $customer->nama_customer }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="metode_bayar" class="form-label">Metode Bayar</label>
                    <select name="metode_bayar" id="metode_bayar" class="form-select" required>
                        <option value="cash">Cash</option>
                        <option value="transfer">Transfer</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="id_invoice" class="form-label">Invoice</label>
                    <select name="id_invoice" id="id_invoice" class="form-select" required>
                        @foreach ($invoices as $invoice)
                            <option value="{{ $invoice->id_invoice }}">{{ $invoice->id_reservasi }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                    <a href="{{ route('pembayaran.index') }}" class="btn btn-primary mt-3">Kembali</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
