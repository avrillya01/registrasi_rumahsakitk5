<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            color: #e0e0e0;
        }
        .card-custom {
            background-color: #2c3e50;
            color: #ecf0f1;
            border-radius: 10px;
        }
        .card-header-custom {
            background-color: #203a43;
            color: white;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .list-group-item-custom {
            background-color: transparent;
            border-bottom: 1px solid #3d566e;
            color: #ecf0f1;
        }
        .btn-outline-primary {
            color: #3498db;
            border-color: #3498db;
        }
        .btn-outline-primary:hover {
            background-color: #3498db;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0 card-custom">
                    <div class="card-header text-center card-header-custom">
                        <h4 class="mb-0">Detail Mata Kuliah</h4>
                    </div>
                    
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item list-group-item-custom"><strong>Kode Matkul:</strong> <span class="badge bg-secondary">{{ $data->kode_mk }}</span></li>
                            <li class="list-group-item list-group-item-custom"><strong>Nama Matkul:</strong> {{ $data->nama_mk }}</li>
                            <li class="list-group-item list-group-item-custom"><strong>Jurusan:</strong> {{ $data->jurusan }}</li>
                            <li class="list-group-item list-group-item-custom"><strong>Tahun Akademik:</strong> {{ $data->tahun_akademik }}</li>
                            <li class="list-group-item list-group-item-custom"><strong>Semester:</strong> {{ $data->semester }}</li>
                            <li class="list-group-item list-group-item-custom"><strong>Nama Dosen:</strong> {{ $data->nama_dosen }}</li>
                            <li class="list-group-item list-group-item-custom"><strong>Ruang:</strong> {{ $data->ruang }}</li>
                            <li class="list-group-item list-group-item-custom"><strong>Hari:</strong> {{ $data->hari }}</li>
                            <li class="list-group-item list-group-item-custom"><strong>Jam Mulai:</strong> {{ $data->jam_mulai }}</li>
                            <li class="list-group-item list-group-item-custom"><strong>Jam Selesai:</strong> {{ $data->jam_selesai }}</li>
                        </ul>
                        <div class="text-end mt-4">
                            <a href="{{ route('JadwalKuliahMuhamadAndhika.index') }}" class="btn btn-outline-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
