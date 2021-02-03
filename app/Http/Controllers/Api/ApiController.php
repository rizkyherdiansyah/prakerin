<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kasus2;
use App\Models\Provinsi;

class ApiController extends Controller
{
    
    public function index()
    {
        $positif = DB::table('rws')
                ->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
                ->join('kasus2s','rws.id','=','kasus2s.id_rw')
                ->sum('kasus2s.jumlah_positif');

        $sembuh = DB::table('rws')
                ->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
                ->join('kasus2s','rws.id','=','kasus2s.id_rw')
                ->sum('kasus2s.jumlah_sembuh');
         
        $meninggal = DB::table('rws')
                ->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
                ->join('kasus2s','rws.id','=','kasus2s.id_rw')
                ->sum('kasus2s.jumlah_meninggal');         
                
        $res = [
            'succes' => true,
            'Data'   => 'Data Kasus Indonesia',
            'Jumlah Positif' => $positif,
            'Jumlah Sembuh'  => $sembuh,
            'Jumlah Meninggal' => $meninggal,
            'message' => "Data Ditampilkan"
        ];
        
            return response()->json($res,200);

    }

    public function provinsi2(){

        $nampil  = DB::table('provinsis')
        ->join('kotas','kotas.id_provinsi','=','provinsis.id')
        ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
        ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
        ->join('rws','rws.id_kelurahan','=','kelurahans.id')
        ->join('kasus2s','kasus2s.id_rw','=','rws.id')
        ->select('nama_provinsi',
                DB::raw('sum(kasus2s.jumlah_positif) as jumlah_positif'),
                DB::raw('sum(kasus2s.jumlah_sembuh) as jumlah_sembuh'),
                DB::raw('sum(kasus2s.jumlah_meninggal) as jumlah_meninggal'))
        ->groupBy('nama_provinsi')
        ->get();


        $data = [
            'succes' => true,
            'Data'   => $nampil,
            'message' => "Data Kasus Provinsi Ditampilkan"
                ];
      
                    return response()->json($data,200); 
                  
               
    }
      
    public function store(Request $request)
    {
        
    }

 
    public function show($id)
    {
          
    }


  
    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
