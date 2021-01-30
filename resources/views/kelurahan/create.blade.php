@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
         <div class="card-body">

         <form action="{{route('kelurahan.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Nama Kelurahan</label>
                <input type="text" name="nama_kelurahan" class="form-control">
            </div>
            <br>
            @if (count($errors) > 0)
                    <div class="alert alert-danger">
                      <ul>
                         @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                     </div>
                @endif
            <div class="mb-3">
                <label for="">Nama Kecamatan</label>
                <select name="id_kecamatan" class="form-control">
                    @foreach ($kecamatan as $data)
                        <option value="{{$data->id}}">{{$data->nama_kecamatan}}</option>
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