<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feeduiten-apps</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h1 class="card-title">Update Transaksi</h1>
                        </div>
                        <form action="/update/{{ $transaksi->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="nominal" class="form-label">Nominal</label>
                                <input type="number" class="form-control" id="nominal" name="nominal"
                                    placeholder="Masukkan Nominal" value="{{ $transaksi->nominal }}">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                                    placeholder="Masukkan Deskripsi" value="{{ $transaksi->deskripsi }}">
                            </div>
                            <div class="mb-3">
                                <label for="tipe" class="form-label">Pilih Tipe</label>
                                <select class="form-select" name="tipe" id="tipe">
                                    <option selected>Pilih jenis yang sesuai</option>
                                    <option value="1" {{ $transaksi->tipe == 1 ? 'selected' : '' }}>Pemasukan</option>
                                    <option value="0" {{ $transaksi->tipe == 0 ? 'selected' : '' }}>Pengeluaran</option>
                                </select>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="/" class="btn btn-primary">Kembali</a>
                                <button type="submit" class="btn btn-warning">Update</button>
                            </div>
                        </form>
                        <form action="/delete/{{ $transaksi->id }}" method="POST" class="mt-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>