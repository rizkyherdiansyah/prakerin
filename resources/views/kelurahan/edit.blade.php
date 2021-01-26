@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
         <div class="card-body">

         <form action="{{route('kelurahan.update', $kelurahan->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">Nama Kelurahan</label>
                <input type="text" name="nama_kelurahan" class="form-control" value="{{$kelurahan->nama_kelurahan}}" >
            </div>
            <div class="mb-3">
                <label for="">Nama Kecamatan</label>
                <select name="id_kecamatan" class="form-control"> 
                    @foreach ($kecamatan as $data)
                        <option value="{{$data->id}}" >{{$data->nama_kecamatan}}</option>
                    @endforeach
                </select>        
            </div>
                
            </div>
               <button type="submit" class="btn btn-primary">Submit</button>
            </form>

                </div>
             </div>
         </div>
     </div>
  </div>
@endsection