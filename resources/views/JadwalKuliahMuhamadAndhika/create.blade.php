<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambahkan Data</title>
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
                    <form action="{{ route('JadwalKuliahMuhamadAndhika.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <!-- Kode Matkul -->
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">Kode Matkul</label>
                                    <input type="text" class="form-control @error('kode_mk') is-invalid @enderror" name="kode_mk" value="{{ old('kode_mk') }}" placeholder="Masukkan Kode Matkul">
                                    @error('kode_mk')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Nama Matkul -->
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">Nama Matkul</label>
                                    <input type="text" class="form-control @error('nama_mk') is-invalid @enderror" name="nama_mk" value="{{ old('nama_mk') }}" placeholder="Masukkan Nama Matkul">
                                    @error('nama_mk')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Jurusan -->
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">Jurusan</label>
                                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan" value="{{ old('jurusan') }}" placeholder="Masukkan Jurusan">
                                    @error('jurusan')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Tahun Akademik -->
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">Tahun Akademik</label>
                                    <input type="number" class="form-control @error('tahun_akademik') is-invalid @enderror" name="tahun_akademik" value="{{ old('tahun_akademik') }}" placeholder="Masukkan Tahun Akademik">
                                    @error('tahun_akademik')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Semester -->
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">Semester</label>
                                    <input type="number" class="form-control @error('semester') is-invalid @enderror" name="semester" value="{{ old('semester') }}" placeholder="Masukkan Semester">
                                    @error('semester')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Nama Dosen -->
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">Nama Dosen</label>
                                    <input type="text" class="form-control @error('nama_dosen') is-invalid @enderror" name="nama_dosen" value="{{ old('nama_dosen') }}" placeholder="Masukkan Nama Dosen">
                                    @error('nama_dosen')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Ruang -->
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">Ruang</label>
                                    <input type="text" class="form-control @error('ruang') is-invalid @enderror" name="ruang" value="{{ old('ruang') }}" placeholder="Masukkan Ruang">
                                    @error('ruang')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Hari -->
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">Hari</label>
                                    <input type="text" class="form-control @error('hari') is-invalid @enderror" name="hari" value="{{ old('hari') }}" placeholder="Masukkan Hari">
                                    @error('hari')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Jam Mulai -->
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">Jam Mulai</label>
                                    <input type="time" class="form-control @error('jam_mulai') is-invalid @enderror" name="jam_mulai" value="{{ old('jam_mulai') }}">
                                    @error('jam_mulai')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Jam Selesai -->
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">Jam Selesai</label>
                                    <input type="time" class="form-control @error('jam_selesai') is-invalid @enderror" name="jam_selesai" value="{{ old('jam_selesai') }}">
                                    @error('jam_selesai')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Buttons -->
                        <button type="submit" class="btn btn-md btn-primary me-3">SAVE</button>
                        <button type="reset" class="btn btn-md btn-warning me-3">RESET</button>
                        <a href="{{ route('JadwalKuliahMuhamadAndhika.index') }}" class="btn btn-md btn-info">BACK</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
