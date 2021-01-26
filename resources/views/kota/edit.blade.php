@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
         <div class="card-body">

         <form action="{{route('kota.update', $kota->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">Kode Kota</label>
                <input type="text" name="kode_kota" class="form-control" value="{{$kota->kode_kota}}" >  
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Nama Kota</label>
                <input type="text" name="nama_kota" class="form-control" value="{{$kota->nama_kota}}" >
            </div>
            <div class="mb-3">
                <label for="">Nama Provinsi</label>
                <select name="id_provinsi" class="form-control"> 
                    @foreach ($provinsi as $data)
                        <option value="{{$data->id}}" >{{$data->nama_provinsi}}</option>
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