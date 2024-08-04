<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User</title>
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
                    <h3 class="text-center my-4 text-black23">Data Pengguna</h3>
                    <hr>
                    <form action="{{ route('customers.update', $akun->customer_id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="NIK" class="form-label">NIK</label>
                            <input type="text" name="NIK" class="form-control" id="NIK" placeholder="Enter NIK" value="{{ old('NIK', $akun->NIK) }}">
                            @error('NIK')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nama_customer" class="form-label">Nama</label>
                            <input type="text" name="nama_customer" class="form-control" id="nama_customer" placeholder="Enter name" value="{{ old('nama_customer', $akun->nama_customer) }}">
                            @error('nama_customer')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="{{ old('email', $akun->email) }}">
                            @error('email')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="country" class="form-label">Negara</label>
                            <select class="form-control" name="country" id="country">
                                <option value="{{ old('country', $akun->country) }}">{{ old('country', $akun->country) }}</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Singapore">Singapore</option>
                            </select>
                            @error('country')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
