<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTTP;
use Illuminate\Support\Facades\DB;
use App\Models\Kasus2;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Carbon\Carbon;

class ApiController extends Controller
{
    
    public function index()
    {
     $hariini = Carbon::now()->format('d-m-Y');
     $data = DB::table('kasus2s')
        ->select(DB::raw('sum(jumlah_positif) as jumlah_positif'),
                 DB::raw('sum(jumlah_sembuh) as jumlah_sembuh'),
                 DB::raw('sum(jumlah_meninggal) as jumlah_meninggal'),
                 DB::raw('max(tanggal) as Tanggal'))
        ->whereDay('tanggal', '=' , $hariini)
        ->get();
        
    $hh = DB::table('kasus2s')    
      ->select(DB::raw('sum(jumlah_positif) as jumlah_positif'),
               DB::raw('sum(jumlah_sembuh) as jumlah_sembuh'),
               DB::raw('sum(jumlah_meninggal) as jumlah_meninggal'))
      ->get();
      
    $res = [
        'success' => true,
        'Data' => [
            'Hari_Ini' => $data,
            'Total' => $hh
        ],
         'message' => 'Berhasil'
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


    public function kota2(){
        $yy  = DB::table('kotas')
        ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
        ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
        ->join('rws','rws.id_kelurahan','=','kelurahans.id')
        ->join('kasus2s','kasus2s.id_rw','=','rws.id')
        ->select('nama_kota',
                DB::raw('sum(kasus2s.jumlah_positif) as jumlah_positif'),
                DB::raw('sum(kasus2s.jumlah_sembuh) as jumlah_sembuh'),
                DB::raw('sum(kasus2s.jumlah_meninggal) as jumlah_meninggal'))
        ->groupBy('nama_kota')
        ->get();


        $data1 = [
            'succes' => true,
            'Data'   => $yy,
            'message' => "Data Kasus Kota Ditampilkan"
                ];
      
                    return response()->json($data1,200);
    }

    public function kecamatan2(){
        $yt  = DB::table('kecamatans')
        ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
        ->join('rws','rws.id_kelurahan','=','kelurahans.id')
        ->join('kasus2s','kasus2s.id_rw','=','rws.id')
        ->select('nama_kecamatan',
                DB::raw('sum(kasus2s.jumlah_positif) as jumlah_positif'),
                DB::raw('sum(kasus2s.jumlah_sembuh) as jumlah_sembuh'),
                DB::raw('sum(kasus2s.jumlah_meninggal) as jumlah_meninggal'))
        ->groupBy('nama_kecamatan')
        ->get();


        $data2 = [
            'succes' => true,
            'Data'   => $yt,
            'message' => "Data Kasus Kecamatan Ditampilkan"
                ];
      
                    return response()->json($data2,200);

    }

    public function kelurahan2(){
        $yh  = DB::table('kelurahans')
        ->join('rws','rws.id_kelurahan','=','kelurahans.id')
        ->join('kasus2s','kasus2s.id_rw','=','rws.id')
        ->select('nama_kelurahan',
                DB::raw('sum(kasus2s.jumlah_positif) as jumlah_positif'),
                DB::raw('sum(kasus2s.jumlah_sembuh) as jumlah_sembuh'),
                DB::raw('sum(kasus2s.jumlah_meninggal) as jumlah_meninggal'))
        ->groupBy('nama_kelurahan')
        ->get();


        $data3 = [
            'succes' => true,
            'Data'   => $yh,
            'message' => "Data Kasus Kelurahan Ditampilkan"
                ];
      
                    return response()->json($data3,200);

    }
    
    public function global(){
       
        $url =  Http::get('https://api.kawalcorona.com/')->json();
    	$dataa = [];
    	foreach ($url as $key => $value) {
    		$dtarray = $value['attributes'];
    		$res = [
                'Id' => $dtarray['OBJECTID'], 
    			'Negara' => $dtarray['Country_Region'],
    			'Positif' => $dtarray['Confirmed'],
    			'Meninggal' => $dtarray['Deaths'],
    			'Sembuh' => $dtarray['Recovered']
    		];
    		array_push($dataa, $res);
    	}

    	$hasil = [
    		'success' => true,
    		'data' => $dataa,
    		'message' => 'Berhasil'
    	];

    	return response()->json($hasil, 200);
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
