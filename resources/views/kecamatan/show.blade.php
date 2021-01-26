@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
         <div class="card-body">

         <form action="{{route('kecamatan.show', $kecamatan->id)}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Kode Kecamatan</label>
                <input type="text" name="kode_kecamatan" class="form-control" value="{{$kecamatan->kode_kecamatan}}" readonly>  
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Nama Kecamatan</label>
                <input type="text" name="nama_kecamatan" class="form-control" value="{{$kecamatan->nama_kecamatan}}" readonly>
            </div>
            <div class="mb-3">
                <label for="">Nama Kota</label>
                <input type="text" name="nama_kota" class="form-control" value="{{$kecamatan->kota->nama_kota}}" readonly> 
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