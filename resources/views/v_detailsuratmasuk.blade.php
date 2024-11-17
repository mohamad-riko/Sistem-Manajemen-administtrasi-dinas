@extends('layout.v_template')
@section('title','Detail Surat Masuk')
@section('content')

<table class="table">
    <tr>
        <th width="100px">KODE SURAT</th>
        <th width="30px">:</th>
        <th>{{ $suratmasuk->kode_surat }}</th>
    </tr>
    <tr>
        <th width="100px">NAMA SURAT</th>
        <th width="30px">:</th>
        <th>{{ $suratmasuk->nama_surat }}</th>
    </tr>
    <tr>
        <th width="100px">JENIS SURAT</th>
        <th width="30px">:</th>
        <th>{{ $suratmasuk->jenis_surat }}</th>
    </tr>
     <tr>
        <th width="100px">ASAL SURAT</th>
        <th width="30px">:</th>
        <th>{{ $suratmasuk->asal_surat }}</th>
    </tr>
       <th> <a href="/suratmasuk" class="btn btn-success tbn-sm">Kembali</a></th>
    </tr>
</table>

@endsection