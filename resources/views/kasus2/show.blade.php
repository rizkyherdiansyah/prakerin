@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
         <div class="card-body">

         <form action="{{route('kasus2.show', $kasus2->id)}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="">Nama Provinsi</label>
                <input type="text" name="nama_provinsi" class="form-control" value="{{$kasus2->rw->kelurahan->kecamatan->kota->provinsi->nama_provinsi}}" readonly> 
            </div>
            <div class="mb-3">
                <label for="">Nama Kota</label>
                <input type="text" name="nama_kota" class="form-control" value="{{$kasus2->rw->kelurahan->kecamatan->kota->nama_kota}}" readonly> 
            </div>
            <div class="mb-3">
                <label for="">Nama Kecamatan</label>
                <input type="text" name="nama_kecamatan" class="form-control" value="{{$kasus2->rw->kelurahan->kecamatan->nama_kecamatan}}" readonly> 
            </div>
            <div class="mb-3">
                <label for="">Nama Kelurahan</label>
                <input type="text" name="nama_kelurahan" class="form-control" value="{{$kasus2->rw->kelurahan->nama_kelurahan}}" readonly> 
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Rw</label>
                <input type="text" name="nama" class="form-control" value="{{$kasus2->rw->nama}}" readonly>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Jumlah Positif</label>
                <input type="text" name="jumlah_positif" class="form-control" value="{{$kasus2->jumlah_positif}}"readonly >
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Jumlah Sembuh</label>
                <input type="text" name="jumlah_sembuh" class="form-control" value="{{$kasus2->jumlah_sembuh}}"readonly >
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Jumlah Meninggal</label>
                <input type="text" name="jumlah_positif" class="form-control" value="{{$kasus2->jumlah_meninggal}}"readonly>  
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" value="{{$kasus2->tanggal}}"readonly>  
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