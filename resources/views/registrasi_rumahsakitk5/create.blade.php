<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jadwal Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
        }
        .custom-form {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 25px;
        }
        .custom-form label {
            color: #333333;
        }
        .custom-form .form-control {
            background-color: #ffffff;
            color: #212529;
            border: 1px solid #ced4da;
        }
        .custom-form .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .custom-form .btn-warning {
            background-color: #ffc107;
            border: none;
        }
        .custom-form .btn-info {
            background-color: #17a2b8;
            border: none;
        }
    </style>
</head>

<body>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="custom-form shadow-sm">
                    <form action="{{ route('registrasi_rumahsakitk5.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <!-- Nama Dokter -->
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">Nama Dokter</label>
                                    <input type="text" class="form-control @error('nama_dokter') is-invalid @enderror" name="nama_dokter" value="{{ old('nama_dokter') }}" placeholder="Masukkan Nama Dokter">
                                    @error('nama_dokter')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Dokter Spesialis -->
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">Dokter Spesialis</label>
                                    <input type="text" class="form-control @error('dokter_spesialis') is-invalid @enderror" name="dokter_spesialis" value="{{ old('dokter_spesialis') }}" placeholder="Masukkan Dokter Spesialis">
                                    @error('dokter_spesialis')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Tanggal Berapa -->
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">Tanggal Berapa</label>
                                    <input type="text" class="form-control @error('tanggal_berapa') is-invalid @enderror" name="tanggal_berapa" value="{{ old('tanggal_berapa') }}" placeholder="Masukkan Tanggal Berapa">
                                    @error('tanggal_berapa')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Jam Berapa -->
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">Jam Berapa</label>
                                    <input type="time" class="form-control @error('jam_berapa') is-invalid @enderror" name="jam_berapa" value="{{ old('jam_berapa') }}">
                                    @error('jam_berapa')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                        <!-- Buttons -->
                        <button type="submit" class="btn btn-md btn-primary me-3">SAVE</button>
                        <button type="reset" class="btn btn-md btn-warning me-3">RESET</button>
                        <a href="{{ route('registrasi_rumahsakitk5.index') }}" class="btn btn-md btn-info">BACK</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
