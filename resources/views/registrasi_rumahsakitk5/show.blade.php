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
                        <h4 class="mb-0">Jadwal Dokter</h4>
                    </div>
                    
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item list-group-item-custom"><strong>Nama Dokter:</strong> <span class="badge bg-secondary">{{ $data->nama_dokter }}</span></li>
                            <li class="list-group-item list-group-item-custom"><strong>Dokter Spesialis:</strong> {{ $data->dokter_spesialis }}</li>
                            <li class="list-group-item list-group-item-custom"><strong>Tanggal Berapa:</strong> {{ $data->tanggal_berapa }}</li>
                            <li class="list-group-item list-group-item-custom"><strong>Jam Berapa:</strong> {{ $data->jam_berapa }}</li>
                        </ul>
                        <div class="text-end mt-4">
                            <a href="{{ route('registrasi_rumahsakitk5.index') }}" class="btn btn-outline-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
