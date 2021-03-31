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
                        <a href="{{ route('kasus2.create') }}" class="btn btn-primary mb-3 float-right"><i
                                class="fa fa-plus-circle"></i>
                            Tambah Data
                        </a>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="datatable">
                                <thead>
                                    <tr>
                        <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Lokasi</th>
                              <th scope="col">RW</th>
                              <th scope="col">Jumlah Positif</th>
                              <th scope="col">Jumlah Sembuh</th>
                              <th scope="col">Jumlah Meninggal</th>
                              <th scope="col">Tanggal</th>
                              <th scope="col">Aksi</th>
                                    
                                </tr>
                                </thead>
                                

                                    @php $no = 1 ; @endphp
                                @foreach($kasus2 as $data)
                                    <tr>
                                    <th scope="row">{{ $no++ }} </th>
                                    <td>
                                        Kelurahan : {{ $data->rw->kelurahan->nama_kelurahan }} <br>
                                        Kecamatan : {{ $data->rw->kelurahan->kecamatan->nama_kecamatan }} <br>
                                        Kota : {{ $data->rw->kelurahan->kecamatan->kota->nama_kota }} <br>
                                        Provinsi : {{ $data->rw->kelurahan->kecamatan->kota->provinsi->nama_provinsi }}
                                    </td>
                                    <td>{{ $data->rw->nama }}</td>
                                    <td>{{ $data->jumlah_positif }}</td>
                                    <td>{{ $data->jumlah_sembuh }}</td>
                                    <td>{{ $data->jumlah_meninggal }}</td>
                                    <td>{{ $data->tanggal }}</td>

                         <td style="text-align: center;">
                             <form action="{{ route('kasus2.destroy', $data->id) }}" method="POST">
                                 @csrf
                                 @method('DELETE')
                                <a href="{{ route('kasus2.edit', $data->id) }}"
                                    class="btn btn-outline-success btn-sm"><i class="fa fa-edit">
                                        Edit</i></a>
                                        <button type="submit" class="btn btn-outline-danger btn-sm"
                                           onclick="return confirm('Apakah Anda Yakin ?')"><i
                                            class="fa fa-trash-alt"> Hapus</i></button>
                                     </form>
                                   </tr> 
                                </td>   
                    @endforeach 
                        </tbody>
                    </table>                                 
                </div>
            </div>
         </div>
     </div>
 </div>
@endsection