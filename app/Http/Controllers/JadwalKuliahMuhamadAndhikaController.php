<?php

namespace App\Http\Controllers;

use App\Models\JadwalKuliahMuhamadAndhika;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class JadwalKuliahMuhamadAndhikaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $dataArray = JadwalKuliahMuhamadAndhika::latest()->paginate(10);
        return view('JadwalKuliahMuhamadAndhika/index', compact('dataArray'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('JadwalKuliahMuhamadAndhika/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'kode_mk' => 'required|min:5',
            'nama_mk' => 'required|min:5',
            'jurusan' => 'required|min:10',
            'tahun_akademik' => 'required|min:5',
            'semester' => 'required|min:1',
            'nama_dosen' => 'required|min:5',
            'ruang' => 'required|min:1',
            'hari' => 'required|min:4',
            'jam_mulai' => 'required|min:4',
            'jam_selesai' => 'required|min:4'
            ]);
    
            //create
            JadwalKuliahMuhamadAndhika::create([
                'kode_mk' => $request->kode_mk,
                'nama_mk' => $request->nama_mk,
                'jurusan' => $request->jurusan,
                'tahun_akademik' => $request->tahun_akademik,
                'semester' => $request->semester,
                'nama_dosen' => $request->nama_dosen,
                'ruang' => $request->ruang,
                'hari' => $request->hari,
                'jam_mulai' => $request->jam_mulai,
                'jam_selesai' => $request->jam_selesai
            ]);
    
            //kembali ke index
            return redirect()->route('JadwalKuliahMuhamadAndhika.index')->with(['success' => 'data berhasil disimpan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = JadwalKuliahMuhamadAndhika::FindOrFail($id);
        return view('JadwalKuliahMuhamadAndhika/show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = JadwalKuliahMuhamadAndhika::FindOrFail($id);
        return view('JadwalKuliahMuhamadAndhika/edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'kode_mk' => 'required|min:5',
            'nama_mk' => 'required|min:5',
            'jurusan' => 'required|min:10',
            'tahun_akademik' => 'required|min:5',
            'semester' => 'required|min:1',
            'nama_dosen' => 'required|min:5',
            'ruang' => 'required|min:1',
            'hari' => 'required|min:4',
            'jam_mulai' => 'required|min:4',
            'jam_selesai' => 'required|min:4'
            ]);
            $data = JadwalKuliahMuhamadAndhika::FindOrFail($id);
            
            //update
            $data->update([
            'kode_mk' => $request->kode_mk,
            'nama_mk' => $request->nama_mk,
            'jurusan' => $request->jurusan,
            'tahun_akademik' => $request->tahun_akademik,
            'semester' => $request->semester,
            'nama_dosen' => $request->nama_dosen,
            'ruang' => $request->ruang,
            'hari' => $request->hari,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai
            ]);
            
            //redirect
            return redirect()->route('JadwalKuliahMuhamadAndhika.index')->with(['success' => 'data berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //get by id
        $data = JadwalKuliahMuhamadAndhika::FindOrFail($id);

        //hapus data
        $data ->delete();

        //redirect to index
        return redirect()->route('JadwalKuliahMuhamadAndhika.index')->with(['success' => 'data berhasil dihapus']);
    }
}
