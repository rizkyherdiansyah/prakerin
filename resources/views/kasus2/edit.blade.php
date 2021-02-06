@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
         <div class="card-body">

         <form action="{{route('kasus2.update', $kasus2->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <livewire:kasus2/>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Jumlah Positif</label>
                <input type="text" name="jumlah_positif" class="form-control" value="{{$kasus2->jumlah_positif}}" >
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Jumlah Sembuh</label>
                <input type="text" name="jumlah_sembuh" class="form-control" value="{{$kasus2->jumlah_sembuh}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Jumlah Meninggal</label>
                <input type="text" name="jumlah_meninggal" class="form-control" value="{{$kasus2->jumlah_meninggal}}">  
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" value="{{$kasus2->tanggal}}">  
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