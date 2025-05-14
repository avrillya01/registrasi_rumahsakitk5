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
                        <form action="{{ route('JadwalKuliahMuhamadAndhika.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Kode Matkul</label>
                                        <input type="text" class="form-control @error('kode_mk') is-invalid @enderror" name="kode_mk" value="{{ old('kode_mk', $data->kode_mk) }}" placeholder="Masukkan Kode Matkul">
                                        <!-- error message untuk nim -->
                                        @error('kode_mk')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Nama Matkul</label>
                                        <input type="text" class="form-control @error('nama_mk') is-invalid @enderror" name="nama_mk" value="{{ old('nama_mk', $data->nama_mk) }}" placeholder="Masukkan Nama Matkul">
                                        <!-- error message untuk name -->
                                        @error('nama_mk')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Jurusan</label>
                                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan" value="{{ old('jurusan', $data->jurusan) }}" placeholder="Masukkan Jurusan">
                                        <!-- error message untuk jurusan -->
                                        @error('jurusan')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Tahun Akademik</label>
                                        <input type="number" class="form-control @error('tahun_akademik') is-invalid @enderror" name="tahun_akademik" value="{{ old('tahun_akademik', $data->tahun_akademik) }}" placeholder="Masukkan Tahun Akademik">
                                        <!-- error message tahun akademik-->
                                        @error('tahun_akademik')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Semester</label>
                                        <input type="number" class="form-control @error('semester') is-invalid @enderror" name="semester" value="{{ old('semester', $data->semester) }}" placeholder="Masukkan Semester">
                                        <!-- error message untuk semester -->
                                        @error('semester')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Nama Dosen</label>
                                        <input type="text" class="form-control @error('nama_dosen') is-invalid @enderror" name="nama_dosen" value="{{ old('nama_dosen', $data->nama_dosen) }}" placeholder="Masukkan Nama Dosen">
                                        <!-- error message untuk nama dosen -->
                                        @error('nama_dosen')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Ruang</label>
                                        <input type="text" class="form-control @error('ruang') is-invalid @enderror" name="ruang" value="{{ old('ruang', $data->ruang) }}" placeholder="Masukkan Ruang">
                                        <!-- error message untuk ruangan -->
                                        @error('ruang')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Hari</label>
                                        <input type="text" class="form-control @error('hari') is-invalid @enderror" name="hari" value="{{ old('hari', $data->hari) }}" placeholder="Masukkan hari">
                                        <!-- error message untuk hari -->
                                        @error('hari')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Jam Mulai</label>
                                        <input type="time" class="form-control @error('jam_mulai') is-invalid @enderror" name="jam_mulai" value="{{ old('jam_mulai', $data->jam_mulai) }}" placeholder="Masukkan Jam Mulai">
                                        <!-- error message untuk jam mulai -->
                                        @error('jam_mulai')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Jam Selesai</label>
                                        <input type="time" class="form-control @error('jam_selesai') is-invalid @enderror" name="jam_selesai" value="{{ old('jam_selesai', $data->jam_selesai) }}" placeholder="Masukkan Jam Selesai">
                                        <!-- error message untuk jam selesai -->
                                        @error('jam_selesai')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-md btn-primary me-3">Update Data</button>
                            <a href="{{ route('JadwalKuliahMuhamadAndhika.index') }}" class="btn btn-md btn-info">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
