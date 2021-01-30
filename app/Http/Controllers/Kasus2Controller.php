<?php

namespace App\Http\Controllers;
use App\Models\Rw;
use App\Models\Kasus2;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class Kasus2Controller extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    
    public function index()
    {
        $kasus2 = Kasus2::with('rw')->get();
        return view('kasus2.index',compact('kasus2'));
    }


    public function create()
    {   
        $rw = Rw::all();
        $kasus2 = Kasus2::all();
        return view('kasus2.create', compact('kasus2','rw'));
    }

   
    public function store(Request $request)
    {
       //Validasi
       $this->validate($request,[
         'jumlah_positif' => 'required',
         'jumlah_sembuh' => 'required',
         'jumlah_meninggal' => 'required',
         'tanggal' => 'required',
      ]);

       $kasus2 = new Kasus2();
       $kasus2->jumlah_positif =$request->jumlah_positif;
       $kasus2->jumlah_sembuh =$request->jumlah_sembuh;
       $kasus2->jumlah_meninggal =$request->jumlah_meninggal;
       $kasus2->tanggal =$request->tanggal;
       $kasus2->id_rw =$request->id_rw;
       $kasus2->save();
       return redirect()->route('kasus2.index');
    }

    
    public function show($id)
    {
       $kasus2 = Kasus2::findOrFail($id);
       return view('kasus2.show' , compact('kasus2'));
    }

 
    public function edit($id)
    {
       $kasus2 = Kasus2::findOrFail($id);
       $rw = Rw::all();
      return view('kasus2.edit' , compact('kasus2','rw'));
    }

   
    public function update(Request $request, $id)
    {
       $kasus2 = Kasus2::findOrFail($id);
       $kasus2->jumlah_positif =$request->jumlah_positif;
       $kasus2->jumlah_sembuh =$request->jumlah_sembuh;
       $kasus2->jumlah_meninggal =$request->jumlah_meninggal;
       $kasus2->tanggal =$request->tanggal;
       $kasus2->id_rw =$request->id_rw;
       $kasus2->save();
       return redirect()->route('kasus2.index')->with(['message'=>'Data Berhasil Diubah !']);
     
    }
  
    public function destroy($id)
    {
       $kasus2 = Kasus2::findOrFail($id)->delete();
       return redirect()->route('kasus2.index')->with(['message'=>'Data Berhasil Dihapus !']);
    }
}