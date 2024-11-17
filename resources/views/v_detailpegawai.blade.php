@extends('layout.v_template')
@section('title','Detail Pegawai')
@section('content')

<table class="table">
    <tr>
        <th width="100px">NIP</th>
        <th width="30px">:</th>
        <th>{{ $pegawai->nip }}</th>
    </tr>
    <tr>
        <th width="100px">NAMA PEGAWAI</th>
        <th width="30px">:</th>
        <th>{{ $pegawai->nama_pegawai }}</th>
    </tr>
    <tr>
        <th width="100px">POSISI</th>
        <th width="30px">:</th>
        <th>{{ $pegawai->posisi }}</th>
    </tr>
    <tr>
        <th width="100px">FOTO</th>
        <th width="30px">:</th>
        <th> <img src="{{url('foto_pegawai/'. $pegawai->foto_pegawai)}}" width="400px"> </th>
    </tr>
    <tr>
       <th> <a href="/pegawai" class="btn btn-success tbn-sm">Kembali</a></th>
    </tr>
</table>

@endsection