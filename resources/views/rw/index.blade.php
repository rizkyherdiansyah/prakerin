@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if (session('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
        
                    </div>
                    <div class="card-body">
                        <a href="{{ route('rw.create') }}" class="btn btn-primary mb-3 float-right"><i
                                class="fa fa-plus-circle"></i>
                            Tambah Data
                        </a>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="datatable">
                                <thead>
                                    <tr>
                                        <th>
                                            <center>No</center>
                                        </th>
                                        <th>
                                            <center>RW</center>
                                        </th>
                                        <th>
                                            <center>Nama Kelurahan/Desa</center>
                                        </th>
                                        <th>
                                            <center>Nama Kecamatan</center>
                                        </th>
                                        <th>
                                            <center>Aksi</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no=1; @endphp
                                    @foreach ($rw as $data)
                                        <tr>
                                            <th scope="row">
                                                <center>{{ $no++ }}</center>
                                            </th>
                                            <td>
                                                <center>{{ $data->nama }}</center>
                                            </td>
                                            <td>
                                                <center>{{ $data->kelurahan->nama_kelurahan }}</center>
                                            </td>
                                            <td>
                                                <center>{{ $data->kelurahan->kecamatan->nama_kecamatan }}</center>
                                            </td>
                                            <td style="text-align: center;">
                                                <form action="{{ route('rw.destroy', $data->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('rw.edit', $data->id) }}"
                                                        class="btn btn-outline-success btn-sm"><i class="fa fa-edit">
                                                            Edit</i></a>
                                                    <a href="{{ route('rw.show', $data->id) }}"
                                                        class="btn btn-outline-warning btn-sm"><i class="fa fa-eye"></i>
                                                        Show</a>
                                                    <button type="submit" onclick="return confirm('Apakah Anda Yakin ?')"
                                                        class="btn btn-outline-danger btn-sm"><i class="fa fa-trash-alt">
                                                            Hapus</i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection