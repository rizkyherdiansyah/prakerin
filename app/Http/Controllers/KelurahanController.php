<?php

namespace App\Http\Controllers;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
   public function __construct()
    {
       $this->middleware('auth');
    }
    
    public function index()
    {
        $kelurahan = Kelurahan::with('kecamatan')->get();
        return view('kelurahan.index',compact('kelurahan'));
    }


    public function create()
    {   
        $kecamatan = Kecamatan::all();
        $kelurahan = Kelurahan::all();
        return view('kelurahan.create', compact('kelurahan','kecamatan'));
    }

   
    public function store(Request $request)
    {
       //Validasi
       $this->validate($request,[
         'nama_kelurahan' => 'required|min:5|max:20',
      ]);

       $kelurahan = new Kelurahan();
       $kelurahan->nama_kelurahan =$request->nama_kelurahan;
       $kelurahan->id_kecamatan =$request->id_kecamatan;
       $kelurahan->save();
       return redirect()->route('kelurahan.index');
    }

    
    public function show($id)
    {
       $kelurahan = Kelurahan::findOrFail($id);
       return view('kelurahan.show' , compact('kelurahan'));
    }

 
    public function edit($id)
    {
       $kelurahan = Kelurahan::findOrFail($id);
       $kecamatan = Kecamatan::all();
      return view('kelurahan.edit' , compact('kelurahan','kecamatan'));
    }

   
    public function update(Request $request, $id)
    {
       $kelurahan = Kelurahan::findOrFail($id);
       $kelurahan->nama_kelurahan =$request->nama_kelurahan;
       $kelurahan->id_kecamatan =$request->id_kecamatan;
       $kelurahan->save();
       return redirect()->route('kelurahan.index')->with(['message'=>'Data Berhasil Diubah !']);
     
    }
  
    public function destroy($id)
    {
       $kelurahan = Kelurahan::findOrFail($id)->delete();
       return redirect()->route('kelurahan.index')->with(['message'=>'Data Berhasil Dihapus !']);
    }
}