<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    
    public function index()
    {
        $data['list_pegawai'] = Pegawai::all();
        return view('admin.pegawai.index', $data);
    }

    
    public function create()
    {
        return view('admin.pegawai.create');
    }

    
    public function store(Request $request)
    {
        $pegawai = New Pegawai;
        $pegawai->nup = request('nup');
        $pegawai->nama = request('nama');
        $pegawai->tempat_lahir = request('tempat_lahir');
        $pegawai->tanggal_lahir = request('tanggal_lahir');
        $pegawai->email = request('email');
        $pegawai->username = request('username');
        $pegawai->password = request('password');
        $pegawai->alamat = request('alamat');
        $pegawai->handleUploadFoto();

        $pegawai->save();

        return redirect('admin/pegawai')->with('primary', 'Data Berhasil di Simpan');
    }

    public function show(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;

        return view('admin.pegawai.show', $data);
    }

   
    public function edit(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;

        return view('admin.pegawai.edit', $data);
    }

    
    public function update(Pegawai $pegawai)
    {
        $pegawai->nup = request('nup');
        $pegawai->nama = request('nama');
        $pegawai->tempat_lahir = request('tempat_lahir');
        $pegawai->tanggal_lahir = request('tanggal_lahir');
        $pegawai->email = request('email');
        $pegawai->username = request('username');
        $pegawai->password = request('password');
        if (request('password')) $pegawai->alamat = request('alamat');
        $pegawai->handleUploadFoto();

        $pegawai->save();

        return redirect('admin/pegawai')->with('warning', 'Data Berhasil di Edit');
    }

   
    public function destroy($pegawai)
    {
        Pegawai::destroy($pegawai);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }
}
