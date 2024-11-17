<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratMasukModel;

class SuratMasukController extends Controller
{
    
    public function __construct()
    {
        $this->SuratMasukModel = new SuratMasukModel();
        
    }
    
    public function index()
    {
        $data = [
            'suratmasuk' => $this->SuratMasukModel->allData(),
        ];
        return view('v_suratmasuk', $data);
    }

    public function detail($id_surat)
    {
        if (!$this->SuratMasukModel->detailData($id_surat)) {
            abort(404);
        }

        $data = [
            'suratmasuk' => $this->SuratMasukModel->detailData($id_surat),
        ];
        return view('v_detailsuratmasuk', $data);
    }

    public function add()
    {
        return view('v_addsuratmasuk');
    }
    
    public function tambah()
    {
       
        $file   = Request()->file('file_surat');
        $fileName   = time() .'.'. $file->getClientOriginalName();
        $file->move(public_path('file_surat'), $fileName);


        $data = [
            'kode_surat' => Request()->kode_surat,
            'nama_surat' => Request()->nama_surat,
            'jenis_surat' => Request()->jenis_surat,
            'asal_surat' => Request()->asal_surat,
            'file_surat' => $fileName,            
        ];
        
        SuratMasukModel::create($data);
        return redirect('/suratmasuk')->with('pesan','Data Berhasil Ditambahkan !!!');


    }

    public function download($id_surat)
    {
    	$surat = SuratMasukModel::find($id_surat);
    	return response()->download(public_path("file_surat/").$surat->file_surat);

    }
     public function edit(SuratMasukModel $suratmasuk)
    {
        //dd($pegawai->nip);
        return view('v_editsuratmasuk', ['suratmasuk' => $suratmasuk]);
    }

    public function update(Request $request, SuratMasukModel $suratmasuk)
    {
        if($request->has('file_surat')){
            unlink(public_path('file_surat/').$suratmasuk->file_surat);
            $file   = Request()->file('file_surat');
            $fileName   = time() .'.'. $file->getClientOriginalName();
            $file->move(public_path('file_surat'), $fileName);    
        }
        
        $data = [
            'kode_surat' => Request()->kode_surat,
            'nama_surat' => Request()->nama_surat,
            'jenis_surat' => Request()->jenis_surat,
            'asal_surat' => Request()->asal_surat,
            'file_surat' => $fileName ?? $suratmasuk->file_surat            
        ];
        
        $suratmasuk->update($data);
        return redirect('/suratmasuk')->with('pesan','Data Berhasil Diubah !!!');
    }

    public function delete(SuratMasukModel $suratmasuk)
    {
        unlink(public_path('file_surat/').$suratmasuk->file_surat);
        $suratmasuk->delete();
        return redirect('/suratmasuk')->with('pesan','Data Berhasil Dihapus !!!');
    }
}
