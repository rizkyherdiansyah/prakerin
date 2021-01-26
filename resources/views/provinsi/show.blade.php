@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
         <div class="card-body">

         <form action="{{route('provinsi.show', $provinsi->id)}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Kode Provinsi</label>
                <input type="text" name="kode_provinsi" class="form-control" value="{{$provinsi->kode_provinsi}}" readonly> 
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Nama Provinsi</label>
                <input type="text" name="nama_provinsi" class="form-control" value="{{$provinsi->nama_provinsi}}" readonly>
            </div>
                
            <a href="{{url()->previous()}}" class="btn btn-primary">Kembali</button></a>
        </form>
           
                </div>
             </div>
         </div>
     </div>
  </div>
@endsection