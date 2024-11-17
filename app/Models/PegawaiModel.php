<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PegawaiModel extends Model
{
    protected $table = 'tbl_pegawai';
    
    protected $fillable = ['nip','nama_pegawai','posisi','foto_pegawai'];

    public $timestamps = false;
    public $primaryKey = 'id_pegawai';

    public function allData()
    {
        return DB::table('tbl_pegawai')->get();
    }

    public function detailData($id_pegawai)
    {
        return DB::table('tbl_pegawai')->where('id_pegawai', $id_pegawai)->first();
    }

    public function addData($data)
    {
        DB::table('tbl_pegawai')->tambah($data);
    }
}
 


