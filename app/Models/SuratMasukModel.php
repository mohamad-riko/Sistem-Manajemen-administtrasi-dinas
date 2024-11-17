<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SuratMasukModel extends Model
{
    protected $table = 'tbl_suratmasuk';
    
    protected $fillable = ['kode_surat','nama_surat','jenis_surat','asal_surat','file_surat'];

    public $timestamps = false;
    public $primaryKey = 'id_surat';

    public function allData()
    {
        return DB::table('tbl_suratmasuk')->get();
    }

    public function detailData($id_surat)
    {
        return DB::table('tbl_suratmasuk')->where('id_surat', $id_surat)->first();
    }

    public function addData($data)
    {
        DB::table('tbl_suratmasuk')->tambah($data);
    }
}
 


