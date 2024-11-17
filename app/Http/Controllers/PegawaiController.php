<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PegawaiModel;

class PegawaiController extends Controller
{
    
    public function __construct()
    {
        $this->PegawaiModel = new PegawaiModel();
        
    }
    
    public function index()
    {
        $data = [
            'pegawai' => $this->PegawaiModel->allData(),
        ];
        return view('v_pegawai', $data);
    }

    public function detail($id_pegawai)
    {
        if (!$this->PegawaiModel->detailData($id_pegawai)) {
            abort(404);
        }

        $data = [
            'pegawai' => $this->PegawaiModel->detailData($id_pegawai),
        ];
        return view('v_detailpegawai', $data);
    }

    public function add()
    {
        return view('v_addpegawai');
    }
    
    public function tambah()
    {       
        $file   = Request()->file('foto_pegawai');
        $fileName   = time() .'.'. $file->getClientOriginalName();
        $file->move(public_path('foto_pegawai'), $fileName);

        $data = [
            'nip' => Request()->nip,
            'nama_pegawai' => Request()->nama_pegawai,
            'posisi' => Request()->posisi,
            'foto_pegawai' => $fileName,            
        ];
        
        PegawaiModel::create($data);
        return redirect('/pegawai')->with('pesan','Data Berhasil Ditambahkan !!!');
    }

    public function edit(PegawaiModel $pegawai)
    {
        //dd($pegawai->nip);
        return view('v_editpegawai', ['pegawai' => $pegawai]);
    }

    public function update(Request $request, PegawaiModel $pegawai)
    {
        if($request->has('foto_pegawai')){
            unlink(public_path('foto_pegawai/').$pegawai->foto_pegawai);
            $file   = Request()->file('foto_pegawai');
            $fileName   = time() .'.'. $file->getClientOriginalName();
            $file->move(public_path('foto_pegawai'), $fileName);    
        }
        
        $data = [
            'nip' => Request()->nip,
            'nama_pegawai' => Request()->nama_pegawai,
            'posisi' => Request()->posisi,
            'foto_pegawai' => $fileName ?? $pegawai->foto_pegawai            
        ];
        
        $pegawai->update($data);
        return redirect('/pegawai')->with('pesan','Data Berhasil Diubah !!!');
    }

    public function delete(PegawaiModel $pegawai)
    {
        unlink(public_path('foto_pegawai/').$pegawai->foto_pegawai);
        $pegawai->delete();
        return redirect('/pegawai')->with('pesan','Data Berhasil Dihapus !!!');
    }
}
