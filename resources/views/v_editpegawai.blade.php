@extends('layout.v_template')
@section('title','Add Pegawai')

@section('content')

<form action="{{route('pegawai.update', $pegawai)}}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="content">
    <div class="row">
        <div class="col-sm-6">

            <div class="form -group">
            <label >NIP</label> 
            <input name="nip" class="form-control" value="{{ old('nip') }}"> 
            <div class="text-danger">
                @error('nip')
                    {{ $message }}
                @enderror
            </div>
            </div></br>

            <div class="form -group">
                    <label >Nama Pegawai</label> 
                    <input name="nama_pegawai" class="form-control" value="{{ old('nama_pegawai') }}">
                    <div class="text-danger">
                @error('nama_pegawai')
                    {{ $message }}
                @enderror
            </div>
            </div></br>

         <div class="form -group">
                    <label >posisi</label> 
                    <input name="posisi" class="form-control" value="{{ old('posisi') }}">
                    <div class="text-danger">
                @error('posisi')
                    {{ $message }}
                @enderror
            </div>
                </div></br>

          <div class="form -group">
                    <label >Foto Pegawai</label> 
                <input type="file" name="foto_pegawai" class="form-control">
                <div class="text-danger">
                @error('foto_pegawai')
                    {{ $message }}
                @enderror
            </div>


            <div class="form -group">
            <button class="btn btn-primary btn-sm">Simpan</button>
            </div>
            

        </div>
    </div>
</div>
</form>

@endsection