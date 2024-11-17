@extends('layout.v_template')
@section('title','Pegawai')


@section('content')
<a href="/pegawai/add" class="btn btn-primary btn-sm">Add</a> <br>

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
                    <th>NIP</th>
                    <th>NAMA GURU</th>
                    <th>POSISI</th>
                    <th>FOTO PEGAWAI</th>
                    <th>Action</th>
                </tr>
            </thead>
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($pegawai as $pegawai)
                        <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $pegawai->nip}}</td>
                                <td>{{ $pegawai->nama_pegawai}}</td>
                                <td>{{ $pegawai->posisi}}</td>
                                <td><img src="{{url('foto_pegawai/'.$pegawai->foto_pegawai)}}" width="150px"></td>
                                <td>
                                    <a href="/pegawai/detail/{{$pegawai->id_pegawai}}" class="btn btn-sm btn-success">Detail</a>
                                    <a href="{{route('pegawai.edit', $pegawai->id_pegawai)}}" class="btn btn-sm btn-warning">
                                        Edit
                                    </a>
                                    <form action="{{route('pegawai.delete', $pegawai->id_pegawai)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">
                                        Delete
                                    </button>
                                    </form>
                                </td>
                            </tr>
                    @endforeach
                </tbody>
         </table>
@endsection