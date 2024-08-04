<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Harga Hari Ini</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            max-width: 600px;
            margin-top: 40px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="form-container mx-auto">
            <h2 class="mb-4">Add New Harga Hari Ini</h2>
            <a href="{{ route('harga_hari_ini.index') }}" class="btn btn-primary mb-3">Back</a>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('harga_hari_ini.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="available_room" class="form-label"><strong>Available Room:</strong></label>
                    <input type="text" name="available_room" class="form-control" placeholder="Available Room" required>
                </div>

                <div class="mb-3">
                    <label for="tanggal" class="form-label"><strong>Date:</strong></label>
                    <input type="date" name="tanggal" class="form-control" placeholder="Date" required>
                </div>

                <div class="mb-3">
                    <label for="id_kamar" class="form-label"><strong>ID Kamar:</strong></label>
                    <select name="id_kamar" id="id_kamar" class="form-select" required>
                        @foreach ($k as $res)
                            <option value="{{ $res->id_kamar }}">{{ $res->id_kamar }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
