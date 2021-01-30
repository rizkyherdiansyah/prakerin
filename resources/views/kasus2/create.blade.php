@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <form action="{{route('kasus2.store')}}" class="form-horizontal m-t-30" method="post">
                            @csrf
                            <div class="col">
                                    <livewire:kasus2 />
                                </div>
                                        <div class="mb-8 form-group">
                                            <label for="" class="form-label">Jumlah Positif</label>
                                            <input type="number" name="jumlah_positif" class="form-control">  
                                        </div>
                                        <div class="mb-8 form-group">
                                            <label for="" class="form-label">Jumlah Sembuh</label>
                                            <input type="number" name="jumlah_sembuh" class="form-control">  
                                        </div>  
                                        <div class="mb-8 form-group">
                                            <label for="" class="form-label">Jumlah Meninggal</label>
                                            <input type="number" name="jumlah_meninggal" class="form-control">  
                                        </div>
                                        <div class="mb-8 form-group">
                                           <label for="" class="form-label">Tanggal</label>
                                           <input type="date" name="tanggal" class="form-control">  
                                        </div>    

                                        <div class="form-group">
                                        <button type="submit" class="float-right btn btn-outline-primary">Submit</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection