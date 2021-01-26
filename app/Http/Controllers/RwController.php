<?php

namespace App\Http\Controllers;
use App\Models\Kelurahan;
use App\Models\Rw;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class RwController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    
    public function index()
    {
        $rw = rw::with('kelurahan')->get();
        return view('rw.index',compact('rw'));
    }


    public function create()
    {   
        $kelurahan = Kelurahan::all();
        $rw = rw::all();
        return view('rw.create', compact('rw','kelurahan'));
    }

   
    public function store(Request $request)
    {
       $rw = new Rw();
       $rw->nama =$request->nama;
       $rw->id_kelurahan =$request->id_kelurahan;
       $rw->save();
       return redirect()->route('rw.index');
    }

    
    public function show($id)
    {
       $rw = Rw::findOrFail($id);
       return view('rw.show' , compact('rw'));
    }

 
    public function edit($id)
    {
       $rw = Rw::findOrFail($id);
       $kelurahan = Kelurahan::all();
      return view('rw.edit' , compact('rw','kelurahan'));
    }

   
    public function update(Request $request, $id)
    {
       $rw = Rw::findOrFail($id);
       $rw->nama =$request->nama;
       $rw->id_kelurahan =$request->id_kelurahan;
       $rw->save();
       return redirect()->route('rw.index')->with(['message'=>'Data Berhasil Diubah !']);
     
    }
  
    public function destroy($id)
    {
       $rw = rw::findOrFail($id)->delete();
       return redirect()->route('rw.index')->with(['message'=>'Data Berhasil Dihapus !']);
    }
}