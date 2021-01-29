<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Xmapel;
class XmapelController extends Controller
{
    //

    public function xmateri(){
        return view('xmapel.xmateri');
    }

    public function index(Request $request){
        if($request->has('cari')){
            $data_xmapel = \App\Xmapel::where('nm_xmapel','LIKE', '%'.$request->cari.'%')->get();
        }else{
            $data_xmapel = \App\Xmapel::all();// variabel data xmapel harus dilempar ke view
        }
        
        return view('xmapel.index',['data_xmapel' => $data_xmapel]);
    }

    public function create(Request $request){
        //dd($request->all());
        $this->validate($request, [
            'nm_xmapel' => 'required|min:5',
        ]);


        //insert ke table mapel
        $xmapel = Xmapel::create($request->all());
        return redirect('xmapel')->with('sukses','Data Berhasil Diinputkan !!');
    }

    public function edit(Xmapel $xmapel){
        return view('xmapel/edit',['xmapel' => $xmapel]);
    }

    public function update(Request $request, Xmapel $xmapel){
        //dd($request->all());
        $xmapel -> update($request->all());
        return redirect('xmapel')->with('sukses','Data Berhasil Diubah !!');
    }

    public function delete(Xmapel $xmapel){
        $xmapel -> delete($xmapel);
        return redirect('xmapel')->with('sukses','Data Berhasil Dihapus !!');
    }

    public function profile(Xmapel $xmapel){
        $xmatapelajaran = \App\Xmapel::all();
    }

}
