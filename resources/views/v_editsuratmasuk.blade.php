@extends('layout.v_template')
@section('title','Edit Surat Masuk')

@section('content')

<form action="{{route('suratmasuk.update', $suratmasuk)}}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="content">
    <div class="row">
        <div class="col-sm-6">

            <div class="form -group">
            <label >KODE SURAT</label> 
            <input name="kode_surat" class="form-control" value="{{ old('kode_surat') }}"> 
            <div class="text-danger">
                @error('kode_surat')
                    {{ $message }}
                @enderror
            </div>
            </div></br>

            <div class="form -group">
                    <label >Nama Surat</label> 
                    <input name="nama_surat" class="form-control" value="{{ old('nama_surat') }}">
                    <div class="text-danger">
                @error('nama_surat')
                    {{ $message }}
                @enderror
            </div>
            </div></br>

         <div class="form -group">
                    <label >JENIS SURAT</label> 
                    <input name="jenis_surat" class="form-control" value="{{ old('jenis_surat') }}">
                    <div class="text-danger">
                @error('jenis_surat')
                    {{ $message }}
                @enderror
            </div>
                </div></br>

                <div class="form -group">
                    <label >ASAL SURAT</label> 
                    <input name="asal_surat" class="form-control" value="{{ old('asal_surat') }}">
                    <div class="text-danger">
                @error('asal_surat')
                    {{ $message }}
                @enderror
            </div>
                </div></br>

          <div class="form -group">
                    <label >FILE SURAT</label> 
                <input type="file" name="file_surat" class="form-control">
                <div class="text-danger">
                @error('file_surat')
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