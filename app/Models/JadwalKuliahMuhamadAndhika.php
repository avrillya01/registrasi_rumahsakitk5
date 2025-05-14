<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKuliahMuhamadAndhika extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_mk', 'nama_mk', 'jurusan', 'tahun_akademik',
        'semester', 'nama_dosen', 'ruang', 'hari', 'jam_mulai', 'jam_selesai'
    ];

    protected $table = 'jadwal_kuliah_muhamad_andhikas';
}
