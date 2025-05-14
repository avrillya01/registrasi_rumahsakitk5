<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-5">
        <div class="text-center mb-4">
            <h2 class="header-title fw-bold">Jadwal Kuliah</h2>
            <p class="text-muted mb-0">Muhamad Andhika Mahaputra Rohman</p>
            <p class="text-muted">241351031</p>
            <hr class="w-25 mx-auto">
        </div>

        <div class="card shadow-lg border-0 rounded">
            <div class="card-body">
                <div class="mb-3 text-end">
                    <a href="{{ route('JadwalKuliahMuhamadAndhika.create') }}" class="btn btn-success">
                        <i class="fa fa-plus me-1"></i> Tambah Jadwal
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered align-middle">
                        <thead>
                            <tr>
                                <th>Kode Matkul</th>
                                <th>Nama Matkul</th>
                                <th>Jurusan</th>
                                <th>Tahun Akademik</th>
                                <th>Semester</th>
                                <th>Nama Dosen</th>
                                <th>Ruang</th>
                                <th>Hari</th>
                                <th>Jam Mulai</th>
                                <th>Jam Selesai</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($dataArray as $data)
                            <tr>
                                <td>{{ $data->kode_mk }}</td>
                                <td>{{ $data->nama_mk }}</td>
                                <td>{{ $data->jurusan }}</td>
                                <td>{{ $data->tahun_akademik }}</td>
                                <td>{{ $data->semester }}</td>
                                <td>{{ $data->nama_dosen }}</td>
                                <td>{{ $data->ruang }}</td>
                                <td>{{ $data->hari }}</td>
                                <td>{{ $data->jam_mulai }}</td>
                                <td>{{ $data->jam_selesai }}</td>
                                <td>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('JadwalKuliahMuhamadAndhika.destroy', $data->id) }}" method="POST" class="d-flex justify-content-center gap-1">
                                        <a href="{{ route('JadwalKuliahMuhamadAndhika.show', $data->id) }}" class="btn btn-sm btn-secondary">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ route('JadwalKuliahMuhamadAndhika.edit', $data->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="11" class="text-center text-danger">Data belum tersedia.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    {{ $dataArray->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap & SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if(session('success'))
        Swal.fire({
            icon: "success",
            title: "BERHASIL",
            text: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 2000
        });
        @elseif(session('error'))
        Swal.fire({
            icon: "error",
            title: "GAGAL!",
            text: "{{ session('error') }}",
            showConfirmButton: false,
            timer: 2000
        });
        @endif
    </script>
</body>
<style>
        body {
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            color: #ffffff;
            font-family: sans-serif;
        }

        .header-title {
            font-size: 2rem;
            color: white;
        }

        .text-muted {
            color: white !important;
        }

        .card {
            background-color: #2c5364;
            border: none;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .table thead th {
            background-color: #283e51;
            color: #ffffff;
            text-align: center;
            font-weight: 600;
        }

        .table tbody td {
            vertical-align: middle;
            text-align: center;
            font-weight: 400;
        }

        .table tbody tr:hover {
            background-color: #f1f1f1;
        }

        .btn i {
            pointer-events: none;
        }

        .btn-success {
            background-color: #283e51;
            border-color: white;
            color: white;
            transition: all 0.3s ease;
        }

        .btn-success:hover {
            background-color: #007bff;
            border-color: white;
        }

        .btn-primary {
            background-color: #74b9ff;
            border-color: #74b9ff;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0984e3;
            border-color: #0984e3;
        }

        .btn-secondary {
            background-color: #b2bec3;
            border-color: #b2bec3;
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: #dfe6e9;
            border-color: #dfe6e9;
        }

        .btn-danger {
            background-color: #ff7675;
            border-color: #ff7675;
            transition: all 0.3s ease;
        }

        .btn-danger:hover {
            background-color: #e74c3c;
            border-color: #e74c3c;
        }

        .btn-info {
            background-color: #81ecec;
            border-color: #81ecec;
            transition: all 0.3s ease;
        }

        .btn-info:hover {
            background-color: #00cec9;
            border-color: #00cec9;
        }

        .table-responsive {
            margin-top: 20px;
        }

        .table td:nth-child(6), .table th:nth-child(6) {
            width: 300px;
        }
    </style>
</html>
