@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
         <div class="card-body">

         <form action="{{route('kota.show', $kota->id)}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Kode Kota</label>
                <input type="text" name="kode_kota" class="form-control" value="{{$kota->kode_kota}}" readonly>  
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Nama Kota</label>
                <input type="text" name="nama_kota" class="form-control" value="{{$kota->nama_kota}}" readonly>
            </div>
            <div class="mb-3">
                <label for="">Nama Provinsi</label>
                <input type="text" name="nama_provinsi" class="form-control" value="{{$kota->provinsi->nama_provinsi}}" readonly> 
            </div>
                
            </div>
            <a href="{{url()->previous()}}" class="btn btn-primary">Kembali</button></a>
            </form>

                </div>
             </div>
         </div>
     </div>
  </div>
@endsection