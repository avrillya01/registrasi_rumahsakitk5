<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: linear-gradient(to right, #0f2027, #203a43, #2c5364)">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('registrasi_rumahsakitk5.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Nama Dokter</label>
                                        <input type="text" class="form-control @error('nama_dokter') is-invalid @enderror" name="nama_dokter" value="{{ old('nama_dokter', $data->nama_dokter) }}" placeholder="Masukkan Nama Dokter">
                                        <!-- error message untuk Nama Dokter -->
                                        @error('nama_dokter')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Dokter Spesialis</label>
                                        <input type="text" class="form-control @error('dokter_spesialis') is-invalid @enderror" name="dokter_spesialis" value="{{ old('dokter_spesialis', $data->dokter_spesialis) }}" placeholder="Masukkan Dokter Spesialis">
                                        <!-- error message untuk Dokter Spesialis -->
                                        @error('dokter_spesialis')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Tanggal Berapa</label>
                                        <input type="text" class="form-control @error('tanggal_berapa') is-invalid @enderror" name="tanggal_berapa" value="{{ old('tanggal_berapa', $data->tanggal_berapa) }}" placeholder="Masukkan Tanggal Berapa">
                                        <!-- error message untuk Tanggal Berapa -->
                                        @error('jurusan')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Jam Berapa</label>
                                        <input type="time" class="form-control @error('jam_berapa') is-invalid @enderror" name="jam_berapa" value="{{ old('jam_berapa', $data->jam_berapa) }}" placeholder="Masukkan Jam Berapa">
                                        <!-- error message untuk jam berapa -->
                                        @error('jam_berapa')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-md btn-primary me-3">Update Data</button>
                            <a href="{{ route('registrasi_rumahsakitk5.index') }}" class="btn btn-md btn-info">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
