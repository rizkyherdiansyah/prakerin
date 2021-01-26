@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
         <div class="card-body">

         <form action="{{route('kecamatan.update', $kecamatan->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">Kode Kecamatan</label>
                <input type="text" name="kode_kecamatan" class="form-control" value="{{$kecamatan->kode_kecamatan}}" >  
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Nama Kecamatan</label>
                <input type="text" name="nama_kecamatan" class="form-control" value="{{$kecamatan->nama_kecamatan}}" >
            </div>
            <div class="mb-3">
                <label for="">Nama Kota</label>
                <select name="id_kota" class="form-control"> 
                    @foreach ($kota as $data)
                        <option value="{{$data->id}}" >{{$data->nama_kota}}</option>
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