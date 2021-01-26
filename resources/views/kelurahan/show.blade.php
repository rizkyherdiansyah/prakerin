@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
         <div class="card-body">

         <form action="{{route('kelurahan.show', $kelurahan->id)}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Nama Kelurahan</label>
                <input type="text" name="nama_kelurahan" class="form-control" value="{{$kelurahan->nama_kelurahan}}" readonly>
            </div>
            <div class="mb-3">
                <label for="">Nama Kecamatan</label>
                <input type="text" name="nama_kecamatan" class="form-control" value="{{$kelurahan->kecamatan->nama_kecamatan}}" readonly> 
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