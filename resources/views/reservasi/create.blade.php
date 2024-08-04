<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Reservasi</title>
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
            <h1 class="mb-4">Add Reservation</h1>

            <form action="{{ route('reservasi.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="customer_id" class="form-label">Customer</label>
                    <select name="customer_id" id="customer_id" class="form-select" required>
                        @foreach ($c as $res)
                            <option value="{{ $res->customer_id }}">{{ $res->nama_customer }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="tanggal" class="form-label">Date</label>
                    <input type="date" name="tanggal" class="form-control" id="tanggal" required>
                </div>

                <div class="mb-3">
                    <label for="tanggal_mulai" class="form-label">Start Date</label>
                    <input type="date" name="tanggal_mulai" class="form-control" id="tanggal_mulai" required>
                </div>

                <div class="mb-3">
                    <label for="tanggal_akhir" class="form-label">End Date</label>
                    <input type="date" name="tanggal_akhir" class="form-control" id="tanggal_akhir" required>
                </div>

                <div class="mb-3">
                    <label for="id_hotel" class="form-label">Hotel ID</label>
                    <select name="id_hotel" id="id_hotel" class="form-select" required>
                        @foreach ($k as $res)
                            <option value="{{ $res->id_hotel }}">{{ $res->id_hotel }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Tambah Reservation</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
