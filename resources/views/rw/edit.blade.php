@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
         <div class="card-body">

         <form action="{{route('rw.update', $rw->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{$rw->nama}}" >
            </div>
            <div class="mb-3">
                <label for="">Nama Kelurahan</label>
                <select name="id_kelurahan" class="form-control"> 
                    @foreach ($kelurahan as $data)
                        <option value="{{$data->id}}" >{{$data->nama_kelurahan}}</option>
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