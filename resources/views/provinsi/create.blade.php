@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
         <div class="card-body">

         <form action="{{route('provinsi.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kode Provinsi</label>
                <input type="text" name="kode_provinsi" class="form-control">  
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Nama Provinsi</label>
                <input type="text" name="nama_provinsi" class="form-control">
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