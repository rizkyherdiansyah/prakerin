@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

         <div class="card-body">

         <a href="{{route('kecamatan.create')}}"class="btn btn-info float-right"><b>Tambah Data</b></a>   



                    <table class="table">
                        <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Kode Kecamatan</th>
                              <th scope="col">Nama Kecamatan</th>
                              <th scope="col">Kota</th>
                              <th scope="col">Action</th>
                                    
                                </tr>
                                </thead>
                                <tbody>

                                    @php $no = 1 ; @endphp
                                @foreach($kecamatan as $data)
                                    <tr>
                                    <th scope="row">{{ $no++ }} </th>
                                    <td>{{ $data->kode_kecamatan }}</td>
                                    <td>{{ $data->nama_kecamatan }}</td>
                                    <td>{{ $data->kota->nama_kota }}</td>


                                    <td>
                                    <form action="{{route('kecamatan.destroy' , $data->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('kecamatan.edit', $data->id)}}"class="btn btn-success float-right">Edit</a>
                                    <a href="{{route('kecamatan.show', $data->id)}}"class="btn btn-warning float-right">Show</a>
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