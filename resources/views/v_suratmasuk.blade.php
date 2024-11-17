@extends('layout.v_template')
@section('title','Surat Masuk')


@section('content')
<a href="/suratmasuk/add" class="btn btn-primary btn-sm">Add</a> <br>

@if (session('pesan'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Success!</h4>
    {{ session('pesan') }}
  </div>
@endif

    <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>KODE</th>
                    <th>NAMA SURAT</th>
                    <th>JENIS SURAT</th>
                    <th>ASAL SURAT</th>
                    <th>FILE SURAT</th>
                    <th>Action</th>
                </tr>
            </thead>
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($suratmasuk as $suratmasuk)
                        <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $suratmasuk->kode_surat}}</td>
                                <td>{{ $suratmasuk->nama_surat}}</td>
                                <td>{{ $suratmasuk->jenis_surat}}</td>
                                <td>{{ $suratmasuk->asal_surat}}</td>
                                <td>{{ $suratmasuk->file_surat}}</td>
                                
                                <td>
                                    <a href="/suratmasuk/detail/{{$suratmasuk->id_surat}}" class="btn btn-sm btn-success">LIHAT SURAT</a>
                                    <a href="/suratmasuk/download/{{$suratmasuk->id_surat}}" class="btn btn-sm btn-warning">Download</a>

                                     <a href="{{route('suratmasuk.edit', $suratmasuk->id_surat)}}" class="btn btn-sm btn-warning">
                                        Edit
                                    </a>
                                    <form action="{{route('suratmasuk.delete', $suratmasuk->id_surat)}}" 
                                    	method="post">
                                    @csrf
                                    @method('DELETE')
                                    	<button class="btn btn-danger" type="submit">
                                    		Hapus
                                    	</button>
                                	</form>
                                </td>
                            </tr>
                    @endforeach
                </tbody>
         </table>
@endsection