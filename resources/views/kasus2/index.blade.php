@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

         <div class="card-body">

         <a href="{{route('kasus2.create')}}"class="btn btn-info float-right"><b>Tambah Data</b></a>   

                    <table class="table">
                        <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Lokasi</th>
                              <th scope="col">RW</th>
                              <th scope="col">Jumlah Positif</th>
                              <th scope="col">Jumlah Sembuh</th>
                              <th scope="col">Jumlah Meninggal</th>
                              <th scope="col">Tanggal</th>
                              <th scope="col">Action</th>
                                    
                                </tr>
                                </thead>
                                <tbody>

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

                                    <td>
                                    <form action="{{route('kasus2.destroy' , $data->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('kasus2.edit', $data->id)}}"class="btn btn-success float-right">Edit</a>
                                    <a href="{{route('kasus2.show', $data->id)}}"class="btn btn-warning float-right">Show</a>
                                    <button type="submit" class="btn btn-danger float-right">Delete</a>
                                     </form>
                                </td>
                            </tr>      
                        </tbody>
                    @endforeach 
                    </table> 
                                                    
                </div>
            </div>
         </div>
     </div>
 </div>
@endsection