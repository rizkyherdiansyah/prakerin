@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

         <div class="card-body">

         <a href="{{route('rw.create')}}"class="btn btn-info float-right"><b>Tambah Data</b></a>   



                    <table class="table">
                        <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Kelurahan</th>
                              <th scope="col">Action</th>
                                    
                                </tr>
                                </thead>
                                <tbody>

                                    @php $no = 1 ; @endphp
                                @foreach($rw as $data)
                                    <tr>
                                    <th scope="row">{{ $no++ }} </th>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->kelurahan->nama_kelurahan }}</td>


                                    <td>
                                    <form action="{{route('rw.destroy' , $data->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('rw.edit', $data->id)}}"class="btn btn-success float-right">Edit</a>
                                    <a href="{{route('rw.show', $data->id)}}"class="btn btn-warning float-right">Show</a>
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