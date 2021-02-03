<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provinsi;

class ProvinsiController extends Controller
{
   
    public function index()
    {
        $provinsi = Provinsi::latest()->get();
        $res = [
            'success' => true,
            'data' => $provinsi,
            'message' => 'Data Provinsi Ditampilkan'            
        ];

        return response()->json($res,200);
    }

    public function store(Request $request)
    {
        $provinsi = new Provinsi();
        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->nama_provinsi = $request->nama_provinsi;
        $provinsi->save();

        $res = [
            'success'=> true,
            'data' => $provinsi,
            'message' => 'Data Berhasil Ditambah'
        ];
        
        return response()->json($res,200);
         
    }

    
    public function show($id)
    {
        $provinsi = Provinsi::whereId($id)->first();
            $res = [
                'success' => true,
                'data' => $provinsi,
                'message' => 'Berhasil'
            ];

            return response()->json($res,200);
    }

  
    public function update(Request $request, $id)
    {
       
    }

   
    public function destroy($id)
    {
        $provinsi = Provinsi::whereId($id)->first();
        $provinsi->delete();

        if ($provinsi) {
            return response()->json([
                'success' => true,
                'message' => 'Provinsi Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Provinsi Gagal Dihapus!',
            ], 500);
        }
    }
}
